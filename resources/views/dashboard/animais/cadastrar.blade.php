@extends('layouts.dashboard')

@section('title', 'Cadastrar novo animal')
@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Cadastrar Animais</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="multistep-container">
                    <div class="multistep-steps">
                        <form>
                            {{-- step - 1  --}}
                            <div class="multistep-step active" data-step="1">
                                <div class="text-center mb-5">
                                    <h5>Dados do animal</h5>
                                </div>
                                <div class="row ">
                                    <div class="col-6 mb-3">
                                        <label for="identificacao" class="form-label">Cód. indentificação animal</label>
                                        <input type="text" class="form-control" name="" id="identificacao"
                                            placeholder="Cód. indentificação animal">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="nome_animal" class="form-label">Nome do animal</label>
                                        <input type="text" class="form-control" name="" id="nome_animal"
                                            placeholder="Nome do animal">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="genitor" class="form-label">Genitor</label>
                                        <input type="text" class="form-control" name="" id="genitor"
                                            placeholder="Genitor">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="genitora" class="form-label">Genitora</label>
                                        <input type="text" class="form-control" name="" id="genitora"
                                            placeholder="Genitora">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="nascimento_animal" class="form-label">Data de Nascimento</label>
                                        <input type="date" class="form-control" name="" id="nascimento animal">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="tipo-reproducao" class="form-label">Tipo de reprodução</label>
                                        <input type="text" class="form-control" name="" id="tipo-reproducao"
                                            placeholder="Tipo de reprodução">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="pelagem" class="form-label">Pelagem</label>
                                        <input type="texto" class="form-control" name="" id="pelagem"
                                            placeholder="pelagem">
                                    </div>
                                </div>
                            </div>

                            {{-- step - 2  --}}
                            <div class="multistep-step" data-step="2">
                                <div class="text-center mb-5">
                                    <h5>Dados do proprietário(os)</h5>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="proprietario" class="form-label">Nome do proprietário</label>
                                        <input type="text" class="form-control" name="" id="proprietario"
                                            placeholder="proprietário">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="cpf-cnpj" class="form-label">CPF/CNPJ</label>
                                        <input type="text" class="form-control" name="" id="cpf-cnpj"
                                            placeholder="CPF/CNPJ">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="registro" class="form-label">Registro associado</label>
                                        <input type="text" class="form-control" name="" id="registro"
                                            placeholder="Registro associado">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" name="" id="email"
                                            placeholder="E-mail">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="whatsapp" class="form-label">Whatsapp</label>
                                        <input type="text" class="form-control" name="" id="whatsapp"
                                            placeholder="Whatsapp">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" name="" id="telefone"
                                            placeholder="Telefone">
                                    </div>
                                    <div class="col-12 my-5 d-flex justify-content-center">
                                        <button type="button" class="btn btn-light btn-block shadow">Adicionar +</button>
                                    </div>
                                </div>
                            </div>

                            {{-- step - 3  --}}
                            <div class="multistep-step" data-step="3">
                                <div class="text-center mb-5">
                                    <h5>Endereço </h5>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="cep" class="form-label">CEP</label>
                                        <input type="text" name="" id="cep" class="form-control"
                                            placeholder="CEP">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <input type="text" name="" id="estado" class="form-control"
                                            placeholder="Endereço">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="cidade" class="form-label">Cidade</label>
                                        <input type="text" name="" id="cidade" class="form-control"
                                            placeholder="Cidade">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="haras-fazenda" class="form-label">Haras / Fazenda</label>
                                        <input type="text" name="" id="haras-fazenda" class="form-control"
                                            placeholder="Haras / Fazenda">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="endereco" class="form-label">Endereço</label>
                                        <input type="text" name="" id="endereco" class="form-control"
                                            placeholder="Endereço">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="numero" class="form-label">Número</label>
                                        <input type="text" name="" id="numero" class="form-control"
                                            placeholder="Número">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="multistep-navigation mb-5">
                        <button class="multistep-navigation-button previous">Anterior</button>
                        <button class="multistep-navigation-button next">Próximo</button>
                        <button class="multistep-navigation-button submit" type="submit"
                            style="display: none;">Enviar</button>
                    </div>
                    <div class="multistep-progress">
                        <div class="multistep-status active"></div>
                        <div class="multistep-status"></div>
                        <div class="multistep-status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

            function validateStep(step) {
                // Implement validation logic for each step here
                // Return true if validation passes, false if it fails
                return true;
            }
        });
    </script>
@endsection
