@extends('layouts.app.main')
@section('title', 'Financeiro')

@section('content')

    <div class="m-4 text-red-900">
        <a href="{{ route('app.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </a>
    </div>

    <div class="mx-4">
        <div class="w-80 my-8 mx-auto bg-zinc-100 rounded-t-lg border-b-2 border-red-900  drop-shadow-lg">
            <p class="text-center text-lg font-semibold p-1">Financeiro</p>
        </div>
        <div class="flex justify-center mb-5">
            <div class="">
                <button id="btn-pendente"
                    class="w-80 bg-zinc-100 p-2 block border-l-2 border-red-900 font-medium  drop-shadow-lg  ">
                    Pendentes
                    <span
                        class="float-right text-sm mr-2 w-5 h-5 text-white bg-black rounded-full flex items-center justify-center focus:bg-red-900 active:bg-red-900">1</span>
                </button>
                <div id="pendente" class="w-80 h-52 bg-zinc-100 rounded-b-lg p-4 overflow-y-auto border shadow-md hidden">

                    <div class="border-l-2 border-red-900 p-1 mb-4 ">
                        <a class="text-red-700 " href="financeiro/pendente">
                            Mensalidade referente ao mês 01
                        </a>
                    </div>
                    <div class="border-l-2 border-red-900 p-1 mb-4">
                        <button class="text-red-700 ">
                            Mensalidade referente ao mês 02
                        </button>
                    </div>
                    <div class="border-l-2 border-red-900 p-1 mb-4">
                        <button class="text-red-700 ">
                            Mensalidade referente ao mês 03
                        </button>
                    </div>
                    <div class="border-l-2 border-red-900 p-1 mb-4">
                        <button class="text-red-700 ">
                            Mensalidade referente ao mês 04
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex justify-center mb-5">
            <div>
                <button id="btn-aguardando"
                    class="w-80 bg-zinc-100 p-2 block border-l-2 border-red-900 font-medium  drop-shadow-lg rounded-r-lg">
                    Aguardando aprovação
                    <span id="notification"
                        class="float-right text-sm mr-2 w-5 h-5 text-white bg-black rounded-full flex items-center justify-center focus:bg-red-900 active:bg-red-900">1</span>
                </button>
                <div id="aguardando" class="w-80 h-52 bg-zinc-100 rounded-b-lg p-4 border shadow-md hidden">
                    <div class="border-l-2 border-red-900 p-1 mb-8">
                        <button class="text-red-700 ">
                            Pagamento referente ao mês 01
                        </button>
                    </div>
                    <div class="text-center text-sm">
                        <p> Estamos processando seu pagamento, não se preocupe notificaremos logo após a confirmação
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex justify-center mb-5">
            <div>
                <button id="btn-comprovantes"
                    class="w-80 bg-zinc-100 p-2 block border-l-2 border-red-900 font-medium  drop-shadow-lg rounded-r-lg">
                    Comprovantes
                </button>
                <div id="comprovantes"
                    class="w-80 h-52 bg-zinc-100 rounded-b-lg p-4 overflow-y-auto border shadow-md hidden">
                    <div class="border-l-2 border-red-900 p-1 mb-4">
                        <button class="text-sm flex hover:text-red-900 ">
                            Comprovante referente ao mês <span class="mx-1"> 01</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>

                        </button>
                    </div>
                    <div class="border-l-2 border-red-900 p-1 mb-4">
                        <button class="text-sm flex hover:text-red-900">
                            Comprovante referente ao mês <span class="mx-1"> 02</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>

                        </button>
                    </div>
                    <div class="border-l-2 border-red-900 p-1 mb-4">
                        <button class="text-sm flex hover:text-red-900">
                            Comprovante referente ao mês <span class="mx-1"> 03</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>

                        </button>
                    </div>
                    <div class="border-l-2 border-red-900 p-1 mb-4">
                        <button class="text-sm flex hover:text-red-900">
                            Comprovante referente ao mês <span class="mx-1">04</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </button>
                    </div>
                    <div class="border-l-2 border-red-900 p-1 mb-4">
                        <button class="text-sm flex hover:text-red-900">
                            Comprovante referente ao mês <span class="mx-1">05</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex justify-center mb-5">
            <a href="#"
                class="text-center w-80 bg-zinc-100 p-2 block border-l-2 border-red-900 font-medium  drop-shadow-lg rounded-r-lg">
                Ganhos
            </a>
        </div>
    </div>
@endsection

<style>
    .active>span {
        background-color: #e53e3e;
    }
</style>

@section('js')
    <script>
        $(document).ready(function() {
            $("#btn-pendente").click(function() {
                if ($("#pendente").is(":hidden")) {
                    $("#pendente").slideDown();
                } else {
                    $("#pendente").slideUp();
                }
            });
            $("#btn-aguardando").click(function() {
                if ($("#aguardando").is(":hidden")) {
                    $("#aguardando").slideDown();
                } else {
                    $("#aguardando").slideUp();
                }
            });
            $("#btn-comprovantes").click(function() {
                if ($("#comprovantes").is(":hidden")) {
                    $("#comprovantes").slideDown();
                } else {
                    $("#comprovantes").slideUp();
                }
            });
        });
    </script>
@endsection
