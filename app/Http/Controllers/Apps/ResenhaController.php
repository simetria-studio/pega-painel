<?php

namespace App\Http\Controllers\Apps;

use App\Models\Mark;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResenhaController extends Controller
{
    public function choseOwner()
    {
        return view('app.resenha.chosen-owner', get_defined_vars());
    }

    public function choseAnimal()
    {
        return view('app.resenha.chosen-animal', get_defined_vars());
    }
    public function step1()
    {
        $marcas = Mark::where('categorie', 1)->get();
        return view('app.resenha.step-1', get_defined_vars());
    }

    public function step2()
    {

        $marcas = Mark::where('categorie', 2)->get();
        return view('app.resenha.step-2', get_defined_vars());
    }

    public function step3()
    {

        $marcas = Mark::where('categorie', 3)->get();
        return view('app.resenha.step-3', get_defined_vars());
    }
    public function step4()
    {

        $marcas = Mark::where('categorie', 4)->get();
        return view('app.resenha.step-4', get_defined_vars());
    }
    public function step5()
    {

        $marcas = Mark::where('categorie', 5)->get();
        return view('app.resenha.step-5', get_defined_vars());
    }
}
