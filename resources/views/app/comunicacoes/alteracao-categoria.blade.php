@extends('layouts.app.main')
@section('content')
    <div class="my-8 ">
        <div class="m-4 text-red-900">
            <a @click="goBack">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="grid place-items-center mx-8">
            <div class="mb-5">
                <h1 class="text-xl font-semibold">Alterar Categoria</h1>
            </div>
            <div>
                <div class="text-center">
                    <p class="mb-5">Eu, <strong class="text-red-700">Nome de usuário,</strong> contribuinte desejo alterar
                        minha
                        categoria
                        para:</p>
                </div>

                <form action="">
                    <div class="radio-container mb-8 flex justify-center">
                        <label for="radio">
                            <input type="radio" id="radio" name="radio" />
                            <div class="custom-radio">
                                <span></span>
                            </div>
                            <span class="font-semibold">Usuário</span>
                        </label>
                    </div>
                    <div class="flex justify-center">
                        <button type="button" id="enviar"
                            class="bg-red-900 hover:bg-red-800 active:bg-red-700 focus:outline-none focus:ring focus:ring-red-800 text-white p-2 rounded mx-2 w-24">Protocolar</button>
                    </div>
                </form>

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
