<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Doe Leite</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app" style="background-color: white;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm,">
            <div class="py-1 container-fluid" style="background-color: rgba(240, 140, 210, 0.7); ">
                <a href="{{route('home')}}">
                    <img src="/img/logo.jpg" style="height:70px">
                </a>
                <main class="py-4">
                    <div class="navbar-nav ms-auto">
                        
                        @auth
                        
                            <li class="nav-item dropdown " style="border-radius: 10px; background-color: #ffffff; color: #e24ab4; position: absolute; right: 10px;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle pt-1 " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                    <!-- Adicione aqui qualquer outra opção de menu desejada -->
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            

                          

                            @if(!request()->is('home'))

                            @canany(['create-role', 'edit-role', 'delete-role','show-user'])
                            <a class="nav-link " href="{{ route('roles.index') }}" style="b;margin-right:80px; color: #e24ab4;"> <span style="font-weight: bold; font-size: 120%;">Perfil</span>  </a>

                            @endcanany

                            @canany(['create-user', 'edit-user', 'delete-user','show-user'])
                                <a class="nav-link" href="{{ route('users.index') }}" style="margin-right: 70px;   color: #e24ab4;"><span style="font-weight: bold; font-size: 1.2em;">Usuários</span></a>
                            @endcanany

                            @canany(['create-ponto-coleta', 'edit-ponto-coleta', 'delete-ponto-coleta', 'show-ponto-coleta'])
                                <a class="nav-link" href="{{ route('ponto_coletas.index') }}" style="margin-right: 70px;color: #e24ab4;"><span style="font-weight: bold; font-size: 1.2em;">Ponto de coleta</span></a>
                            @endcanany

                            @canany(['create-agendamento', 'edit-agendamento', 'delete-agendamento', 'show-agendamento'])
                                <a class="nav-link" href="{{ route('agendamentos.index') }}" style="margin-right: 70px; padding: 10px; color: #e24ab4;"><span style="font-weight: bold; font-size: 1.2em;">Agendamentos</span></a>
                            @endcanany

                            @canany(['create-cad-doadora', 'edit-cad-doadora', 'delete-cad-doadora', 'show-cad-doadora'])
                                <a class="nav-link" href="{{ route('cad_doadoras.index') }}" style="margin-right:150px;   color: #e24ab4;"><span style="font-weight: bold; font-size: 1.2em;">Doadoras</span></a>
                            @endcanany
                            @else
                            
                                
                            @endif

                        @endauth

                    </div>

                    <div class="container">
                        <!-- Botão para mostrar/ocultar links de gerenciamento -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="background-color: #e24ab4;">
                            <span class="navbar-toggler-icon" style="background-color: pink;"></span>
                        </button>
                    </div>
                </main>
            </div>
        </nav>

        @yield('content')

    </div>

</body>
<footer class="bg-white-800 text-white p-4 text-center">
    <div style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: rgba(240, 140, 210, 0.7); padding: 0px; text-align: center; z-index: 2;">
    <div class="navbar navbar-expand-md navbar-light bg-color shadow-sm">
        <div style="margin-left: 300px; left: 0; bottom: 0; width: 100%; color: #e24ab4; display: flex; justify-content: space-around; align-items: center; padding: 4px; text-align: center; z-index: 1;">
            <p style="color: black; margin: 0;">
                Este site utiliza recursos do <a href="https://www.gov.br" target="_blank" style="cursor: pointer; color: white;">https://www.gov.br/</a>
            </p>
        </div>
    </div>
</div>
</div>
<div style="position: fixed; left: 0; bottom: 0; width: 100%; color: white; display: flex; justify-content: space-around; align-items: center; padding: 4px; text-align: center; z-index: 2;">
    <div class="flex items-center gap-4">
        <a href="https://github.com/Danpam12/doe_leite" style="margin-right: 800px; color: white; display: inline-flex; align-items: center; padding: 2px; " class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500; color: black">
            DoeLeite
        </a>
    </div>
</div>
    </footer>
</html>
