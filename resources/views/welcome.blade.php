<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DoeLeite</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet" >
    <!-- Styles -->

    <style>
      body {
    font-family: 'Figtree', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('/img/fundo.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    position: absolute;
    right: 80px;
}
    </style>

</head>

<body>


    <div class="form" style=" background-color: rgba(240, 140, 210, 0.7); 
    border-radius: 8px;
    padding: 20px;
    width: 300px;
    text-align: center; margin-bottom: 20px;">
        <img src="img/logo.jpg" style="height:100px">
        <form action="{{ route('login') }}" method="POST" style=" display: flex;
    flex-direction: column;" >
            @csrf
            <input type="text" name="email" placeholder="Seu E-mail" required style=" margin-bottom: 10px;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #ffffff; 
    color: #000000;">
            <input type="password" name="password" placeholder="Sua Senha" required style=" margin-bottom: 10px;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #ffffff; 
    color: #000000;">
            <button type="submit" style="padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #e24ab4; 
    color: #ffffff; 
    cursor: pointer;">Entrar</button>
        </form>


        <div class="switch-auth" style=" margin-top: 10px;">

            @if (Route::has('register'))
            <p>Não tem conta?</p> <a style="color: #f024b3;text-decoration: none;" href="{{ route('register') }}">Cadastre-se</a>
            @endif

        </div>
        
    </div>
    
  

</body>
<footer class="bg-gray-800 text-white p-4 text-center">
    <div style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: rgba(240, 140, 210, 0.7); padding: 0px; text-align: center; z-index: 2;">
    <div class="navbar navbar-expand-md navbar-light bg-color shadow-sm">
        <div style="margin-left: 300px; left: 0; bottom: 0; width: 100%; color: #e24ab4; display: flex; justify-content: space-around; align-items: center; padding: 4px; text-align: center; z-index: 1;">
            <p style="color: black; margin: 0;">
                Este site utiliza recursos do <a href="https://www.gov.br" target="_blank" style="cursor: pointer; color: white;">https://www.gov.br/</a>
            </p>
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