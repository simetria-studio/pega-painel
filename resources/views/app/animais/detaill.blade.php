@extends('layouts.app.main')

@section('title', 'Detalhes do animal')

@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ route('app.animais') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="card rounded-lg mx-5  bg-zinc-100 drop-shadow-2xl">
            <div class="card-header rounded-t-lg p-2 border-b-2 border-red-900 drop-shadow-2xl">
                <p class="text-xl font-bold text-center text-red-900">
                    {{ $animal->nome_completo }}
                </p>
            </div>
            <div class="flex justify-around py-2 ">
                <div class="text-sm font-medium">
                    <p>Pai:</p>
                    <p>Mãe:</p>
                    <p>Espécie:</p>
                    <p>Raça:</p>
                    <p>Numero do chip:</p>
                    <p>Registro livro:</p>
                    <p>Registro numero:</p>
                    <p>Sexo:</p>
                    <p>Pelagem:</p>
                    <p>Fazenda:</p>
                    <p>Tipo de reprodução:</p>
                    <p>Status:</p>
                </div>
                <div class="text-sm font-medium text-red-900">
                    @empty($animal->getPai)
                        <p>Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->getPai->nome_completo }}</p>
                    @endempty
                    @empty($animal->getMae)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->getMae->nome_completo }}</p>
                    @endempty
                    @empty($animal->especie)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->especie }}</p>
                    @endempty
                    @empty($animal->raca)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->raca }}</p>
                    @endempty
                    @empty($animal->numero_chip)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->numero_chip }}</p>
                    @endempty
                    @empty($animal->getLivro)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->getLivro->nome }}</p>
                    @endempty
                    @empty($animal->registro_numero)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->registro_numero }}</p>
                    @endempty
                    @empty($animal->sexo)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->sexo }}</p>
                    @endempty
                    @empty($animal->getPelagem)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->getPelagem->nome }}</p>
                    @endempty
                    @empty($animal->getFazenda)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->getFazenda->nome }}</p>
                    @endempty
                    @empty($animal->doador)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->doador }}</p>
                    @endempty
                    @empty($animal->status)
                        <p class="capitalize">Não informado</p>
                    @else
                        <p class="capitalize"> {{ $animal->status }}</p>
                    @endempty
                </div>
            </div>
        </div>
        <div class="flex justify-between mx-5">
            <a href="#">
                <button class="btn btn-primary">LAUDOS</button>
            </a>
            <a href="#">
                <button class="btn btn-primary">EXPORTAR PDF</button>
            </a>
        </div>
    </div>
@endsection
