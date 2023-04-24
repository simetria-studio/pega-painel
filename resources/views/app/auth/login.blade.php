@extends('layouts.app.auth')

@section('title', 'Login')

@section('content')

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-36 w-auto " src="{{ asset('app/img/home.png') }}" alt="ABCJPêga">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-red-900">
                Faça login em sua conta
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm login">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                        Endereço de E-mail</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Senha</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-red-800 hover:text-red-700">
                                Esqueceu sua senha?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-800 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="button" id="btnLogin"
                        class="flex btnLogin w-full justify-center rounded-md bg-red-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                        Entrar
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Não tem conta?
                <a href="{{ route('app.register') }}" class="font-semibold leading-6 text-red-800 hover:text-red-700">
                    Cadastra-se agora
                </a>
            </p>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#btnLogin').click(function() {
                $.ajax({
                    url: "{{ route('app.login.post') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        email: $('#email').val(),
                        password: $('#password').val()
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Aguarde...',
                            html: 'Estamos processando sua requisição',
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading()
                            },
                        })
                    },
                    success: function(response) {
                        console.log(response)
                        if (response.status == 'success') {
                            window.location.href = response.redirect;
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: response.message,
                            })
                        }
                    }
                });
            });
        });
    </script>

@endsection
