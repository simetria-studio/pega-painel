@extends('layouts.app.main')

@section('title', 'Meu Perfil')

@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ route('app.pessoas') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="w-full">
            <div class="foto-perfil mb-5">
                <div class="flex justify-center  mb-3">
                    <img class="inline-block w-32 h-32 rounded-full ring-2 ring-red-800"
                        src="#">
                </div>
                <div class="text-center">
                    <label for="avatar" class="text-red-800 font-semibold cursor-pointer">Alterar Imagem <br> de
                        Perfil</label>
                    <input type="file" id="avatar" name="avatar" accept="img/png, img/jpeg"
                        class="text-red-800 font-semibold appearance-none hidden">
                </div>
            </div>

            <!-- dados pessoais  -->
            <div class="mb-4">
                <h1 class="text-red-900 font-medium text-lg text-center mb-3">
                    {{ auth()->user()->name }}
                </h1>
                <div class="font-medium text-base flex justify-center mx-8 gap-3">
                    <div>
                        <p>Email:</p>
                        <p>Whatsapp:</p>
                        <p>Telefone:</p>
                    </div>
                    <div>
                        <p>{{ auth()->user()->email }}</p>
                        <p>(00) 90000-0000</p>
                        <p>(00) 90000-0000</p>
                    </div>
                </div>
            </div>

            <div class="rounded-xl bg-zinc-100 drop-shadow mx-8 mb-4">
                <div class="p-3">
                    <div class="text-center">
                        <h1 class="text-red-900 font-medium text-lg mb-2">
                            Dados Pessoais
                        </h1>
                    </div>
                    <div class="flex justify-between text-sm font-medium">
                        <div>
                            <p>Nome Completo:</p>
                            <p>CPF:</p>
                            <p>RG:</p>
                            <p>Data de nascimento:</p>
                            <p>Cônjulge</p>
                        </div>
                        <div>
                            <p>{{ auth()->user()->name }}</p>
                            <p>000.000.000-00</p>
                            <p>000000000</p>
                            <p>00/00/00</p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-xl bg-zinc-100 drop-shadow mx-8 mb-4">
                <div class="p-3">
                    <div class="text-center">
                        <h1 class="text-red-900 font-medium text-lg mb-2">Endereço</h1>
                    </div>
                    <div class="flex justify-between text-sm font-medium">
                        <div>
                            <p>Estado:</p>
                            <p>Cidade:</p>
                            <p>CEP:</p>
                            <p>Endereço:</p>
                            <p>Número</p>
                        </div>
                        <div>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-xl bg-zinc-100 drop-shadow mx-8 mb-4">
                <div class="p-3">
                    <div class="text-center">
                        <h1 class="text-red-900 font-medium text-lg mb-2">
                            Dados associado
                        </h1>
                    </div>
                    <div class="flex justify-between text-sm font-medium">
                        <div>
                            <p>Número prod. rural:</p>
                            <p>Nome fazenda:</p>
                            <p>Estado fazenda:</p>
                            <p>afixo:</p>
                            <p>Preposição</p>
                        </div>
                        <div>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mb-4">
                <a class="text-red-900 text-lg font-medium" href="#">Carteira de associado ABCJPEGA</a>
            </div>

        </div>
    </div>
@endsection
