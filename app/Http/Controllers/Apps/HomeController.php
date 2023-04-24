<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      return view('app.index');
   }

   public function pessoas()
   {
      return view('app.pessoas.index');
   }

   public function arbitros()
   {
      return view('app.pessoas.arbitros');
   }

   public function criadores()
   {
      return view('app.pessoas.criadores');
   }

   public function meuPerfil()
   {
      return view('app.pessoas.meu-perfil');
   }

   public function parceiros()
   {
      return view('app.pessoas.parceiros');
   }

   public function veterinarios()
   {
      return view('app.pessoas.veterinarios');
   }
   public function zootecnicos()
   {
      return view('app.pessoas.zootecnico');
   }

   public function tecnicos()
   {
      return view('app.pessoas.tecnicos');
   }

   public function animais()
   {
      return view('app.animais.index');
   }
   public function financeiro()
   {
      return view('app.financeiro.index');
   }

   public function comunicacoes()
   {
      return view('app.comunicacoes.index');
   }

   public function configuracoes()
   {
      return view('app.configuracao.index');
   }
}
