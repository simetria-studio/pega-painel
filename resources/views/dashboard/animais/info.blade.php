@extends('layouts.dashboard')

@section('title', 'Consultar animais')
@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Animais cadastrados</h1>
    </div>
    <div class="col-6 mx-auto mb-5">
        <form>
            <div class="search-group mb-3">
                <input type="text" class="form-control" placeholder="Pesquisar por nome, proprietário ou chip:">
                <a role="button" class="nav-link btn-search" type="button">
                    <iconify-icon icon="fa6-solid:magnifying-glass" width="20" height="20"></iconify-icon>
                </a>
            </div>
        </form>
    </div>

    <div class="col-10 mx-auto ">
        <div class="bg-secondary user-card mb-3">
            <div class="text-center name-card">
                <span class="fs-5 text-primary">Nome do Animal</span>
            </div>
            <div class="d-flex justify-content-around  p-3 ">
                <div class="dados-pessoais">
                    <p class="mb-0">Nome do genitor: <span></span></p>
                    <p class="mb-0">Nome da genitora: <span></span></p>
                    <p class="mb-0">Nascimento: <span></span></p>
                    <p class="mb-0">Cadastro: <span></span></p>
                    <p class="mb-0">Propietário: <span></span></p>
                    <p class="mb-0">Propietário 2: <span></span></p>
                    <p class="mb-0">Fazenda ou harras: <span></span></p>
                </div>

                <div class="dados-pessoais">
                    <p class="mb-0">Código: <span></span> </p>
                    <p class="mb-0">Tipo de reprodução: <span></span></p>
                    <p class="mb-0">Gênero: <span></span></p>
                    <p class="mb-0">Pelagem: <span></span></p>
                    <p class="mb-0">Reprodutor: <span></span></p>
                </div>
            </div>
            <div class="d-flex justify-content-around">
                <div class="mb-3">
                    <button class="btn btn-lg btn-light shadow">Exames <strong>+</strong></button>
                </div>
                <div class="mb-3">
                    <button class="btn btn-lg btn-light shadow">Vacinas <strong>+</strong></button>
                </div>

            </div>
        </div>
    </div>
@endsection
