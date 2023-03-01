<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function index()
    {
        $pessoas = Owner::with('getAdress')->paginate(10);
     
        return view('dashboard.usuario.index', get_defined_vars());
    }
}
