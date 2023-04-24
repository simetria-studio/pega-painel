@extends('layouts.app.main')

@section('title', 'Animais')

@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ url()->previous() }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>

        <div class="mx-10 grid grid-cols-2 gap-8 grid-rows-2 text-center text-white text-sm">
            {{-- <a href="/animais/asininos" class="rounded-2xl border-red-900 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/burro.png') }}" alt="" />
                Asinino
            </a>
            <a href="/animais/equinos" class="rounded-2xl border-red-900 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/cavalo.png') }}" alt="" />
                Equino
            </a> --}}

            <a href="{{ route('app.meusAnimais') }}" class="rounded-2xl border-red-900 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('app/img/lupa.png') }}" alt="" />
                Meus Cadastrados
            </a>
        </div>
    </div>
@endsection
