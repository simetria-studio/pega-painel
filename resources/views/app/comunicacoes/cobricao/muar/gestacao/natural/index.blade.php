@extends('layouts.app')

@section('title', 'Cobrição, Gestação natural - Muar')
@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ url('comunicacoes/cobricao/muar/gestacao') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="text-center mb-3">
            <h1 class="text-2xl font-medium">Cobrição</h1>
        </div>
        <div class="text-center  mb-5">
            <h1 class="text-2xl ">Gestação natural de Muar</h1>
        </div>
        <div class="w-72 mx-auto ">
            <div class="flex mb-5">
                <input type="text" placeholder="Reprodutor"
                    class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
            </div>
            <div class="flex mb-5">
                <input type="text" placeholder="Matriz"
                    class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
            </div>
            <div class="flex mb-5">
                <label class="w-full">Data da cobrição
                    <br>
                    <input type="date" name="date-cobricao" id="date-cobricao"
                        class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
                </label>
            </div>

            <div class="flex mb-5">
                <button type="submit"
                    class="w-full border border-red-900 bg-red-900 focus:outline-none focus:ring focus:ring-red-200 text-white p-2 rounded  w-24">Salvar
                </button>
            </div>

        </div>
    </div>
@endsection
