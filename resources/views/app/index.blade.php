@extends('layouts.app.main')

@section('title', 'Home')

@section('content')
    <div class="my-10">
        <a href="/">
            <img src="{{ asset('img/home.png') }}" class="mx-auto w-36 h-26 text-red-900" alt="" />
        </a>
        <div class="flex justify-center my-8 text-lg font-medium">
            <p>
                Bem vindo!
                <span class="pl-2 text-red-900"> Usuario </span>
            </p>
        </div>
        <div class="mx-10 grid  grid-cols-2 grid-rows-3  gap-8 text-center text-white text-xs">
            <a href="{{ url('/pessoas') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/pessoas.png') }}" alt="" />
                Pessoas
            </a>
            <a href="{{ url('/animais') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/burro.png') }}" alt="" />
                Animais
            </a>
            <a href="{{ url('/financeiro') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/financeiro.png') }}" alt="" />
                Financeiro
            </a>
            <a href="{{ route('resenha.step1') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/resenha.png') }}" alt="" />
                Resenha
            </a>
            <a href="{{ url('/configuracoes') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/config.png') }}" alt="" />
                Configurações
            </a>
            <a href="{{ url('/comunicacoes') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/comunicacao.png') }}" alt="" />
                Comunicações
            </a>
        </div>
    </div>
@endsection
