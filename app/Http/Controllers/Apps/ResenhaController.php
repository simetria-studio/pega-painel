<?php

namespace App\Http\Controllers\Apps;

use App\Models\Mark;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResenhaController extends Controller
{
    public function step1()
    {
        $marcas = Mark::all();
        return view('app.resenha.step-1', get_defined_vars());
    }

    public function step2()
    {

        $marcas = Mark::all();
        return view('app.resenha.step-2', get_defined_vars());
    }

    public function step3()
    {

        $marcas = Mark::all();
        return view('app.resenha.step-3', get_defined_vars());
    }
    public function step4()
    {

        $marcas = Mark::all();
        return view('app.resenha.step-4', get_defined_vars());
    }
    public function step5()
    {

        $marcas = Mark::all();
        return view('app.resenha.step-5', get_defined_vars());
    }
}
