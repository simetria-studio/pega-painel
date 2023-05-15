@extends('layouts.dashboard')

@section('title', 'Cadastrar novo animal')
@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Cadastrar Animais</h1>
    </div>
    <form action="{{ route('animal.store') }}" method="post">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="multistep-container">
                        <div class="multistep-steps">

                            {{-- step - 1  --}}
                            <div class="multistep-step active" data-step="1">
                                <div class="text-center mb-5">
                                    <h5>Dados do animal</h5>
                                </div>
                                <div class="row ">
                                    <div class="col-6 mb-3">
                                        <label for="identificacao" class="form-label">Cód. indentificação animal</label>
                                        <input type="text" class="form-control" name="registro_numero" id="identificacao"
                                            placeholder="Cód. indentificação animal">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="nome_animal" class="form-label">Nome do animal</label>
                                        <input type="text" class="form-control" name="nome_completo" id="nome_animal"
                                            placeholder="Nome do animal">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="genitor" class="form-label">Genitor</label>
                                        <select class="js-example-basic-single" name="pai">

                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="genitora" class="form-label">Genitora</label>
                                        <select class="js-example-basic-single" name="mae">

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="nascimento_animal" class="form-label">Data de Nascimento</label>
                                        <input type="date" class="form-control" name="data_nascimento"
                                            id="nascimento animal">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="pelagem" class="form-label">Pelagem</label>
                                        <select class="form-select" name="pelagem" aria-label="Default select example">
                                            <option selected>Selecione a pelagem</option>
                                            @foreach ($pelagens as $pelagem)
                                                <option value="{{ $pelagem->id }}">{{ $pelagem->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="pelagem" class="form-label">Espécie</label>
                                        <select class="form-select" name="especie" aria-label="Default select example">
                                            <option selected>Selecione a espécie</option>
                                            <option value="1">ASININO</option>
                                            <option value="2">EQUINO</option>
                                            <option value="3">MUAR</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="pelagem" class="form-label">Raça</label>
                                        <select class="form-select" name="raca" aria-label="Default select example">
                                            <option selected>Selecione a raça</option>
                                            <option value="1">PÊGA</option>
                                            <option value="2">MANGALARGA MARCHADOR</option>
                                            <option value="3">MANGALARGA</option>
                                            <option value="4">CAMPOLINA</option>
                                            <option value="5">OUTRAS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="multistep-step" data-step="2">
                            <div class="text-center mb-5">
                                <h5>Informações do animal </h5>
                            </div>
                            <div class="row ">
                                <div class="col-6 mb-3">
                                    <label for="identificacao" class="form-label">Sexo</label>
                                    <select class="form-select" name="sexo" aria-label="Default select example">
                                        <option selected>Selecione o sexo</option>
                                        <option value="macho">MACHO</option>
                                        <option value="femea">FEMÊA</option>
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="identificacao" class="form-label">Tipo de reprodução</label>
                                    <select class="form-select" name="doador" aria-label="Default select example">
                                        <option selected>Selecione o tipo</option>
                                        <option value="nao_doador">NÃO DOADOR</option>
                                        <option value="doador_a">DOADOR(A)</option>
                                        <option value="recptora">RECEPTORA</option>
                                        <option value="recpetora_doadora">RECEPTORA E DOADORA</option>
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="identificacao" class="form-label">Tipo de DNA</label>
                                    <select class="form-select" name="dna_tipo" aria-label="Default select example">
                                        <option selected>Selecione o tipo</option>
                                        <option value="sem_dna">SEM DNA</option>
                                        <option value="ap">AP</option>
                                        <option value="vp">VP</option>
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="identificacao" class="form-label">Registro tipo</label>
                                    <select class="form-select" name="registro_tipo" aria-label="Default select example">
                                        <option selected>Selecione o tipo</option>
                                        <option value="interno">INTERNO</option>
                                        <option value="externo">EXTERNO</option>
                                        <option value="sem_registro">SEM REGISTRO</option>
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="identificacao" class="form-label">Registro livro</label>
                                    <select class="form-select" name="registro_livro"
                                        aria-label="Default select example">
                                        <option selected>Selecione o livro</option>
                                        @foreach ($livros as $livro)
                                            <option value="{{ $livro->id }}">{{ $livro->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="identificacao" class="form-label">Numero do chip</label>
                                    <input type="text" class="form-control" name="numero_chip">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                                    <textarea class="form-control" name="observacoes" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>




                        </div>
                        {{-- step - 2  --}}
                        <div class="multistep-step" data-step="3">
                            <div class="text-center mb-5">
                                <h5>Selecione o proprietário</h5>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">Proprietário</label>
                                    <select class="js-owner-basic-single" name="proprietario">


                                    </select>
                                </div>

                            </div>
                        </div>

                        {{-- step - 3  --}}
                        <div class="multistep-step" data-step="4">
                            <div class="text-center mb-5">
                                <h5>Fazenda/Haras </h5>
                            </div>
                            <input type="hidden" name="" id="hidden-input">
                            <div class="row">
                                <select class="form-select" aria-label="Default select example" name="fazenda_nascimento"
                                    id="fazenda">

                                </select>
                            </div>
                        </div>
                        <div class="multistep-navigation mb-5">
                            <button type="button" class="multistep-navigation-button previous">Anterior</button>
                            <button type="button" class="multistep-navigation-button next">Próximo</button>
                            <button class="multistep-navigation-button submit" type="submit"
                                style="display: none;">Enviar</button>
                        </div>
                        <div class="multistep-progress">
                            <div class="multistep-status active"></div>
                            <div class="multistep-status"></div>
                            <div class="multistep-status"></div>
                            <div class="multistep-status"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('js')
    <script>
        $(function() {
            var currentStep = 1;
            var totalSteps = $('.multistep-step').length;

            updateProgress();

            $('.multistep-navigation-button.next').click(function() {
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateStep();
                } else if (currentStep === totalSteps) {
                    $('.multistep-navigation-button.next').hide();
                    $('.multistep-navigation-button.submit').show();
                }
            });

            $('.multistep-navigation-button.previous').click(function() {
                if (currentStep > 1) {
                    currentStep--;
                    updateStep();
                    $('.multistep-navigation-button.next').show();
                    $('.multistep-navigation-button.submit').hide();
                }
            });

            function updateStep() {
                $('.multistep-step').removeClass('active');
                $('.multistep-step[data-step="' + currentStep + '"]').addClass('active');
                updateProgress();

                if (currentStep === totalSteps) {
                    $('.multistep-navigation-button.next').hide();
                    $('.multistep-navigation-button.submit').show();
                } else {
                    $('.multistep-navigation-button.next').show();
                    $('.multistep-navigation-button.submit').hide();
                }
            }

            function updateProgress() {
                var progress = (currentStep - 1) / (totalSteps - 1) * 100;
                $('.multistep-progress-bar').width(progress + '%');

                $('.multistep-status').remove();
                for (var i = 1; i <= totalSteps; i++) {
                    var statusClass = i == currentStep ? 'active' : '';
                    var status = '<div class="multistep-status ' + statusClass + '"></div>';
                    $('.multistep-progress').append(status);
                }
            }
            $(".js-example-basic-single").select2({
                width: '100%',
                ajax: {
                    url: "{{ route('get.animais') }}",
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
            $(".js-owner-basic-single").select2({
                width: '100%',
                ajax: {
                    url: "{{ route('get.owners') }}",
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
                                text: item.nome // Valor a ser exibido no Select2
                            };
                        });

                        return {
                            results: mappedData
                        };
                    },
                    cache: true
                },
                minimumInputLength: 2,
            }).on('select2:select', function(e) {
                var selectedOption = e.params.data;
                var selectedId = selectedOption.id;

                $.ajax({
                    url: "{{ route('get.fazenda') }}",
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        id: selectedId
                    },
                    success: function(data) {
                        console.log(data);
                        var mappedData = data.map(function(item) {
                            return {
                                id: item.id, // ID da opção
                                text: item.nome // Valor a ser exibido no Select2
                            };
                        });

                        $('#fazenda').empty();
                        $('#fazenda').append('<option value="">Selecione a fazenda</option>');
                        $.each(mappedData, function(key, value) {
                            $('#fazenda').append('<option value="' + value.id + '">' +
                                value.text +
                                '</option>');
                        });
                    }
                });
            });;


            $('#hidden-input').on('change', function() {
                var owner = $(this).val();

            });


        });
    </script>
@endsection
