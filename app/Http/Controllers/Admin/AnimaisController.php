<?php

namespace App\Http\Controllers\Admin;

use App\Models\Livro;
use App\Models\Owner;
use App\Models\Animal;
use App\Models\Fazenda;
use App\Models\Pelagem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnimaisController extends Controller
{
    public function animais()
    {
        $animais = Animal::with('getPai', 'getMae', 'getOwner')->paginate(10);

        return view('dashboard.animais.animais', get_defined_vars());
    }
    public function getAnimais(Request $request)
    {
        $query = $request->get('q');
        $results = [];

        if ($query) {
            $animais = Animal::where('nome_completo', 'like', "%{$query}%")
                ->limit(10)
                ->get();
        }
        return response()->json($animais);
    }
    public function cadastrarAnimal()
    {
        $pelagens = Pelagem::all();
        $livros = Livro::get();
        return view('dashboard.animais.cadastrar', get_defined_vars());
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
        $animal = Animal::create($request->all());

        return redirect()->route('animais')->with('success', 'Animal cadastrado com sucesso!');
    }

    public function getOwners(Request $request)
    {
        $query = $request->get('q');
        $results = [];

        if ($query) {
            $owners = Owner::where('nome', 'like', "%{$query}%")
                ->limit(10)
                ->get();
        }
        return response()->json($owners);
    }

    public function getFazenda(Request $request)
    {
        $fazendas = Fazenda::where('pessoa', $request->id)->get();
        return response()->json($fazendas);
    }

    public function filtro(Request $request)
    {
        if ($request->ajax()) {
            $query = Animal::with([
                'getPai',
                'getMae',
                'getOwner',
                'getCreator',
                'getFazenda',
                'getPelagem'
            ]);
            // Indexar as colunas relevantes
            $query->where(function ($q) use ($request) {
                $q->where('nome_completo', 'like', '%' . $request->nome . '%');
                $q->orWhereHas('getOwner', function ($ownerQuery) use ($request) {
                    $ownerQuery->where('nome', 'like', '%' . $request->nome . '%');
                });
            });

            // Limitar o número de resultados
            $query->limit(100);

            $animais = $query->get();

            $view = view('dashboard.animais.includes.filter', compact('animais'))->render();
            return response()->json([get_defined_vars()]);
        }
    }
}
