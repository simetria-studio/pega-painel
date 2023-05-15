@extends('layouts.dashboard')

@section('title', 'Usuário - Informações')

@section('content')
    <div class="row">
        <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
            <h1 class="h3">Informações do usuário</h1>
        </div>
        <div class="col-12 mx-auto">
            <div class="bg-secondary rounded shadow p-3 d-flex  gap-3">
                <div class="rounded-circle">
                    <img src="https://www.w3schools.com/howto/img_avatar.png" width="300" height="300" alt="Avatar"
                        class="img-fluid rounded-circle">
                </div>
                
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="col-6 border-3 border-bottom border-primary">
                            <p class="mb-0 h5">{{ $pessoa->nome }}</p>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="cpf" class="form-label">CPF/CNPJ</label>
                        <div class="rounded bg-light w-100 p-2 " id="cpf">
                            <span>@if($pessoa->cpf) {{ $pessoa->cpf }} @else {{ $pessoa->cnpj }} @endif</span>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="rg" class="form-label">RG</label>
                        <div class="rounded bg-light w-100 p-2" id="rg">
                            <span>{{ $pessoa->rg }}</span>
                        </div>
                    </div>

                    <div class="col-4 mb-3">
                        <label for="nascimento" class="form-label">Data de nascimento</label>
                        <div class="rounded bg-light w-100 p-2" id="nascimento">
                            <span>{{ date('d/m/Y', strtotime($pessoa->data_nascimento)); }}</span>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="cadastro-associado" class="form-label">Cadastro associado</label>
                        <div class="rounded bg-light w-100 p-2" id="cadastro-associado">
                            <span>Cadastro associado</span>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="tipo-associado" class="form-label">Tipo de associado</label>
                        <div class="rounded bg-light w-100 p-2">
                            <span>Tipo de associado</span>
                        </div>
                    </div>

                    <div class="col-4 mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <div class="rounded bg-light w-100 p-2" id="telefone">
                            <span>{{ $pessoa->telefone ?? 'Não possuí' }}</span>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="whatsapp" class="form-label">Whatsapp</label>
                        <div class="rounded bg-light w-100 p-2" id="whatsapp">
                            <span>{{ $pessoa->whatsapp ?? 'Não possuí' }}</span>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <div class="rounded bg-light w-100 p-2" id="email">
                            <span>{{ $pessoa->email ?? 'Sem email' }}</span>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="cep" class="form-label">CEP</label>
                        <div class="rounded bg-light w-100 p-2" id="cep">
                            <span>{{ $pessoa->getAdress->cep ?? '' }}</span>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <div class="rounded bg-light w-100 p-2" id="estado">
                            <span>{{ $estado->nome ?? '' }}</span>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="cidade" class="form-label">Cidade</label>
                        <div class="rounded bg-light w-100 p-2" id="cidade">
                            <span>{{ $pessoa->getAdress->cidade ??'' }}</span>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <div class="rounded bg-light w-100 p-2" id="endereco">
                            <span>{{ $pessoa->getAdress->endereco }}</span>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="" class="form-label">Referência</label>
                        <div class="rounded bg-light w-100 p-2">
                            <span>{{ $pessoa->getAdress->complemento ?? 'Ref' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
