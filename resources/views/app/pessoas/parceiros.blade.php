@extends('layouts.app.main')

@section('title', 'Parceiros')

@section('content')
<div class="my-8">
    <div class="m-4 text-red-900">
            <a href="{{ route('app.pessoas') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
    <div class="mx-auto py-6">
      <a href="{{ route('app.index') }}">
        <img src="{{ asset('app/img/home.png') }}" class="mx-auto w-32" alt="" />
      </a>
      <p class="text-center py-3 text-lg font-medium">Parceiros</p>
    </div>
    <div class="mx-auto text-center w-72 h-80">
        <img class="mx-auto w-full h-full" src="{{ asset('img/mapa.png') }}" alt="">
    </div>
    <div class="text-center mb-12">
        <p>Parceiros na região:</p>
        <div class="square w-40 h-40 mb-5 mx-auto mt-3 overflow-y-auto">
            <div class="px-5">
                <a href="#">Fulano (Cidade)</a>
                <a href="#">Fulano (Cidade)</a>
                <a href="#">Fulano (Cidade)</a>
                <a href="#">Fulano (Cidade)</a>
                <a href="#">Fulano (Cidade)</a>
                <a href="#">Fulano (Cidade)</a>
            </div>
        </div>
        <div class="text-center text-red-600 text-sm">
            <p>contato@parceiro.com.br</p>
            <p>(41)00000-0000</p>
        </div>
    </div>
  </div>
@endsection
