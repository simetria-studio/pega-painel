<?php

namespace App\Http\Controllers\Apps;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnimaisController extends Controller
{
    public function meusAnimais()
    {
        $owner = auth()->user()->owner->id;
        $animais = Animal::where('proprietario', $owner)->with(
            'getPai',
            'getMae',
            'getOwner',
            'getCreator',
            'getFazenda',
            'getPelagem'
        )->paginate(10);

        return view('app.animais.meus-animais', get_defined_vars());
    }
}
