@extends('layouts.app.main')

@section('title')

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
        <div class="text-center  font-semibold">
            <p class="drop-shadow">
                <span class="text-2xl">{{ $animal->nome_completo }}</span>
            </p>
        </div>
        <div class="m-4">
            <p>Pai: {{ $animal->getPai->nome_completo ?? '' }}</p>
            <p>Mãe: {{ $animal->getMae->nome_completo ?? '' }}</p>
            <p>Espécie: {{ $animal->especie }}</p>
            <p>Raça: {{ $animal->raca }}</p>
            <p>Numero do chip: {{ $animal->numero_chip }}</p>
            <p>Registro livro: {{ $animal->getLivro->nome ?? '' }}</p>
            <p>Registro numero: {{ $animal->registro_numero }}</p>
            <p>Sexo: {{ $animal->sexo }}</p>
            <p>Pelagem: {{ $animal->getPelagem->nome ?? '' }}</p>
            <p>Fazenda: {{ $animal->getFazenda->nome ?? '' }}</p>
            <p>Tipo de reprodução: {{ $animal->doador }}</p>
            <p>Status: {{ $animal->status }}</p>
        </div>
        <div class="m-4">
            <a href="#">
                <button class="btn btn-primary">LAUDOS</button>
            </a>
        </div>
    </div>
@endsection
