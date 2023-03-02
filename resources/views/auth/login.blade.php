@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center h-screen ">
            <div class="col-md-4">
                <div class="row justify-content-center mb-3">
                    <div class="logo">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid">
                    </div>
                    <div class="bem-vindo ">
                        <p>Bem vindo ao nosso sistema JPêga, faça login para continuar</p>
                    </div>
                </div>
                <form>
                    @csrf
                    <div class="row justify-content-center inputs card-login">
                        <div class="mb-3">
                            <input id="email" type="email"
                                class="form-control rounded-4 @error('email') is-invalid @enderror"
                                name="email" required placeholder="Login">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input id="password" type="password"
                                class="form-control  rounded-4 @error('password') is-invalid @enderror"
                                name="password" placeholder="Senha">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-0 d-flex justify-content-center ">
                            <button type="button" class="btn btn-login" id="btnLogin">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#btnLogin').click(function() {
                var email = $('#email').val();
                var password = $('#password').val();
                $.ajax({
                    url: "{{ route('login') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        email: email,
                        password: password
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Aguarde...',
                            html: 'Estamos verificando suas credenciais',
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading()
                            },
                        })
                    },
                    success: function(response) {
                        if (response) {
                            window.location = "{{ route('home') }}";
                        }
                    },
                    error: function(response) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Login ou senha incorretos!',
                        })
                    }
                });
            });
        });
    </script>
@endsection
