@extends('layouts.dashboard')

@section('title', 'Usuários')
@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Usuários</h1>
    </div>
    <div class="col-6 mx-auto mb-5">
        <form>
            <div class="search-group mb-3">
                <input type="text" class="form-control" placeholder="Pesquisar por nome, CPF ou CNPJ do usuário:">
                <a role="button" class="nav-link btn-search" type="button">
                    <iconify-icon icon="fa6-solid:magnifying-glass" width="20" height="20"></iconify-icon>
                </a>
            </div>
        </form>
    </div>

    <div class="col-10 mx-auto ">
        <div class="bg-secondary user-card mb-3">
            <div class="text-center name-card">
                <span class="fs-5 text-primary">Nome do Usuário</span>
            </div>
            <div class="d-flex justify-content-around align-items-center p-3 ">
                <div class="d-flex align-items-center">
                    <div class="perfil">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
                    </div>
                    <div class="dados-pessoais">
                        <p class="mb-0">Email: <span>tiago.ezidio99@gmail.com</span> </p>
                        <p class="mb-0">CPF/CNPJ: <span>123.456.789-00</span> </p>
                        <p class="mb-0">CEP: <span>83.310-210</span> </p>
                        <p class="mb-0">Endereço: <span>Rua dos Bobos, 0</span> </p>
                    </div>
                </div>

                <div>
                    <div class="dados-pessoais">
                        <p class="mb-0">Telefone: <span> (11) 99999-9999</span> </p>
                        <p class="">Tipo de usuário: <span>Afiliado</span></p>
                    </div>
                    <div class="mb-2">
                        <a href="{{ route('user-animais') }}" type="button" class="btn btn-default">Animais cadastrados</a>
                    </div>
                    <div class="mb-2">
                        <a href="{{ route('dados-pessoais') }}" type="button" class="btn btn-default">Mais informações</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
