@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Bem vindo! <strong class="user">{{ auth()->user()->name }}</strong></h1>
    </div>
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="row text-center">

                <div class="col-3 gap-3 ">
                    <div class="content">
                        <p class="h5">Animais Cadastrados</p>
                    </div>
                    <div class="square">
                        <p>0000</p>
                    </div>
                </div>

                <div class="col-3 gap-3">
                    <div class="content">
                        <p class="h5">Cadastros</p>
                    </div>
                    <div class="square">
                        <p>0000</p>
                    </div>
                </div>

                <div class="col-3 gap-3">
                    <div class="content">
                        <p class="h5">Acessos Ecommerce</p>
                    </div>
                    <div class="square">
                        <p>0000</p>
                    </div>
                </div>

                <div class="col-3 gap-3">
                    <div class="content">
                        <p class="h5">Acessos App</p>
                    </div>
                    <div class="square">
                        <p>0000</p>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
