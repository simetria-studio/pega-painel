<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.min.css') }}">

</head>

<body>
    <div id="app">
        <header class="top">
            <div class="space-logo">
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 logo" href="#">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid">
                </a>
            </div>
            <div class="navbar-nav">
                <div class="nav-item ">
                    <a class="nav-link px-3 sair" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar">
                    <div class="admin p-2 ">
                        <div class="d-flex mx-2 align-items-center mb-3">
                            <div class="perfil">
                                <img src="{{ asset('img/user-default.png') }}" alt="Logo">
                            </div>
                            <div>
                                <span>{{ auth()->user()->name }}</span>
                            </div>
                        </div>
                        <form action="">
                            <div class="input-group procurar mb-3">
                                <input type="text" class="form-control" placeholder="Procurar...">
                                {{-- <button class="btn" type="button">
                                    <span data-feather="search"></span>
                                </button> --}}
                            </div>
                        </form>
                    </div>
                    <div class="position-sticky pt-3 sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('comunicacao') }}">Comunicações</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cadastrar') }}">
                                    <span data-feather="file" class="align-text-bottom"></span>
                                    Cadastro de Usuários
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ecommerce') }}">
                                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                    Ecommerce
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('usuario') }}">
                                    <span data-feather="users" class="align-text-bottom"></span>
                                    Usuários
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('animais') }}">
                                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                    Animais
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('anuncio') }}">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Anúncios
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('permissoes') }}">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Permissões
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('financeiro') }}">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Financeiro
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('configuracoes') }}">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Configurações
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9  col-lg-10 px-md-4">
                    @yield('content')

                </main>
            </div>
        </div>


        <footer class="bg-dark text-light ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center my-2 text-light ">© 2023 - Todos os direitos reservados</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
    @yield('js')
    <script>
        $(document).ready(function() {
            var url = window.location.href;
            $('ul.nav a[href="' + url + '"]').addClass('active');
        });
    </script>
</body>

</html>
