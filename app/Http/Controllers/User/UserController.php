<?php

namespace App\Http\Controllers\User;

use App\Models\Owner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function store(Request $request)
    {
        
        $pessoa = Owner::create([
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
            'observacoes' => $request->observacoes,
            'tipo_pessoa' => $request->tipo_pessoa,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'cidade_nascimento' => $request->cidade_nascimento,
            'conjuge_nome' => $request->conjuge_nome,
            'escolaridade' => $request->escolaridade,
            'profissao' => $request->profissao,
            'cnpj' => $request->cnpj,
            'contato' => $request->contato,
            'endereco_atualizado' => $request->endereco_atualizado,
            'inscricao_estadual' => $request->inscricao_estadual,
            'inscricao_municipal' => $request->inscricao_municipal,
            'credenciado_data_inscricao' => $request->credenciado_data_inscricao,
            'credenciado_crmv' => $request->credenciado_crmv,
            'credenciado_crea' => $request->credenciado_crea,
            'credenciado_area_atuacao' => $request->credenciado_area_atuacao,
            'credenciado_data_baixa' => $request->credenciado_data_baixa,
            'associado_data_inscricao' => $request->associado_data_inscricao,
            'associado_tipo_afixo'  => $request->associado_tipo_afixo,
            'associado_afixo' => $request->associado_afixo,
            'associado_preposicao' => $request->associado_preposicao,
            'associado_data_baixa' => $request->associado_data_baixa,
            'associado_numero_inscricao_produtor_rural' => $request->associado_numero_inscricao_produtor_rural,
            'data_ultima_atualizacao_cadastral' => $request->data_ultima_atualizacao_cadastral,
        ]);
        return response()->json($pessoa);
    }
}
