<?php

namespace App\Http\Controllers\Admin;

use App\Models\Owner;
use App\Models\Animal;
use App\Models\AuxEstado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Endereco;
use App\Models\Fazenda;
use App\Models\User;

class PessoasController extends Controller
{
    public function index()
    {
        $pessoas = Owner::with('getAdress')->paginate(10);

        return view('dashboard.usuario.index', get_defined_vars());
    }

    public function show($id)
    {
        $pessoa = Owner::with('getAdress')->find($id);
        $estado = AuxEstado::where('id', $pessoa->getAdress->estado)->first();
        return view('dashboard.usuario.dados-pessoais', get_defined_vars());
    }

    public  function create()
    {
        $estados = AuxEstado::all();
        return view('dashboard.cadastrar.index', get_defined_vars());
    }

    public function animais($id)
    {
        $animais = Animal::where('proprietario', $id)->with('getOwner')->paginate(10);

        return view('dashboard.usuario.animais', get_defined_vars());
    }

    public function filtro(Request $request)
    {
        if ($request->ajax()) {
            $query = Owner::with('getAdress');

            // Indexar as colunas relevantes
            $query->where(function ($q) use ($request) {
                $q->where('nome', 'like', '%' . $request->nome . '%')
                    ->orWhere('cpf', 'like', '%' . $request->nome . '%')
                    ->orWhere('cnpj', 'like', '%' . $request->nome . '%');
            });

            // Limitar o número de resultados
            $query->limit(100);

            $pessoas = $query->get();

            $view = view('dashboard.usuario.includes.filter', compact('pessoas'))->render();
            return response()->json([get_defined_vars()]);
        }
    }
    public function edit($id)
    {
        $pessoa = Owner::with('getAdress')->find($id);
        $estado = AuxEstado::where('id', $pessoa->getAdress->estado)->first();
        return view('dashboard.usuario.edit', get_defined_vars());
    }
    public function update(Request $request, $id)
    {

        $pessoa = Owner::find($id);
        $pessoa->update([
            'nome' => $request->nome,
            'codigo' => $request->codigo,
            'datahora_cadastro' => $request->datahora_cadastro,
            'data_nascimento' => $request->data_nascimento,
            'sexo' => $request->sexo,
            'estado_civil' => $request->estado_civil,
            'telefone' => $request->telefone,
            'celular' => $request->celular,
            'whatsapp' => $request->whatsapp,
            'email' => $request->email,
            'tipo_pessoa' => $request->tipo_pessoa,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'cidade_nascimento' => $request->cidade_nascimento,
            'conjuge_nome' => $request->conjuge_nome,
            'escolaridade' => $request->escolaridade,
            'profissao' => $request->profissao,
            'cnpj' => $request->cnpj,
        ]);

        return redirect()->route('usuario')->with('success', 'Usuário atualizado com sucesso!');
    }
    public function createUser(Request $request)
    {

        $pessoa = Owner::create([
            'nome' => $request->name,
            'codigo' => $request->codigo,
            'data_nascimento' => $request->data_nascimento,
            'sexo' => $request->sexo,
            'estado_civil' => $request->estado_civil,
            'telefone' => $request->telefone,
            'celular' => $request->celular,
            'whatsapp' => $request->whatsapp,
            'email' => $request->email,
            'observacoes' => $request->observacoes,
            'tipo_pessoa' => $request->tipo_pessoa,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'cidade_nascimento' => $request->cidade_nascimento,
            'conjuge_nome' => $request->conjuge_nome,
            'escolaridade' => $request->escolaridade,
            'profissao' => $request->profissao,
            'contato' => $request->contato,
            'endereco_atualizado' => $request->endereco_atualizado,
            'associado_tipo_afixo'  => $request->associado_tipo_afixo,
            'associado_afixo' => $request->associado_afixo,
            'associado_preposicao' => $request->associado_preposicao,

        ]);
        $endereco = Endereco::create([
            'pessoa' => $pessoa->id,
            'cep' => $request->cep,
            'endereco' => $request->endereco,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'tipo' => $request->tipo,
            'observacao' => $request->observacao,
            'correspondencia' => $request->correspondencia,
        ]);

        $fazenda = Fazenda::create([
            'pessoa' => $pessoa->id,
            'nome' => $request->nome_fazenda,
            'cidade' => $request->cidade_fazenda,
            'estado' => $request->fazenda_estado,
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->cpf),
            'owner_id' => $pessoa->id,
            'permission' => $request->type,
        ]);

        return redirect()->route('usuario')->with('success', 'Usuário criado com sucesso!');
    }
}
