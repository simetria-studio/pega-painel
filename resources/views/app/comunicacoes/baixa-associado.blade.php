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

        <div class="w-72 mx-auto">
            <div class="text-center mb-5">
                <h1 class="text-2xl font-medium">Baixa de associado</h1>
            </div>
            <form>
                <div class="flex justify-center">
                    <div>
                        <p class="mb-5 text-xl font-medium text-center">Motivo:</p>
                        <div class="radio-container mb-3 ">
                            <label>
                                <input type="radio" id="falecimento" name="baixa" />
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span class="font-semibold">Falecimento</span>
                            </label>
                        </div>
                        <div class="radio-container mb-3 ">
                            <label>
                                <input type="radio" id="sem-animais" name="baixa" />
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span class="font-semibold">Não possui mais animais</span>
                            </label>
                        </div>
                        <div class="radio-container mb-3 ">
                            <label>
                                <input type="radio" id="jubilado" name="baixa" />
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span class="font-semibold">Jubilado</span>
                            </label>
                        </div>
                        <div class="radio-container mb-3 ">
                            <label>
                                <input type="radio" id="demissao" name="baixa" />
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span class="font-semibold">Pedido de demissão</span>
                            </label>
                        </div>
                        <div class="radio-container mb-3 ">
                            <label>
                                <input type="radio" id="outros" name="baixa" />
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span class="font-semibold">Outros</span>
                            </label>
                            <p class="text-center mt-5 text-lg mb-3">Ou</p>
                            <div class="mb-4">
                                <input type="text" class="border border-gray-300 rounded p-2 w-64 focus:outline-none"
                                    placeholder="Digite o motivo">
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <button type="submit" id="enviar"
                                class="w-full text-lg font-bolder bg-red-900 hover:bg-red-800 active:bg-red-700 focus:outline-none focus:ring focus:ring-red-800 text-white p-2 rounded">Protocolar</button>
                        </div>
                    </div>
                </div>
            </form>
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
