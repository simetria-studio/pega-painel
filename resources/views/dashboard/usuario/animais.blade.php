@extends('layouts.dashboard')

@section('title', 'Usuários - Animais')

@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Usuários, Seus animais</h1>
    </div>

    <div class="col-10 mx-auto ">
        @foreach ($animais as $animal)
            <div class="bg-secondary user-card mb-3">
                <div class="text-center name-card">
                    <span class="fs-5 text-primary">{{ $animal->nome_completo }}</span>
                </div>
                <div class="d-flex justify-content-around align-items-center p-3 ">
                    <div class="d-flex align-items-center">
                        <div class="dados-pessoais">
                            <p class="mb-0">Nome do genitor:
                                <span>{{ $animal->getPai->nome_completo ?? 'Genitor não registrado' }}</span></p>
                            <p class="mb-0">Nome da genitora:
                                <span>{{ $animal->getMae->nome_completo ?? 'Genitora não registrada' }}</span></p>
                            <p class="mb-0">Cadastro: <span>{{ $animal->registro_numero }}</span></p>
                            <p class="mb-0">Propietário(os): <span>{{ $animal->getOwner->nome ?? '' }}</span></p>
                        </div>
                    </div>

                    <div>
                        <div class="dados-pessoais">
                            <p class="mb-0">Código: <span>{{ $animal->numero_chip }}</span> </p>
                            <p class="mb-0">Tipo de reprodução: <span>{{ $animal->doador }}</span></p>
                        </div>
                        <div class="my-2">
                            <a href="{{ route('informacoes-animal') }}" type="button" class="btn btn-default">Mais
                                informações</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div>
            <div class="d-flex justify-content-center">
                {{ $animais->links() }}
            </div>
        </div>
    </div>
@endsection
