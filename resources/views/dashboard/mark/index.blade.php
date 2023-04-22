@extends('layouts.dashboard')

@section('title', 'Marcas')

@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Marcas</h1>
    </div>
    <div class="container">
        <div class="">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marks as $mark)
                    <tr>
                        <td>{{ $mark->name }}</td>
                        <td><img width="50" src="{{ asset('storage/'. $mark->path) }}" alt=""></td>
                        <td>
                            <a href="{{ route('mark.edit', $mark->id) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                            <form action="{{ route('mark.destroy', $mark->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar marcas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('mark.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="imagem" class="form-label">Imagem</label>
                            <input type="file" class="form-control" id="imagem" name="image">
                        </div>

                        <div class="mb-3">
                            <label for="imagem" class="form-label">Categoria da marca</label>
                            <select class="form-select" aria-label="Default select example" name="categorie">
                                @foreach ($categorias as $key => $categoria)
                                    <option value="{{ $key }}">{{ $categoria }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
