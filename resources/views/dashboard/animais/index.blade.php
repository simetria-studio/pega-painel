@extends('layouts.dashboard')

@section('title', 'Comunicações')
@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Animais</h1>
    </div>
    <div class="mt-5">
        <div class="row justify-content-center">
            <div class="col-8 d-flex justify-content-evenly">
                <div>
                    <a role="button" type="button" href="{{ route('consultar-animais') }}" class="btn btn-animais ">
                        <iconify-icon icon="cil:magnifying-glass" width="100" height="100"></iconify-icon>
                        Consultar
                    </a>
                </div>
                <div>
                    <a role="button" type="button" href="{{ route('cadastrar-animal') }}" class="btn  btn-animais">
                        <iconify-icon icon="ic:baseline-list-alt" width="100" height="100"></iconify-icon>
                        Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
