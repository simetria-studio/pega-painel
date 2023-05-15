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
                Meus animais <br />
                cadatrados
            </p>
        </div>
        <form action="">
            <div class="relative mx-auto w-72 py-4">

                <input
                    class="border-zinc-100 border drop-shadow-2xl p-1 bg-zinc-100 shadow rounded-xl text-center w-full focus:ring-1 focus:ring-red-200 focus:border-red-800 focus:outline-none"
                    type="search" placeholder="Buscar animal" />
                <button type="submit" class="absolute inset-y-0 right-0 focus:text-red-900  flex items-center pr-3  ">
                    <svg aria-hidden="true" class="w-5 h-5 text-zinc-500 hover:text-red-900" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </form>
        @foreach ($animais as $animal)
            <div class="card rounded-lg mx-5 my-4 bg-zinc-100 drop-shadow-2xl">
                <div class="card-header rounded-t-lg flex p-2 justify-around border-b-2 border-red-900 drop-shadow-2xl">
                    <div>
                        <h1 class="text-sm font-semibold">{{ $animal->nome_completo }}</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-normal">{{ $animal->id }}</h1>
                    </div>
                </div>
                <div class="card-main grid grid-cols-2 animais">
                    <div class="text-sm ">
                        <p>Reprodutor:</p>
                        <p>Reprodutora:</p>
                        <p>Nascimento:</p>
                        <p>Gênero:</p>
                        {{-- <p>Tipo de reprodução:</p> --}}
                    </div>

                    <div class="text-sm  animais-info">
                        <p>{{ $animal->getPai->nome_completo }}</p>
                        <p>{{ $animal->getMae->nome_completo }}</p>
                        <p>{{ $animal->data_nascimento }}</p>
                        <p>{{ $animal->sexo }}</p>
                        {{-- <p>Sêmen</p> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
