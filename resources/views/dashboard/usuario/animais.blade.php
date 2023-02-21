@extends('layouts.dashboard')

@section('title', 'Usuários - Animais')

@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Usuários, Seus animais</h1>
    </div>

    <div class="col-10 mx-auto ">
        <div class="bg-secondary user-card mb-3">
            <div class="text-center name-card">
                <span class="fs-5 text-primary">Código do animal</span>
            </div>
            <div class="d-flex justify-content-around align-items-center p-3 ">
                <div class="dados-pessoais">
                    <p class="mb-0">Nome do animal: <span></span> </p>
                    <p class="mb-0">Gênero: <span></span> </p>
                    <p class="mb-0">Fazenda ou haras: <span></span> </p>
                    <p class="mb-0">Endereço: <span></span> </p>
                </div>

                <div class="dados-pessoais">
                    <p class="mb-0">Nascimento: <span></span> </p>
                    <p class="mb-0">Genitor: <span></span></p>
                    <p class="mb-0">Genitora: <span></span></p>
                </div>
                <div class="mb-2">
                    <a href="#" type="button" class="btn btn-default">Página do animal</a>
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
