@extends('layouts.app.main')

@section('title', 'Home')

@section('content')
    <div class="my-10">
        <a href="{{ route('app.index') }}">
            <img src="{{ asset('app/img/home.png') }}" class="mx-auto w-36 h-26 text-red-900" />
        </a>
        <div class="flex justify-center my-8 text-lg font-medium">
            <p>
                Bem vindo!
                <span class="pl-2 text-red-900"> {{ auth()->user()->name }} </span>
            </p>
        </div>
        <div class="mx-10 grid  grid-cols-2 grid-rows-3  gap-8 text-center text-white text-xs">
            <a href="{{ route('app.pessoas') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/pessoas.png') }}" alt="" />
                Pessoas
            </a>
            <a href="{{ route('app.animais') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/burro.png') }}" alt="" />
                Animais
            </a>
            <a href="{{ route('app.financeiro') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/financeiro.png') }}" alt="" />
                Financeiro
            </a>
            @if (auth()->user()->permission == 5 || auth()->user()->permission == 4)
                <a href="{{ route('chose.owner') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                    <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/resenha.png') }}" alt="" />
                    Resenha
                </a>
            @endif
            <a href="{{ route('app.configuracoes') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/config.png') }}" alt="" />
                Configurações
            </a>
            <a href="{{ route('app.comunicacoes') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/comunicacao.png') }}" alt="" />
                Comunicações
            </a>
        </div>
    </div>
@endsection
