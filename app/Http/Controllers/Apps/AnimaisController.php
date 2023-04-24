<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function meusAnimais()
    {
        return view('app.animais.meus-animais');
    }
}
