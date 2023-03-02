<?php

namespace App\Http\Controllers\Admin;

use App\Models\Owner;
use App\Models\Animal;
use App\Models\AuxEstado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function animais($id)
    {
        $animais = Animal::where('proprietario', $id)->with('getOwner')->paginate(10);

        return view('dashboard.usuario.animais', get_defined_vars());
    }

    public function filtro(Request $request)
    {
        if ($request->ajax()) {
            $pessoas = Owner::with('getAdress')->where('nome', 'like', '%' . $request->nome . '%')->orWhere('cpf', 'like', '%' . $request->nome . '%')->orWhere('cnpj', 'like', '%' . $request->nome . '%')->get();
            $view = view('dashboard.usuario.includes.filter', get_defined_vars())->render();
            return response()->json([get_defined_vars()]);
        }
    }
}
