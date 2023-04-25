@extends('layouts.app.main')

@section('title', 'Configurações')

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
        <div class="grid place-items-center mx-10">
            <!-- Foto de perfil  -->
            <div class="foto-perfil mb-5">
                <div class="mb-3 w-32 h-32 flex justify-center border rounded-full border-red-900">
                    <img src="{{ asset('#') }}" class="rounded-full w-full h-full">
                </div>
                <div class="text-center">
                    <label for="avatar" class="text-red-800 font-semibold cursor-pointer">Alterar Imagem <br> de
                        Perfil</label>
                    <input type="file" id="avatar" name="avatar" accept="img/png, img/jpeg"
                        class="text-red-800 font-semibold appearance-none hidden">
                </div>
            </div>
            <!-- Alterações -->
            <div class="w-full text-center text-sm font-semibold">
                <a href=""
                    class="border cursor-pointer drop-shadow block w-full mb-5 p-3 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                    Alterar
                    Senha</a>
                <a href=""
                    class="border cursor-pointer drop-shadow block w-full mb-5 p-3 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                    Alterar
                    E-mail</a>
                <a href=""
                    class="border cursor-pointer drop-shadow block w-full mb-5 p-3 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                    Alterar
                    Login</a>
                <a href=""
                    class="border cursor-pointer drop-shadow block w-full mb-5 p-3 bg-zinc-100 rounded-xl border-zinc-100 focus:outline-none focus:border-red-800 focus:ring focus:ring-red-300 hover:border-red-900">
                    Dados
                    sensíveis</a>
            </div>
            <form action="">
                <button type="submit"
                    class="bg-red-800 text-white font-semibold rounded-xl p-2 w-32 flex items-center justify-center">
                    <img src="{{ asset('app/img/off.png') }}" class="px-2" alt="">
                    Sair
                </button>
            </form>
        </div>
    </div>
@endsection
{{-- <script>
    import Cookie from "js-cookie";
    export default {
        name: "",
        layout: "default",
        data() {
            return {
                // Variáveis
            }
        },
        methods: {
            // Métodos
        },
        computed: {
            // Computed
        },
        watch: {
            // Watch
        },
        mounted() {
            const token = Cookie.get("_access_token");

            if (!token) {
                window.location.href = "/login";
            }
        }
    }
</script> --}}
