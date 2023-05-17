@extends('layouts.app.main')

@section('title', 'Solicitações')

@section('content')
    <div class="max-w-sm mx-auto mt-10">
        <div class="bg-white rounded shadow-lg">
            <div class="px-6 py-4">
                <h2 class="text-xl font-bold text-gray-800">Minhas Comunicações de Cobrição</h2>
            </div>
            <ul class="divide-y">
                <li class="px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-800">Solicitação 1</p>
                                <p class="mt-1 text-sm text-gray-600">Descrição da solicitação 1.</p>
                            </div>
                        </div>
                        <a href="#"
                            class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Saiba
                            Mais</a>
                    </div>
                </li>
                <li class="px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-800">Solicitação 2</p>
                                <p class="mt-1 text-sm text-gray-600">Descrição da solicitação 2.</p>
                            </div>
                        </div>
                        <a href="#"
                            class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Saiba
                            Mais</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
@endsection
