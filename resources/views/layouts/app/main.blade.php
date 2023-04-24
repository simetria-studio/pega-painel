<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABCJPêga - @yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('app/css/style.min.css') }}">
</head>

<body class="bg-gray-100">
    <header class=" bg-red-900 flex justify-between items-center p-3">
        <div class="menu-mobile">
            <button class="menu-mobile__btn">
                <svg class="menu-mobile__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                    height="24">
                    <path class="primary" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="menu-body hidden">
            <div class="bg-red-900 header-menu">
                <div>
                    <button class="close">X</button>
                </div>
            </div>
            <div class="sidemenu__wrapper bg-red-900">
                <ul class="sidemenu__list">
                    <li class="sidemenu__item"><a href="/">Home</a></li>
                    <li class="sidemenu__item">
                        <a to="/pessoas/meu-perfil">Meu Perfil</a>
                    </li>
                    <li class="sidemenu__item">
                        <a to="/informativos">Informativos</a>
                    </li>
                    <li class="sidemenu__item">
                        <a to="/financeiro">Financeiro</a>
                    </li>
                    <li class="sidemenu__item">
                        <a to="/solicitacoes">Solicitações</a>
                    </li>
                    <li class="sidemenu__item">
                        <a to="/carteira-associado">Carteira Associado</a>
                    </li>
                    <li class="sidemenu__item"><a @click="logout">Sair</a></li>
                </ul>
            </div>
        </div>

        <form class="flex items-center">
            <label for="simple-search" class="sr-only">Busca</label>
            <div class="relative w-full">
                <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3 ">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 focus:outline-none block w-full pr-10 p-1 "
                    placeholder="Busca">
            </div>
        </form>
        <div>
            <a to="/pessoas/meu-perfil" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </a>
        </div>

        <a href="{{ route('app.logout') }}" class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
            </svg>
        </a>

    </header>
    <main>
        @yield('content')
    </main>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('app/js/fabric.min.js') }}"></script>
    @yield('js')
    <script>
        if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
          // Se o dispositivo não é móvel, redireciona para a mensagem de erro ou para outra URL
          window.location.href = "{{ route('app.warning') }}";
        }
        </script>
    <script>
        $(document).on('click', '.menu-mobile__btn', function() {
            $('.menu-body').toggleClass('hidden');
        });
        $(document).on('click', '.close', function() {
            $('.menu-body').toggleClass('hidden');
        });
    </script>
</body>

</html>
