@extends('layouts.app.main')

@section('title', 'Cobrição - Transferencia monta natural de Muar')
@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ route('app.transferenciaMuar') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="text-center mb-4">
            <h1 class="font-semibold text-2xl">Cobrição de Muar</h1>
        </div>
        <div class="text-center mb-4">
            <h1 class="text-xl">Transferência de Embrião</h1>
        </div>
        <div class="w-72 mx-auto">
            <form action="">
                <div class="mb-4">
                    <input type="text" placeholder="Reprodutor"
                        class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="Doadora"
                        class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="Receptora"
                        class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
                </div>
                <div class="mb-4">
                    <label for="data-cobricao">Data da Cobrição</label>
                    <input type="date" name="data-cobricao" id="data-cobricao"
                        class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
                </div>
                <div class="mb-4">
                    <label for="data-transferencia">Data da Transferência</label>
                    <input type="date" name="data-transferencia" id="data-transferencia"
                        class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
                </div>
                <div class="mb-4">
                    <label for="data-inseminacao">Data da Inseminação</label>
                    <input type="date" name="data-inseminacao" id="data-inseminacao"
                        class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
                </div>

                <button type="submit"
                    class="border w-full border-red-900 rounded-lg p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">Protocolar</button>
            </form>
        </div>
    </div>
@endsection
