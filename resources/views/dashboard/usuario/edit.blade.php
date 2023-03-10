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
            <form action="{{ route('owner.update', $pessoa->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Nome</label>
                            <input type="text" class="form-control" name="nome" value="{{ $pessoa->nome }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $pessoa->email }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Código</label>
                            <input type="text" class="form-control" name="codigo" value="{{ $pessoa->codigo }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Data de nascimento</label>
                            <input type="text" class="form-control" name="data_nascimento"
                                value="{{ $pessoa->data_nascimento }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Sexo</label>
                            <select name="sexo" id="" class="form-control">
                                <option>Selecione</option>
                                <option value="M" @if ($pessoa->sexo == 'M') selected @endif>Masculino</option>
                                <option value="F" @if ($pessoa->sexo == 'F') selected @endif>Feminino</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Estado civil</label>
                            <select name="estado_civil" id="" class="form-control">
                                <option value="">Selecione</option>
                                <option value="solteiro" @if ($pessoa->estado_civil == 'solteiro') selected @endif>Solteiro</option>
                                <option value="casado" @if ($pessoa->estado_civil == 'casado') selected @endif>Casado</option>
                                <option value="divorciado" @if ($pessoa->estado_civil == 'divorciado') selected @endif>Divorciado
                                </option>
                                <option value="viuvo" @if ($pessoa->estado_civil == 'viuvo') selected @endif>Viúvo</option>
                                <option value="desquitado" @if ($pessoa->estado_civil == 'desquitado') selected @endif>Desquitado
                                </option>
                                <option value="outros" @if ($pessoa->estado_civil == 'outros') selected @endif>Outros</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Telefone</label>
                            <input type="text" class="form-control" value="{{ $pessoa->telefone }}" name="telefone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Celular</label>
                            <input type="text" class="form-control" value="{{ $pessoa->celular }}" name="celular">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">WhatsApp</label>
                            <input type="text" class="form-control" value="{{ $pessoa->whatsapp }}" name="whatsapp">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Tipo de pessoa</label>
                            <select name="tipo_pessoa" id="" class="form-control">
                                <option value="">Selecione</option>
                                <option value="pf" @if ($pessoa->tipo_pessoa == 'pf') selected @endif>Física</option>
                                <option value="pj" @if ($pessoa->tipo_pessoa == 'pj') selected @endif>Jurídica</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">CPF</label>
                            <input type="text" class="form-control" value="{{ $pessoa->cpf }}" name="cpf">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">RG</label>
                            <input type="text" class="form-control" value="{{ $pessoa->rg }}" name="rg">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Cidade de nascimento</label>
                            <input type="text" class="form-control" value="{{ $pessoa->cidade_nascimento }}"
                                name="cidade_nascimento">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Nome do conjuguê</label>
                            <input type="text" class="form-control" value="{{ $pessoa->conjugue_nome }}"
                                name="conjugue_nome">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Profissão</label>
                            <select name="profissao" id="" class="form-control">
                                <option value="">{{ $pessoa->profissao }}</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">CNPJ</label>
                            <input type="text" class="form-control" value="{{ $pessoa->cnpj }}" name="cpnj">

                        </div>
                        <div class="text-center">
                            <button class="btn btn-pega" type="submit">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
