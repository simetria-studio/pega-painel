@extends('layouts.dashboard')

@section('title', 'Comunicações')
@section('content')
    <div class="col-5 mb-3 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Configurações</h1>
    </div>
    <div class="container">
        <form>
            <div class="col-10 d-flex justify-content-center mx-auto my-5">
                <div class="perfil-conf rounded-cicle bg-secondary mb-3 ">
                    <img src="#" alt="" class="img-fluid rounded-cicle">
                    <div class="upload">
                        <label for="perfil-upload" class="text-primary">
                            <iconify-icon icon="ic:outline-file-upload" width="60" height="60"></iconify-icon>
                        </label>
                        <input type="file" id="perfil-upload" class="d-none">
                    </div>
                    <p class="text-center text-primary mb-0">Alterar imagem <br> de perfil</p>
                </div>
            </div>
            <div class="col-10 mx-auto">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="" class="form-label">Nome de usuário</label>
                        <input type="text" class="form-control" value="Nome de usuário">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="form-label">E-mail corporative</label>
                        <input type="text" class="form-control" value="usuario@admin.com">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="form-label">Login</label>
                        <input type="text" class="form-control" value="admin">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="form-label">Senha</label>
                        <input type="password" class="form-control" value="admin">
                    </div>
                </div>
            </div>
            <div class="col-10 mx-auto my-5">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-default ">Salvar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
