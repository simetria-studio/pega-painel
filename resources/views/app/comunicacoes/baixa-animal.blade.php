@extends('layouts.app.main')

@section('title', 'Notificar baixa/morte de animal')
@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ route('app.comunicacoes') }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="w-72 mx-auto">
            <div class="text-center my-8 ">
                <h1 class="text-xl "> Notificar baixa/morte <br /> de animal </h1>
            </div>
            <div class="text-center mb-8 ">
                Eu, <span class="font-semibold text-red-900"> {{ Auth::user()->name }} </span>
                , venho por meio desse comunicado informar a baixa/morte do animal:
            </div>
            <div class="relative flex flex-wrap justify-center mb-4">
                <input
                    class="relative w-full bg-zinc-200 border border-zinc-200 rounded-xl p-2 focus:outline-none focus:ring-2 focus:ring-red-200 focus:border-red-900"
                    type="search" id="buscar-tecnico" placeholder="Buscar em sua lista de animais...  ">
                <label for="buscar-tecnico ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 absolute top-2 right-2 text-zinc-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </label>
            </div>
            <div class="text-center mb-4">
                <p class="mb-3">
                    No dia:
                </p>
                <input type="date"
                    class="bg-zinc-200 border border-zinc-200 rounded-xl py-1 px-4 focus:outline-none focus:ring-2 focus:ring-red-200 focus:border-red-900" />
            </div>
            <div class=" flex justify-center mb-3">
                <label class="text-sm text-center">
                    <input type="checkbox" class="custom-checkbox mr-2" />
                    Declaro que li e aceito os <a href="#" class="underline">termos de contrato</a>
                </label>
            </div>

            <div class="text-center">
                <button type="button" id="enviar"
                    class="w-full text-lg font-bolder border border-red-900 rounded p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">Solicitar</button>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).on('click', '#enviar', function() {
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: 'Enviado com sucesso!',

            })
        });
    </script>
@endsection
