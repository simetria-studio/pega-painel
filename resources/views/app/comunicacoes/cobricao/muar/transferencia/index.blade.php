@extends('layouts.app.main')
@section('title', 'Cobrição - Transferencia Muar')

@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ route('app.cobricaoMuar') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="text-center mb-5">
            <h2 class="text-2xl font-semibold">Cobrição de Muar</h2>
        </div>
        <div class="text-center mb-5">
            <h2 class="text-xl">Tipo de transferência</h2>
        </div>
        <div class="mx-10 grid  grid-cols-2 grid-rows-3  gap-8 text-center text-white text-xs">
            <a href="{{ route("app.transferenciaNaturalMuar") }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/monta-natural.png') }}">
                Monta Natural
            </a>
            <a href="{{ route("app.transferenciaArtificialMuar") }}" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/gestacao.png') }}">
                Inseminação artificial
            </a>
        </div>
    </div>
@endsection
