<?php

namespace App\Http\Controllers\Apps;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cobricao;

class CobricaoController extends Controller
{
    public function store(Request $request)
    {   
        try {
            $request->validate([
                'reprodutor' => 'required',
          
                'data_cobricao' => 'required',
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Erro ao cadastrar cobrição!');
        }

        $cobricao = Cobricao::create($request->all());

        return redirect()->back()->with('success', 'Cobrição cadastrada com sucesso!');
    }

    public function getAnimal(Request $request)
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
}
