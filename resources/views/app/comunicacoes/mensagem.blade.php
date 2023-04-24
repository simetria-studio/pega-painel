@extends('layouts.app.main')

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
        <div class="grid place-items-center mx-8">

            <div class="mb-5">
                <h1 class="text-xl font-semibold">Escreva seu Comunicado</h1>
            </div>
            <form action="">
                <div class="mb-5">
                    <label for="" class="text-lg"> Assunto:
                        <br>
                        <input type="text"
                            class="bg-zinc-100 p-1 border border-zinc-100 drop-shadow rounded-lg focus:ring-2 focus:ring-red-200 focus:border-red-600 focus:outline-none hover:border-red-600">
                    </label>
                </div>
                <div class="mb-5">
                    <label for="" class="text-lg"> Mensagem:
                        <br>
                        <textarea name="" id="" cols="30" rows="10"
                            class="bg-zinc-100 p-1 border border-zinc-100 drop-shadow rounded-lg focus:ring-2 focus:ring-red-200 focus:border-red-600 focus:outline-none hover:border-red-600"></textarea>
                    </label>
                </div>

                <div>
                    <button type="button" id="enviar"
                        class="bg-red-800 w-32 text-white p-2 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-200 focus:ring-opacity-50">Enviar</button>
                </div>


            </form>
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
