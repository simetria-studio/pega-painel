@extends('layouts.app.auth')

@section('title', 'Cadastre-se')

@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 pt-12 pb-3 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto w-36 " src="{{ asset('app/img/home.png') }}" alt="ABCJPêga">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-red-900">
                Crie a sua conta
            </h2>
        </div>
    </div>
    <div class=" sm:mx-auto sm:w-full sm:max-w-sm">
        <form>
            <section>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mx-10 my-10">
                    <!-- Dados Pessoais  -->
                    <div class="sm:col-span-3">
                        <label for="nome" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                        <div class="mt-2">
                            <input type="text" id="nome" name="nome"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="data_nascimento" class="block text-sm font-medium leading-6 text-gray-900">Data de
                            nascimento</label>
                        <div class="mt-2">
                            <input type="date" id="data_nascimento" name="data_nascimento"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="rg" class="block text-sm font-medium leading-6 text-gray-900">RG</label>
                        <div class="mt-2">
                            <input type="text" id="rg" name="rg"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="cpf" class="block text-sm font-medium leading-6 text-gray-900">CPF</label>
                        <div class="mt-2">
                            <input type="text" id="cpf" name="cpf"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="cnpj" class="block text-sm font-medium leading-6 text-gray-900">CNPJ</label>
                        <div class="mt-2">
                            <input type="text" id="cnpj" name="cnpj"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                        </div>
                    </div>



                    <div class="sm:col-span-3">
                        <label for="cidade_nascimento" class="block text-sm font-medium leading-6 text-gray-900">Cidade de
                            nascimento</label>
                        <div class="mt-2">
                            <input type="text" id="cidade_nascimento" name="cidade_nascimento"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="sexo" class="block text-sm font-medium leading-6 text-gray-900">Selecione o
                            sexo</label>
                        <select id="sexo" name="sexo"
                            class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                        </select>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="estado-civil" class="block text-sm font-medium leading-6 text-gray-900">Selecione o
                            estado
                            civil</label>
                        <select id="estado-civil" name="estado_civil"
                            class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                            <option value="solteiro">Solteiro</option>
                            <option value="casado">Casado</option>
                            <option value="divorciado">Divorciado</option>
                            <option value="viuvo">Viúvo</option>
                        </select>
                    </div>


                    <div class="sm:col-span-3">
                        <label for="conjuge_nome" class="block text-sm font-medium leading-6 text-gray-900">
                            Nome do cônjuge
                        </label>
                        <div class="mt-2">
                            <input type="text" id="conjuge_nome" name="conjuge_nome"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="tipo_pessoa" class="block text-sm font-medium leading-6 text-gray-900">
                            Selecione o tipo de pessoas
                        </label>
                        <div class="mt-2">
                            <select id="tipo_pessoa" name="tipo_pessoa"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                                <option value="pf">Física</option>
                                <option value="pj">Jurídica</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="escolaridade"
                            class="block text-sm font-medium leading-6 text-gray-900">Escolaridade</label>
                        <div class="mt-2">
                            <input type="text" id="escolaridade" name="escolaridade"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="profissao" class="block text-sm font-medium leading-6 text-gray-900">Profissão</label>
                        <div class="mt-2">
                            <input type="text" id="profissao" name="profissao"
                                class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mx-10 my-10">
                    <div class="sm:col-span-3">
                        <label for="endereco" class="block text-sm font-medium leading-6 text-gray-900">Endereço
                            Atualizado</label>
                        <div class="mt-2">
                            <input type="text" id="endereco" name="endereco"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="inscricao_estadual"
                            class="block text-sm font-medium leading-6 text-gray-900">Inscrição
                            estadual</label>
                        <div class="mt-2">
                            <input type="text" id="inscricao_estadual" name="inscricao_estadual"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="inscricao_municipal"
                            class="block text-sm font-medium leading-6 text-gray-900">Inscrição
                            municipal</label>
                        <div class="mt-2">
                            <input type="text" id="inscricao_municipal" name="inscricao_municipal"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="credenciado_crmv" class="block text-sm font-medium leading-6 text-gray-900">CRMV
                        </label>
                        <div class="mt-2">
                            <input type="text" id="credenciado_crmv" name="credenciado_crmv"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="credenciado_crea"
                            class="block text-sm font-medium leading-6 text-gray-900">CREA</label>
                        <div class="mt-2">
                            <input type="text" id="credenciado_crea" name="credenciado_crea"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="credenciado_area_atuacao"
                            class="block text-sm font-medium leading-6 text-gray-900">Área
                            de
                            atuação</label>
                        <div class="mt-2">
                            <input type="text" id="credenciado_area_atuacao" name="credenciado_area_atuacao"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="associado_tipo_afixo" class="block text-sm font-medium leading-6 text-gray-900">Tipo
                            afixo</label>
                        <div class="mt-2">
                            <input type="text" id="associado_tipo_afixo" name="associado_tipo_afixo"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="associado_afixo"
                            class="block text-sm font-medium leading-6 text-gray-900">Afixo</label>
                        <div class="mt-2">
                            <input type="text" id="associado_afixo" name="associado_afixo"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="associado_preposicao"
                            class="block text-sm font-medium leading-6 text-gray-900">Preposição</label>
                        <div class="mt-2">
                            <input type="text" id="associado_preposicao" name="associado_preposicao"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mx-10 my-10">
                    <div class="sm:col-span-3">
                        <label for="telefone" class="block text-sm font-medium leading-6 text-gray-900">Telefone</label>
                        <div class="mt-2">
                            <input type="text" id="telefone" name="telefone"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="whatsapp" class="block text-sm font-medium leading-6 text-gray-900">WhatsApp</label>
                        <div class="mt-2">
                            <input type="text" id="whatsapp" name="whatsapp"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">E-mail</label>
                        <div class="mt-2">
                            <input type="text" id="email" name="email"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                </div>
            </section>
            <div class="flex justify-center my-5">
                <div>
                    <button type="button"
                        class="border w-32 py-2 bg-red-800 text-white rounded-xl mx-2">Anterior</button>
                </div>
                <div>
                    <button type="button" class="border w-32 py-2 bg-red-800 text-white rounded-xl mx-2">Próximo</button>
                </div>
                <div>
                    <button type="submit" class="border w-32 py-2 bg-red-800 text-white rounded-xl mx-2">Enviar</button>
                </div>
            </div>

        </form>
    </div>
@endsection
