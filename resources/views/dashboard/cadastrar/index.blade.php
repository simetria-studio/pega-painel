@extends('layouts.dashboard')

@section('title', 'Cadastrar novo Usuário')
@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Cadastrar Usuário</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="multistep-container">
                    <div class="multistep-steps">
                        <form>
                            <div class="multistep-step active" data-step="1">
                                <div class="text-center mb-5">
                                    <h5>Dados pessoais</h5>
                                </div>

                                <div class="mb-5">
                                    <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                        <label class="btn btn-sm">
                                            <input type="radio" name="type-user" class="form-check-input">
                                            Contribuinte
                                        </label>
                                    </div>
                                    <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                        <label class="btn btn-sm">
                                            <input type="radio" name="type-user" class="form-check-input">
                                            Usuário
                                        </label>
                                    </div>
                                    <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                        <label class="btn btn-sm">
                                            <input type="radio" name="type-user" class="form-check-input">
                                            Não Sócio
                                        </label>
                                    </div>

                                    <span class="fs-3 ">|</span>

                                    <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                        <label class="btn btn-sm">
                                            <input type="radio" name="type-user" class="form-check-input">
                                            Pessoa Física
                                        </label>
                                    </div>
                                    <div class="btn-group btn-group-toggle  " data-toggle="buttons">
                                        <label class="btn btn-sm">
                                            <input type="radio" name="type-user" class="form-check-input">
                                            Pessoa Jurídica
                                        </label>
                                    </div>

                                </div>

                                <div class="row ">
                                    <div class="col-5 mb-3">
                                        <label for="nome" class="form-label">Nome Completo</label>
                                        <input id="nome" type="text" class="form-control"
                                            placeholder="Nome completo">
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label for="nascimento" class="form-label">Data Nasc.</label>
                                        <input type="date" class="form-control" name="" id="nascimento">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="cidade_nascimento" class="form-label">Cidade Nasc.</label>
                                        <input type="text" class="form-control" name="" id="cidade_nascimento"
                                            placeholder="Cidade de nascimento">
                                    </div>
                                    <div class="col-5 mb-3">
                                        <label for="cpf" class="form-label">CPF</label>
                                        <input type="text" class="form-control" name="" id="cpf"
                                            placeholder="CPF">
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label for="rg" class="form-label">RG</label>
                                        <input type="text" class="form-control" name="" id="rg"
                                            placeholder="RG">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="escolaridade" class="form-label">Escolaridade</label>
                                        <input type="text" class="form-control" name="" id="Escolaridade"
                                            placeholder="Escolaridade">
                                    </div>
                                    <div class="col-5 mb-3">
                                        <label for="profissao" class="form-label">Profissão</label>
                                        <input type="email" class="form-control" name="" id="profissao"
                                            placeholder="Profissão">
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label for="conjuge" class="form-label">Cônjuge</label>
                                        <input type="text" class="form-control" name="" id="conjuge"
                                            placeholder="Cônjuge">
                                    </div>
                                </div>

                            </div>
                            <div class="multistep-step" data-step="2">
                                <div class="row mt-5 justify-content-center ">
                                    <div class="col-2"></div>
                                    <div class="col-3 mb-3 btn-group btn-group-toggle" data-toggle="button">
                                        <label class="btn btn-sm">
                                            <input type="radio" class="form-check-input" name="afixo">
                                            Prefixo
                                        </label>
                                    </div>
                                    <div class="col-3 mb-3 btn-group btn-group-toggle" data-toggle="button">
                                        <label class="btn btn-sm">
                                            <input type="radio" class="form-check-input" name="afixo">
                                            Sufixo
                                        </label>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-6 mb-3">
                                        <label for="afixo_name" class="form-label">Afixo</label>
                                        <input type="text" class="form-control" name="" id="afixo_nome"
                                            placeholder="Afixo">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="fazenda_nome" class="form-label">Nome da Fazenda</label>
                                        <input type="text" class="form-control" name="" id="fazenda_nome"
                                            placeholder="Nome da Fazenda">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="preposicao" class="form-label">Preposição</label>
                                        <input type="text" class="form-control" name="" id="preposicao"
                                            placeholder="Preposição">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="fazenda_cidade" class="form-label">Cidade da Fazenda</label>
                                        <input type="text" class="form-control" name="" id="fazenda_cidade"
                                            placeholder="Cidade da Fazenda">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="numero" class="form-label">Número. Prod. Rural</label>
                                        <input type="text" class="form-control" name="" id="numero"
                                            placeholder="Número. Prod. Rural">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="fazenda_estado" class="form-label">Estado da Fazenda</label>
                                        <select class="form-select" name="" id="fazenda_estado">
                                            <option selected>Estado da Fazenda</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="multistep-step" data-step="3">
                                <div class="text-center mb-5">
                                    <h5>Endereço 1</h5>
                                </div>
                                <div class="row mt-5 justify-content-center ">
                                    <div class="col-6 mb-3">
                                        <label for="tipo" class="form-label">Tipo</label>
                                        <select name="" id="tipo" class="form-select">
                                            <option selected>Tipo</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <select name="" id="estado" class="form-select">
                                            <option selected>Estado</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="endereco" class="form-label">Endereço</label>
                                        <input type="text" name="" id="endereco" class="form-control"
                                            placeholder="Endereço">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="cidade" class="form-label">Cidade</label>
                                        <input type="text" name="" id="cidade" class="form-control"
                                            placeholder="Cidade">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="bairro" class="form-label">Bairro</label>
                                        <input type="text" name="" id="bairro" class="form-control"
                                            placeholder="Bairro">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="cep" class="form-label">CEP</label>
                                        <input type="text" name="" id="cep" class="form-control"
                                            placeholder="CEP">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="referencia" class="form-label">Referência</label>
                                        <input type="text" name="" id="referencia" class="form-control"
                                            placeholder="Referência">
                                    </div>
                                </div>
                            </div>
                            <div class="multistep-step" data-step="4">
                                <div class="text-center mb-5">
                                    <h5>Endereço 2</h5>
                                </div>
                                <div class="row mt-5 justify-content-center ">
                                    <div class="col-6 mb-3">
                                        <label for="tipo" class="form-label">Tipo</label>
                                        <select name="" id="tipo" class="form-select">
                                            <option selected>Tipo</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <select name="" id="estado" class="form-select">
                                            <option selected>Estado</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="endereco" class="form-label">Endereço</label>
                                        <input type="text" name="" id="endereco" class="form-control"
                                            placeholder="Endereço">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="cidade" class="form-label">Cidade</label>
                                        <input type="text" name="" id="cidade" class="form-control"
                                            placeholder="Cidade">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="bairro" class="form-label">Bairro</label>
                                        <input type="text" name="" id="bairro" class="form-control"
                                            placeholder="Bairro">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="cep" class="form-label">CEP</label>
                                        <input type="text" name="" id="cep" class="form-control"
                                            placeholder="CEP">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="referencia" class="form-label">Referência</label>
                                        <input type="text" name="" id="referencia" class="form-control"
                                            placeholder="Referência">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <span class="text-danger ">Você pode pular essa etapa!</span>
                                </div>
                            </div>
                            <div class="multistep-step" data-step="5">
                                <div class="text-center mb-5">
                                    <h5>Contato</h5>
                                </div>
                                <div class="row justify-content-center mt-5">
                                    <div class="col-6 mb-3">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="text" name="" id="telefone" class="form-control"
                                            placeholder="Telefone">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="celular" class="form-label">Celular</label>
                                        <input type="text" name="" id="celular" class="form-control"
                                            placeholder="Celular">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="text" name="" id="email" class="form-control"
                                            placeholder="E-mail">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="whatsapp" class="form-label">Whatsapp</label>
                                        <input type="text" name="" id="whatsapp" class="form-control"
                                            placeholder="Whatsapp">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="indicacao" class="form-label">Indicação de:</label>
                                        <input type="text" name="" id="indicacao" class="form-control"
                                            placeholder="Indicação de:">
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
