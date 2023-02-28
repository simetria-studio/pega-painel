@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center h-screen">
            <div class="col-md-4">
                <div class="row justify-content-center mb-3">
                    <div class="logo">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid">
                    </div>
                    <div class="bem-vindo">
                        <p>Bem vindo ao nosso sistema JPêga, faça login para continuar</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="mb-3">
                            <input id="email" type="email" class="form-control bg-secondary rounded-4 @error('email') is-invalid @enderror"
                                name="email" required placeholder="Login">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input id="password" type="password"
                                class="form-control bg-secondary  rounded-4 @error('password') is-invalid @enderror" name="password" required
                                placeholder="Senha">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-0 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary rounded-4">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
