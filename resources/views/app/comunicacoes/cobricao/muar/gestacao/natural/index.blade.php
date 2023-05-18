@extends('layouts.app.main')

@section('title', 'Cobrição, Gestação natural - Muar')
@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ route('app.gestacaoMuar') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="text-center mb-3">
            <h1 class="text-2xl font-medium">Cobrição</h1>
        </div>
        <div class="text-center  mb-5">
            <h1 class="text-2xl ">Gestação natural de Muar</h1>
        </div>
        <form action="{{ route('app.storeCobricao') }}" method="post">
            @csrf
            <input type="hidden" name="especie" value="1">
            <input type="hidden" name="semen" value="fresco">
            <input type="hidden" name="tipo_monta" value="natural">
            <div class="w-72 mx-auto ">
                <div class="flex mb-5">
                    <select class="js-example-reprodutor-single" name="reprodutor">

                    </select>
                </div>
                <div class="flex mb-5">
                    <select class="js-example-matriz-single" name="matriz">

                    </select>
                </div>
                <div class="flex   mb-5">
                    <label class="w-full">Data da cobrição
                        <br>
                        <input type="date" name="data_cobricao"
                            class="w-full py-2 pl-4 pr-4 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow">
                    </label>
                </div>

                <div class="flex mb-5">
                    <button type="submit"
                        class="border w-full border-red-900 bg-red-900 focus:outline-none focus:ring focus:ring-red-200 text-white p-2 rounded  w-24">Salvar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.js-example-reprodutor-single').select2({
                width: "100%",
                placeholder: "Reprodutor",
                ajax: {
                    url: "{{ route('app.getAnimal') }}",
                    dataType: "json",
                    delay: 250,
                    data: function(params) {

                        return {
                            q: params.term,
                            page: params.page
                        };
                    },
                    processResults: function(data) {

                        var mappedData = data.map(function(item) {
                            return {
                                id: item.id, // ID da opção
                                text: item.nome_completo // Valor a ser exibido no Select2
                            };
                        });

                        return {
                            results: mappedData
                        };
                    },
                    cache: true
                },
                minimumInputLength: 2,
            });
        });
        $(document).ready(function() {
            $('.js-example-matriz-single').select2({
                width: "100%",
                placeholder: "Matriz",
                ajax: {
                    url: "{{ route('app.getAnimal') }}",
                    dataType: "json",
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            page: params.page
                        };
                    },
                    processResults: function(data) {
                        var mappedData = data.map(function(item) {
                            return {
                                id: item.id, // ID da opção
                                text: item.nome_completo // Valor a ser exibido no Select2
                            };
                        });

                        return {
                            results: mappedData
                        };
                    },
                    cache: true
                },
                minimumInputLength: 2,
            });
        });
    </script>

@endsection
