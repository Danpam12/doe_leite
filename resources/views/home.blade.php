@extends('layouts.app')

<style>
    /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb
    }

    ::after,
    ::before {
        --tw-content: ''
    }

    html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        tab-size: 4;
        font-family: Figtree, sans-serif;
        font-feature-settings: normal
    }

    body {
        margin: 0;
        line-height: inherit
    }

    hr {
        height: 0;
        color: inherit;
        border-top-width: 1px
    }

    abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: inherit;
        font-weight: inherit
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    b,
    strong {
        font-weight: bolder
    }

   
 
    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        font-size: 100%;
        font-weight: inherit;
        line-height: inherit;
        color: inherit;
        margin: 0;
        padding: 0
    }

   
    .relative {
        position: relative
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .mx-6 {
        margin-left: 1.5rem;
        margin-right: 1.5rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-16 {
        margin-top: 4rem
    }

    .mt-6 {
        margin-top: 1.5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .mr-1 {
        margin-right: 0.25rem
    }

    .flex {
        display: flex
    }

    .inline-flex {
        display: inline-flex
    }

    .grid {
        display: grid
    }

    .h-16 {
        height: 4rem
    }

    .h-7 {
        height: 1.75rem
    }

    .h-6 {
        height: 1.5rem
    }

    .h-5 {
        height: 1.25rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .w-auto {
        width: auto
    }

    .w-16 {
        width: 4rem
    }

    .w-7 {
        width: 1.75rem
    }

    .w-6 {
        width: 1.5rem
    }

    .w-5 {
        width: 1.25rem
    }

    .max-w-7xl {
        max-width: 80rem
    }

    .shrink-0 {
        flex-shrink: 0
    }

    .scale-100 {
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .gap-6 {
        gap: 1.5rem
    }

    .gap-4 {
        gap: 1rem
    }

    .self-center {
        align-self: center
    }

    .rounded-lg {
        border-radius: 0.5rem
    }

    .rounded-full {
        border-radius: 9999px
    }

    .bg-gray-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(243 244 246 / var(--tw-bg-opacity))
    }

    .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-red-50 {
        --tw-bg-opacity: 1;
        background-color: rgb(254 242 242 / var(--tw-bg-opacity))
    }

    .bg-dots-darker {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
    }

    .from-gray-700\/50 {
        --tw-gradient-from: rgb(55 65 81 / 0.5);
        --tw-gradient-to: rgb(55 65 81 / 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .via-transparent {
        --tw-gradient-to: rgb(0 0 0 / 0);
        --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
    }

    .bg-center {
        background-position: center
    }

    .stroke-red-500 {
        stroke: #ef4444
    }

    .stroke-gray-400 {
        stroke: #9ca3af
    }

    .p-6 {
        padding: 1.5rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .text-center {
        text-align: center
    }

    .text-right {
        text-align: right
    }

    .text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem
    }

    .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem
    }

    .font-semibold {
        font-weight: 600
    }

    .leading-relaxed {
        line-height: 1.625
    }

    .text-gray-600 {
        --tw-text-opacity: 1;
        color: rgb(75 85 99 / var(--tw-text-opacity))
    }

    .text-gray-900 {
        --tw-text-opacity: 1;
        color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity))
    }

    .underline {
        -webkit-text-decoration-line: underline;
        text-decoration-line: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .shadow-2xl {
        --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
        --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }


    @media (min-width: 768px) {
        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width: 1024px) {
        .lg\:gap-10{
            gap: 2rem
        }

        .lg\:p-10 {
            padding: 2rem
        }

   
    }

    .grid-cols-5 {
        grid-template-columns: repeat(5, minmax(0, 1fr));
    }

    
    
</style>


<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="row grid-cols-5 gap-20 lg:gap-10">
                        
                    <div class="col-md-2 mb-4">
                            <div class="card" style="width: 150px;">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                        <div style="display: flex; justify-content: center; align-items: center; height: 10vh;">
                                                <img src="/img/icon-perfil.png" alt="Ícone" class="icon-img"
                                                    style="width: 100px">
                                            </div>
                                            <div class="media-body text-right">
                                            </div>
                                        </div>
                                    </div>
                                    @canany(['create-role', 'edit-role', 'delete-role'])
                                        <a  href="{{ route('roles.index') }}" class="btn btn-custom" style="border-radius: 4px; background-color: rgba(240, 140, 210, 0.7);">
                                        </i></i> <button type="button" class="btn btn-default"> Gerencie seu perfil</button> </a>
                                    @endcanany
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-2 mb-4">
                            <div class="card" style="width: 150px;">

                                <div class="card-content">
                                    <div class="card-body rounded-lg">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <img src="img/icon-usuario.png" alt="Ícone" class="icon-img"
                                                    style="width: 100px">

                                            </div>
                                            <div class="media-body text-right">

                                            </div>
                                        </div>
                                    </div>
                                    @canany(['create-user', 'edit-user', 'delete-user'])
                                    
                                  
                                        <a style="border-width: 20px; text-center; border-style: solid; border-color: #e24ab4; border-radius: 8px; background-color: #e24ab4;color: white;margin: 90px; "


                                        <a     href="{{ route('users.index') }}" class="btn btn-custom" style="border-radius: 4px; background-color: rgba(240, 140, 210, 0.7);">
                                        </i></i> <button type="button" class="btn btn-default"> Gerencie usuário </button> </a>
                                    @endcanany

                                </div>


                        </div>
                      
                        <div class="col-md-2  mb-4">
                            <div class="card" style="width: 150px;">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                        <div style="display: flex; justify-content: center; align-items: center; height: 10vh;">
                                                <img src="img/localizacao.png" alt="Ícone" class="icon-img"
                                                    style="width: 100px">
                                            </div>
                                            <div class="media-body text-right color-white; font-weight: bold;border-width: 10px; border-style: solid; border-color: #e24ab4; border-radius: 8px; ">
                                            </div>
                                        </div>
                                    </div>
                                    @canany(['create-ponto-coleta', 'edit-ponto-coleta', 'delete-ponto-coleta'])

                                    <a href="{{ route('ponto_coletas.index') }}" class="btn btn-custom" style="border-radius: 4px; background-color: rgba(240, 140, 210, 0.7); ">
    <button type="button" class="btn btn-default">Gerencie seu Ponto</button>
</a>



                                    @endcanany
                                </div>
                            </div>
                        </div>

                       
                        <div class="col-md-2 mb-4">
                            <div class="card" style="width: 150px;">

                                <div class="card-content">
                                    <div class="card-body ">
                                        <div class="media d-flex">

                                        <div style="display: flex; justify-content: center; align-items: center; height: 10vh;">
                                                <img src="/img/agenda.png" alt="Ícone" class="icon-img"
                                                    style="width: 100px;">
                                   </div>
                                            <div class="media-body text-right">
                                            </div>
                                        </div>
                                    </div>
                                    @canany(['create-agendamento', 'edit-agendamento', 'delete-agendamento'])
                                    <a href="{{ route('agendamentos.index') }}" class="btn btn-custom" style="border-radius: 4px; background-color: rgba(240, 140, 210, 0.7);">
                                            </i></i> <button type="button" class="btn btn-default"> Gerencie seu agendamento </button> </a>

                                    @endcanany
                                    </div>
                                </div>
                            </div>

                        
                        
                        <div class="col-md-2 mb-4">
                            <div class="card" style="width: 150px;">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div style="display: flex; justify-content: center; align-items: center; height: 10vh;">
                                                <img src="/img/doadora.jpg" alt="Ícone" class="icon-img"
                                                    style="width: 100px;">
                                            </div>
                                            <div class="media-body text-center">

                                            </div>
                                        </div>
                                    </div>
                                    @canany(['create-cad-doadora', 'edit-cad-doadora', 'delete-cad-doadora'])

                                        <a href="{{ route('cad_doadoras.index') }}" class="btn btn-custom" style="border-radius: 4px; background-color: rgba(240, 140, 210, 0.7);">
                                    </i></i> <button type="button" class="btn btn-default"> Gerencie Doadora </button> </a>
                                    @endcanany
</div>
                                </div>
                            </div>
                        </div>
</div>
                        
                      

                <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-8">
                    <a href="https://www.gov.br/pt-br/noticias/saude-e-vigilancia-sanitaria/2020/03/10-passos-para-ser-doadora-de-leite-materno"
                        class="scale-100 p-6 bg-pink-700 dark:bg-pink-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-pink/5 rounded-lg shadow-2xl shadow-pink-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-pink-500">
                        <div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Como doar leite materno?
                            </h2>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Para doar, basta ser saudável e não tomar nenhum medicamento que interfira na amamentação.
                                Se este for o seu caso, entre em contato com o banco de leite mais próximo de sua casa ou

                                ligue ao 136 para obter maiores informações de como e quando doar.
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </div>
                    </a>
                    <div class="bg-cover bg-center h-40" style="background-image: url('img/home.jpg');"></div>
                </div>


                <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-8">
                    <a href="https://bvsms.saude.gov.br/doacao-de-leite-humano-um-ato-que-salva-vidas/"
                        class="scale-100 p-6 bg-pink-700 dark:bg-pink-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-pink/5 rounded-lg shadow-2xl shadow-pink-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-pink-500">
                        <div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Qual a importância da
                                doação de leite ?</h2>
                            <p class="mt-6 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">

                                A doação de leite materno é fundamental para ampliar as chances de recuperação de bebês
                                prematuros e/ou de baixo peso que estão internados em UTIs neonatais, além de proporcionar
                                um desenvolvimento mais saudável por toda a vida.
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </div>

                </a>
                <div class="bg-cover bg-center h-40" style="background-image: url('img/home1.jpg');"></div>
            </div>
        </div>
        </div>
    </div>
</div>
    

    @endsection

