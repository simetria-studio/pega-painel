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

        <div class="">
            <div class="painel">
                <nav id="sidebarMenu" class=" d-md-block sidebar">
                    <a href="{{ route('home') }}">
                        <div class="logo-space">
                            <div class="logo">
                                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid">
                            </div>
                        </div>
                    </a>
                    <div class="admin p-2 ">
                        <div class="d-flex mx-2 align-items-center mb-3">
                            <div class="perfil">
                                <img id="img-hover" class="profile-img"
                                    src="https://ui-avatars.com/api/?size=512&amp;background=71191c&amp;color=fff&amp;name={{ auth()->user()->name }}"
                                    alt="">
                            </div>
                            <div class="user-name">
                                <span>{{ auth()->user()->name }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-sticky pt-3 sidebar-sticky painel-menu">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'comunicacao' ? 'active' : '' }}"
                                    href="{{ route('comunicacao') }}">Comunicações</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'cadastrar' ? 'active' : '' }}"
                                    href="{{ route('cadastrar') }}">
                                    <span data-feather="file" class="align-text-bottom"></span>
                                    Cadastro de Usuários
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'ecommerce' ? 'active' : '' }}"
                                    href="{{ route('ecommerce') }}">
                                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                    Ecommerce
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'usuario' ? 'active' : '' }}"
                                    href="{{ route('usuario') }}">
                                    <span data-feather="users" class="align-text-bottom"></span>
                                    Usuários
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'animais' ? 'active' : '' }}"
                                    href="{{ route('animais') }}">
                                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                    Animais
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'anuncio' ? 'active' : '' }}"
                                    href="{{ route('anuncio') }}">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Anúncios
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'permissoes' ? 'active' : '' }}"
                                    href="{{ route('permissoes') }}">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Permissões
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'financeiro' ? 'active' : '' }}"
                                    href="{{ route('financeiro') }}">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Financeiro
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'configuracoes' ? 'active' : '' }}"
                                    href="{{ route('configuracoes') }}">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Configurações
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="">
                    <div class="top">
                        <div>
                            <a href="{{ route('logout') }}" class="sair"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="px-md-4">
                        @yield('content')
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js')
    @if (Session::has('success'))
        <script type="text/javascript">
            Swal.fire({
                title: 'Sucesso!',
                icon: 'success',
                text: "{{ Session::get('success') }}",
                timer: 5000,
                type: 'success'
            }).then((result) => {
                // Reload the Page
                location.reload();
            });
        </script>
    @endif
    @if (Session::has('error'))
        <script type="text/javascript">
            Swal.fire({
                title: 'Oops!',
                icon: 'error',
                text: "{{ Session::get('error') }}",
                timer: 5000,
                type: 'error'
            }).then((result) => {
                // Reload the Page
                location.reload();
            });
        </script>
    @endif
</body>

</html>
