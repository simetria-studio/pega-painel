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

   public function warning()
   {
      return view('app.warning');
   }


   public function cobricao()
   {
      return view('app.comunicacoes.cobricao.index');
   }

   public function  asinino()
   {
      return view('app.comunicacoes.cobricao.asinino');
   }

   public function nascimento()
   {
      return view('app.comunicacoes.nascimento');
   }

   public function transferencia()
   {
      return view('app.comunicacoes.transferencia');
   }

   public function mensagem()
   {
      return view('app.comunicacoes.mensagem');
   }

   public function chamado()
   {
      return view('app.comunicacoes.chamado-tecnico');
   }

   public function segundaVia()
   {
      return view('app.comunicacoes.segunda-via');
   }
   public function baixaAnimal()
   {
      return view('app.comunicacoes.baixa-animal');
   }
   public function alteracaoAfixo()
   {
      return view('app.comunicacoes.alteracao-afixo');
   }

   public function alteracaoCategoria()
   {
      return view('app.comunicacoes.alteracao-categoria');
   }

   public function baixaAssociado()
   {
      return view('app.comunicacoes.baixa-associado');
   }
}
