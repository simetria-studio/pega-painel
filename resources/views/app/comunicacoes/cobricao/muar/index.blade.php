@extends('layouts.app.main')
@section('title', 'Cobrição - Muar')
@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ route('app.cobricao') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="text-center mb-5">
            <h1 class="text-2xl font-semibold">Cobrição Muar</h1>
        </div>
        <div class="mx-10 grid  grid-cols-2 grid-rows-3  gap-8 text-center text-white text-xs">
            <a href="{{ route('app.gestacaoNaturalMuar') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/gestacao.png') }}" alt="">
                Gestação Natural
            </a>
            <a href="{{ route('app.transferenciaMuar') }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/embriao.png') }}" alt="">
                Transferência de Embrião
            </a>
        </div>
    </div>
@endsection
