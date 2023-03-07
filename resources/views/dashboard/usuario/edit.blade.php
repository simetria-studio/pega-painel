@extends('layouts.dashboard')

@section('title', 'Usuário - Informações')

@section('content')
    <div class="col-5 mx-auto text-center my-5 border-bottom border-primary border-3">
        <h1 class="h3">Editar pessoa</h1>
    </div>
    <div class="container">
        <div>
            <a class="btn btn-voltar" onclick="history.back()"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" value="{{ $pessoa->nome }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" value="{{ $pessoa->email }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Código</label>
                        <input type="text" class="form-control" value="{{ $pessoa->codigo }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Data de nascimento</label>
                        <input type="text" class="form-control" value="{{ $pessoa->data_nascimento }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Sexo</label>
                        <select name="" id="" class="form-control">
                            <option value="">Selecione</option>
                            <option value="">Masculino</option>
                            <option value="">Feminino</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Estado civil</label>
                        <select name="" id="" class="form-control">
                            <option value="">Selecione</option>
                            <option value="">Solteiro</option>
                            <option value="">Casado</option>
                            <option value="">Divorciado</option>
                            <option value="">Viúvo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control" value="{{ $pessoa->telefone }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Celular</label>
                        <input type="text" class="form-control" value="{{ $pessoa->celular }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">WhatsApp</label>
                        <input type="text" class="form-control" value="{{ $pessoa->whatsapp }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tipo de pessoa</label>
                        <select name="" id="" class="form-control">
                            <option value="">Selecione</option>
                            <option value="">Física</option>
                            <option value="">Jurídica</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">CPF</label>
                        <input type="text" class="form-control" value="{{ $pessoa->cpf }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">RG</label>
                        <input type="text" class="form-control" value="{{ $pessoa->rg }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Cidade de nascimento</label>
                        <input type="text" class="form-control" value="{{ $pessoa->cidade_nascimento }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Nome do conjuguê</label>
                        <input type="text" class="form-control" value="{{ $pessoa->conjugue_nome }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Profissão</label>
                       <select name="" id="" class="form-control">
                            <option value="">{{ $pessoa->profissao }}</option>
                       </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">CNPJ</label>
                       <select name="" id="" class="form-control">
                            <option value="">{{ $pessoa->cnpj }}</option>
                       </select>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-pega">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
