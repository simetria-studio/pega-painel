@extends('layouts.app.main')

@section('titulo', 'Comunicação de alteração de afixo')
@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ route('app.comunicacoes') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="w-72 mx-auto">
            <div class="text-center my-4">
                <h1 class="text-center font-semibold text-xl">Comunicação de alteração de afixo</h1>
            </div>
            <div class="text-center mb-8">
                <label class="mb-3 font-semibold "> Afixo atual
                    <input
                        class="w-full bg-zinc-200 border border-zinc-200 shadow rounded-xl p-2 focus:outline-none focus:ring-2 focus:ring-red-200 focus:border-red-900"
                        type="text" placeholder="Afixo atual">
                </label>
            </div>
            <div class="text-center mb-8">
                <label class="mb-3 font-semibold "> Novo afixo
                    <br>
                    <span class="text-red-900">* verificar disponibilidade </span>
                    <br>
                    <input
                        class="w-full bg-zinc-200 border border-zinc-200 shadow rounded-xl p-2 focus:outline-none focus:ring-2 focus:ring-red-200 focus:border-red-900"
                        type="text" placeholder="Novo afixo">
                </label>
            </div>

            <button type="submit" id="enviar"
                class="w-full border border-red-900 rounded p-2 bg-red-900 font-bolder text-white hover:bg-red-800 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                Comunicar
            </button>

            <div class="text-center">
                <p class="mt-4 text-red-900 font-medium">Por esse serviço será cobrado o valor de R$50,00</p>
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
