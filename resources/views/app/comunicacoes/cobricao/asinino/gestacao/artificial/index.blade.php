@extends('layouts.app.main')

@section('title', 'Cobrição de gestação artificial')
@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ route('app.gestacaoAsinino') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>


        <div class="mb-5">
            <h2 class="text-center font-semibold text-2xl">Cobrição de Asinino</h2>
        </div>

        {{-- Formulario  --}}

        <form id="multistep-form">
            {{-- Primeiro passo  --}}
            <div class="step step-1 w-72 mx-auto">
                <div class="text-center mb-5">
                    <h1 class="text-xl font-medium">Inseminação Artificial</h1>
                </div>
                <div class="text-center mb-4">
                    <h1 class="text-sm font-medium">Selecionar o Material</h1>
                </div>
                <div class="flex justify-center">
                    <div>
                        <div class="radio-container mb-3">
                            <label>
                                <input type="radio" name="material" />
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span>Sêmen Fresco</span>
                            </label>
                        </div>
                        <div class="radio-container mb-3">
                            <label>
                                <input type="radio" name="material" />
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span>Sêmen Resfriado</span>
                            </label>
                        </div>
                        <div class="radio-container mb-8">
                            <label>
                                <input type="radio" name="material" />
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span>Sêmen Congelado</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center space-x-3">
                    <button type="button"
                        class="next w-full border border-red-900 rounded-lg p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">Próximo</button>
                </div>
            </div>
            {{-- Segundo passo --}}
            <div class="step step-2 w-72 mx-auto">
                <div class="text-center mb-5">
                    <h1 class="text-xl font-medium">Selecionar médico veterinario</h1>
                </div>
                <div class="text-center mb-4">
                    <h1 class="text-lg font-medium">Buscar por:</h1>
                </div>

                <div class="flex justify-center">
                    <div class="radio-container mx-2 mb-2">
                        <label>
                            <input type="radio" name="buscar-por" />
                            <div class="custom-radio">
                                <span></span>
                            </div>
                            <span>Nome:</span>
                        </label>
                    </div>
                    <div class="radio-container mx-2 mb-2">
                        <label>
                            <input type="radio" name="buscar-por" />
                            <div class="custom-radio">
                                <span></span>
                            </div>
                            <span>Região</span>
                        </label>
                    </div>
                    <div class="radio-container mx-2 mb-8">
                        <label>
                            <input type="radio" name="buscar-por" />
                            <div class="custom-radio">
                                <span></span>
                            </div>
                            <span>CRMV</span>
                        </label>
                    </div>
                </div>
                <div class="busca flex items-center mb-4 space-x-2">
                    <div class="relative w-3/4">
                        <input type="text" placeholder="Pesquisar..."
                            class="w-full py-2 p-10 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow" />
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21 21l-4.35-4.35M16 10.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="w-full rounded-lg py-2 px-4  bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                            Buscar
                        </button>
                    </div>
                </div>
                <div class="bg-zinc-200 h-52 w-full rounded-lg p-4 overflow-y-auto mb-10">
                    <div class="border-b-2 border-red-900 py-1 ">
                        <div class="radio-container">
                            <label class="flex justify-between">
                                <input type="radio" name="veterinario" checked>
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
                                <input type="radio" name="veterinario">
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
                <div class="flex justify-center items-center space-x-3">
                    <button type="button"
                        class="prev w-full border border-red-900 rounded-lg p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                        Anterior
                    </button>
                    <button type="button"
                        class="next w-full border border-red-900 rounded-lg p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                        Próximo
                    </button>
                </div>
            </div>
            {{-- Ultimo passo --}}
            <div class="step step-3 w-72 mx-auto">
                <div class="my-8">
                    <div class="flex mb-5">
                        <input type="text"
                            class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow"
                            placeholder="Reprodutor">
                    </div>
                    <div class="flex mb-5">
                        <input type="text"
                            class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow"
                            placeholder="Matriz">
                    </div>
                    <div class="flex mb-5">
                        <label class="w-full" for="date-cobricao">Data da cobrição
                            <br>
                            <input type="date" id="date-cobricao"
                                class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
                        </label>
                    </div>
                </div>
                <div class="flex justify-center items-center space-x-3">

                    <button type="button"
                        class="prev w-full border border-red-900 rounded-lg p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                        Anterior
                    </button>
                    <button type="submit"
                        class="w-full border border-red-900 rounded-lg p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                        Enviar
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.next').click(function() {
                var currentStep = $(this).closest('.step');
                var nextStep = $(this).closest('.step').next('.step');
                if (nextStep.length > 0) {
                    currentStep.hide();
                    nextStep.show();
                }
            });

            $('.prev').click(function() {
                var currentStep = $(this).closest('.step');
                var prevStep = $(this).closest('.step').prev('.step');
                if (prevStep.length > 0) {
                    currentStep.hide();
                    prevStep.show();
                }
            });

            $('#multistep-form').submit(function() {
                ////////////////////////
                return true;
            });
        });
    </script>
@endsection
