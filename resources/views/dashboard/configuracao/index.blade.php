@extends('layouts.dashboard')

@section('title', 'Comunicações')
@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Configurações</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="perfil-conf rounded-cicle bg-secondary">
                <img src="#" alt="" class="img-fluid rounded-cicle">
                <div class="upload">
                    <label for="perfil-upload" class="text-primary">
                        <iconify-icon icon="ic:outline-file-upload" width="60" height="60"></iconify-icon>
                    </label>
                    <input type="file" id="perfil-upload" class="d-none">
                </div>
            </div>
        </div>
    </div>
@endsection
