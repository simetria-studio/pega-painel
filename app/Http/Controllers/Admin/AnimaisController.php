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
}
