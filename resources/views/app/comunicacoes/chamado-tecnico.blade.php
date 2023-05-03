@extends('layouts.app.main')

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

        <div class="text-center text-lg text-zinc-600 my-8">
            <h1 class="text-xl font-medium mb-4">Selecionar Técnico</h1>
            <h1 class="text-lg font-normal ">Buscar por:</h1>
        </div>

        <div class="mb-4">
            <div class="w-72 mx-auto">
                <div class="flex">
                    <div class="radio-container mx-2 mb-2">
                        <label>
                            <input type="radio" name="busca-tecnico" />
                            <div class="custom-radio">
                                <span></span>
                            </div>
                            <span>Nome:</span>
                        </label>
                    </div>
                    <div class="radio-container mx-2 mb-2">
                        <label>
                            <input type="radio" name="busca-tecnico" />
                            <div class="custom-radio">
                                <span></span>
                            </div>
                            <span>Região</span>
                        </label>
                    </div>
                    <div class="radio-container mx-2 mb-8">
                        <label>
                            <input type="radio" name="busca-tecnico" />
                            <div class="custom-radio">
                                <span></span>
                            </div>
                            <span>CRMV</span>
                        </label>
                    </div>
                </div>
                <div class="flex justify-around w-full mb-8">
                    <div class="relative flex justify-center">
                        <input
                            class="relative w-max bg-zinc-100 border border-zinc-100 drop-shadow rounded p-2 focus:outline-none focus:ring-2 focus:ring-red-200 focus:border-red-900"
                            type="search" id="buscar-tecnico">
                        <label for="buscar-tecnico ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 absolute top-2 right-2 text-zinc-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </label>
                    </div>
                    <button
                        class=" w-max border border-red-900 rounded p-2 text-bold bg-red-900 text-white hover:bg-red-800 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                        Buscar
                    </button>
                </div>

                <div class="bg-zinc-100 drop-shadow w-full rounded-lg p-4 overflow-y-auto mb-8">
                    <div class="border-b-2 border-red-900 py-1 ">
                        <div class="radio-container">
                            <label class="flex justify-between">
                                <input type="radio" name="tecnico" checked>
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span>
                                    <div>
                                        <h1 class="text-sm">Nome completo</h1>
                                    </div>
                                    <div>
                                        <h1 class="text-sm">CRMV</h1>
                                    </div>
                                    <div>
                                        <h1 class="text-sm">Endereço</h1>
                                    </div>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="border-b-2 border-red-900 py-1 ">
                        <div class="radio-container">
                            <label class="flex justify-between">
                                <input type="radio" name="tecnico">
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span>
                                    <div>
                                        <h1 class="text-sm">Nome completo</h1>
                                    </div>
                                    <div>
                                        <h1 class="text-sm">CRMV</h1>
                                    </div>
                                    <div>
                                        <h1 class="text-sm">Endereço</h1>
                                    </div>
                                </span>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <button type="button" id="enviar"
                        class="w-full border border-red-900 font-bold rounded p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">Solicitar</button>
                </div>
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
