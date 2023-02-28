<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function comunicacao()
    {
        return view('dashboard.comunicacao.index');
    }
    public function cadastrar()
    {
        return view('dashboard.cadastrar.index');
    }
    public function ecommerce()
    {
        return view('dashboard.ecommerce.index');
    }





    public function usuario()
    {
        return view('dashboard.usuario.index');
    }

    public function userAnimais()
    {
        return view('dashboard.usuario.animais');
    }
    public function dadosPessoais()
    {
        return view('dashboard.usuario.dados-pessoais');
    }






    public function animais()
    {
        return view('dashboard.animais.index');
    }
    public function consultarAnimais()
    {
      
    }
    public function informacoesAnimal()
    {
        return view('dashboard.animais.info');
    }
    public function cadastrarAnimal()
    {
        return view('dashboard.animais.cadastrar');
    }




    public function anuncio()
    {
        return view('dashboard.anuncio.index');
    }
    public function permissoes()
    {
        return view('dashboard.permissao.index');
    }
    public function financeiro()
    {
        return view('dashboard.financeiro.index');
    }
    public function configuracoes()
    {
        return view('dashboard.configuracao.index');
    }
}
