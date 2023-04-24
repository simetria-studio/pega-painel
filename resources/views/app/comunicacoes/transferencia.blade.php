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
        <div class="text-center my-8">
            <h1 class="text-center font-semibold text-xl">Comunicação de transferência de propriedade</h1>
        </div>
        <form>
            <div class="flex flex-wrap justify-center  mx-8">
                <div class="mb-3">
                    <label>Selecionar meu animal:
                        <br>
                        <select
                            class="border-2 w-52 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                            <option>Animal 1</option>
                            <option>Animal 2</option>
                            <option>Animal 3</option>
                        </select>
                    </label>
                </div>

                <div class="mb-3">
                    <label>Nome do novo proprietário:
                        <br>
                        <input type="text"
                            class="border-2 w-52 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                    </label>
                </div>

                <div class="mb-3">
                    <label>CPF/CNPJ do novo proprietário:
                        <br>
                        <input type="text"
                            class="border-2 w-52 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                    </label>
                </div>

                <div class="mb-3">
                    <label>Endereço do novo proprietário:
                        <br>
                        <input type="text"
                            class="border-2 w-52 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                    </label>
                </div>

                <div class="mb-3">
                    <label>Observações:
                        <br>
                        <textarea cols="16" rows="20"
                            class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                                    </textarea>
                    </label>
                </div>
                <div class="mb-3 text-center ">
                    <label>Termos de contrato:
                        <br>
                        <input type="checkbox" id="termos" class="custom-checkbox mr-2" />
                        <label for="termos" class="text-sm">
                            Declaro que li e aceito os termos de contrato
                        </label>
                    </label>
                </div>
                <div class="mb-3">
                    <button type="button" id="enviar"
                        class="bg-red-900 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
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
