@extends('layouts.app.main')

@section('title', 'Comunicacões')

@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ route('app.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="my-5">
            <h1 class="text-center font-semibold text-xl">Comunicacões</h1>
        </div>
        <div class="text-center w-64 mx-auto">
            @if (auth()->user()->permission != 2)
                <a href="{{ route('app.cobricao') }}"
                    class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                    Cobrição
                </a>
                <a href="{{ route('app.nascimento') }}"
                    class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                    Nascimento
                </a>
            @endif
            <a href="{{ route('app.transferencia') }}"
                class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                Transferência de propriedade
            </a>
            <a href="{{ route('app.mensagem') }}"
                class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                Comunicado Oficial
            </a>
            <a href="{{ route('app.chamado') }}"
                class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                Chamado Técnico
            </a>
            <a href="{{ route('app.segundaVia') }}"
                class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                Segunda Via de registro
            </a>
            <a href="{{ route('app.baixaAnimal') }}"
                class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                Baixa/Morte de animal
            </a>
            <a href="{{ route('app.alteracaoAfixo') }}"
                class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                Alteração de afixo
            </a>
            <a href="./animais"
                class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                Inscrição de doador sêmen/embrião
            </a>
            <a href="{{ route('app.alteracaoCategoria') }}"
                class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                Alteração de categoria
            </a>
            <a href="{{ route('app.baixaAssociado') }}"
                class="border cursor-pointer drop-shadow block w-full mb-5 p-2 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                Baixa de associado
            </a>
        </div>
    </div>
@endsection


{{-- <script>
import Cookie from "js-cookie";
export default {
  name: "comunicacoes",
  layout: "default",
  mounted() {
    const token = Cookie.get("_access_token");

    if (!token) {
      window.location.href = "/login";
    }
  }
}
</script> --}}
