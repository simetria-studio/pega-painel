@extends('layouts.app.main')
@section('title', 'Comunicação de transferência de propriedade')
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
        <div class="text-center m-8">
            <h1 class="text-center font-semibold text-xl">Comunicação de transferência de propriedade</h1>
        </div>
        <form>
            <div class="w-72 mx-auto ">
                <div class="mb-3">
                    <label class="pl-1 text-sm font-medium">Selecionar meu animal:
                        <br>
                        <select class="border-2 w-full border-gray-300 bg-white p-2 rounded-lg focus:outline-none">
                            <option>Animal 1</option>
                            <option>Animal 2</option>
                            <option>Animal 3</option>
                        </select>
                    </label>
                </div>

                <div class="mb-3">
                    <label class="pl-1 text-sm font-medium">Nome do novo comprador:
                        <br>
                        <input type="text"
                            class="border-2 w-full border-gray-300 bg-white p-2 rounded-lg focus:outline-none">
                    </label>
                </div>

                <div class="mb-3">
                    <label class="pl-1 text-sm font-medium">CPF/CNPJ do novo comprador:
                        <br>
                        <input type="text"
                            class="border-2 w-full border-gray-300 bg-white p-2 rounded-lg focus:outline-none">
                    </label>
                </div>

                <div class="mb-3">
                    <label class="pl-1 text-sm font-medium">Endereço do novo comprador:
                        <br>
                        <input type="text"
                            class="border-2 w-full border-gray-300 bg-white p-2 rounded-lg focus:outline-none">
                    </label>
                </div>

                <div class="mb-3">
                    <label class="pl-1 text-sm font-medium">Observações:
                        <br>
                        <textarea class="border-2 w-full border-gray-300 bg-white p-2 rounded-lg focus:outline-none">
                        </textarea>
                    </label>
                </div>
                <div class="mb-3 text-center ">
                    <label class="text-lg font-medium">Termos de contrato:</label>
                    <br>
                    <label class="text-sm">
                        <input type="checkbox" class="custom-checkbox mr-2" />
                        Declaro que li e aceito os <a href="#" class="underline">termos de contrato</a>
                    </label>

                </div>
                <div class="mb-3">
                    <button type="button" id="enviar"
                        class="w-full bg-red-900 hover:bg-red-700 text-white font-bold p-2.5 rounded">
                        Enviar
                    </button>
                </div>
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
