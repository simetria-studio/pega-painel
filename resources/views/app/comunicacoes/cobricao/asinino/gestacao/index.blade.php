@extends('layouts.app')
@section('title', 'Gestação')
@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ url('comunicacoes/cobricao/asinino') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="text-center mb-5">
            <h1 class="text-2xl font-medium">Cobrição de Asinino</h1>
        </div>
        <div class="mb-5">
            <p class="text-center font-medium mb-3">Tipos de gestação</p>
        </div>
        <div class="mx-10 grid  grid-cols-2 grid-rows-3  gap-8 text-center text-white text-xs">
            <a href="{{ url('comunicacoes/cobricao/asinino/gestacao/natural') }}"
                class="rounded-2xl border-red-400 bg-red-900 p-4 w-full">
                <img class="mx-auto  my-2 w-16 h-16" src="{{ asset('img/monta-natural.png') }}">
                Monta Natural
            </a>

            <a href="{{ url('/comunicacoes/cobricao/asinino/gestacao/artificial') }}"
                class="rounded-2xl border-red-400 bg-red-900 p-4 w-full">
                <img class="mx-auto  my-2 w-16 h-16" src="{{ asset('img/gestacao.png') }}">
                Inseminaçao Artificial
            </a>
        </div>
    </div>
@endsection
