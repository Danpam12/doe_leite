<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Doe Leite</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app" style="background-color: white;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid" style="background-color: rgba(240, 140, 210, 0.7); ">
                <img src="/img/logo.jpg" style="height:100px">
                <main class="py-4">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="background-color: #e24ab4;">
                            <span class="navbar-toggler-icon" style="background-color: pink;"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                </li>
                                @endif

                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown" style="padding: 0px; border: 10; border-radius: 10px; background-color: #ffffff; color: black; position: absolute; right: 0; top: 30px;">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        @canany(['create-role', 'edit-role', 'delete-role'])
                                        <a class="dropdown-item" href="{{ route('roles.index') }}">Gerenciar Perfil</a>
                                        @endcanany
                                        @canany(['create-user', 'edit-user', 'delete-user'])
                                        <a class="dropdown-item" href="{{ route('users.index') }}">Gerenciar Usuário</a>
                                        @endcanany
                                        @canany(['create-ponto-coleta', 'edit-ponto-coleta', 'delete-ponto-coleta'])
                                        <a class="dropdown-item" href="{{ route('ponto_coletas.index') }}">Gerenciar
                                            Ponto de Coleta</a>
                                        @endcanany
                                        @canany(['create-agendamento', 'edit-agendamento', 'delete-ponto-coleta'])
                                        <a class="dropdown-item" href="{{ route('agendamentos.index') }}">Gerenciar
                                            Agendamentos</a>
                                        @endcanany
                                        @canany(['create-cad-doadora', 'edit-cad-doadora', 'delete-cad-doadora'])
                                        <a class="dropdown-item" href="{{ route('cad_doadoras.index') }}">Gerenciar Doadoras</a>
                                        @endcanany

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </div>
                        </li>

                        @endguest
                        </ul>
                    </div>
            </div>
        </nav>



        @yield('content')




    </div>
    </div>
    </div>
    </main>
    </div>
</body>

</html>