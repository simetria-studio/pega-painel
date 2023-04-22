<?php

namespace App\Http\Controllers\Admin;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnimaisController extends Controller
{
    public function animais()
    {
        $animais = Animal::with('getPai', 'getMae', 'getOwner')->paginate(10);

        return view('dashboard.animais.animais', get_defined_vars());
    }

    public function show($id)
    {
        $animal = Animal::with([
            'getPai',
            'getMae',
            'getOwner',
            'getCreator',
            'getFazenda',
            'getPelagem'
        ])->find($id);
        return view('dashboard.animais.info', get_defined_vars());
    }

    public function store(Request $request)
    {
        $animal = Animal::create([
            'nome_completo' => $request->nome_completo,
            'numero_chip' => $request->numero_chip,
            'especie' => $request->especie,
            'raca' => $request->raca,
            'registro_tipo' => $request->registro_tipo,
            'registro_livro' => $request->registro_livro,
            'registro_numero' => $request->registro_numero,
            'sexo' => $request->sexo,
            'pai' => $request->pai,
            'mae' => $request->mae,
            'data_nascimento' => $request->data_nascimento,
            'fazenda_nascimento' => $request->fazenda_nascimento,
            'criador' => $request->criador,
            'proprietario' => $request->proprietario,
            'pelagem' => $request->pelagem,
            'doador' => $request->doador,
            'dna_tipo' => $request->dna_tipo,
            'dna_data_exame' => $request->dna_data_exame,
            'dna_laboratorio' => $request->dna_laboratorio,
            'data_castracao' => $request->data_castracao,
            'data_baixa' => $request->data_baixa,
            'motivo_baixa' => $request->motivo_baixa,
            'status' => $request->status,
            'observacoes' => $request->observacoes,
            'marca_criador' => $request->marca_criador,
        ]);
        return response()->json($animal);
    }
}
