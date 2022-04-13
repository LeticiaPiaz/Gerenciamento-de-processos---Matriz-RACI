<!doctype html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token --><meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('RACI') }}</title>
    <!-- Scripts --><script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts --><link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles --><link href="../css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c02e5ac7f3.js" crossorigin="anonymous"></script>

    <style>
        /* Cores do projeto */
.backgroundProjeto {
    background-color: #aae3fa;
}

.colorPrimary {
    background-color: #86d8f1;
}

.colorSecondary {
    background-color: #2eccf3;
}

.colorBlack {
    background-color: black;
}

.colorYellow {
    /* background-color: #9c901e; */
    background-color: rgba(35, 107, 201, 0.664);
}
/* transparencia */
.transparency1 {
    opacity: 0.5;
}

/* TEXTO */
/* Cor */
.textColorWhite {
    color: white;
}

.textColorGray {
    color: #4A4A4A;
}

.textColorBlack {
    color: black;
}

.textColorYellow {
    color: #1a96a7;
}

.textColorRed {
    color: rgb(134, 30, 12);
}

/* Tamanhos */
.title1 {
    font-size: 30px;
}
.title2 {
    font-size: 20px;
}
.title3 {
    font-size: 20px;
}
.text1 {
    font-size: 20px;
}
.text3 {
    font-size: 20px;
}
/* Alinhamento */
.textCenter {
    text-align: center;
}


/* COMPONENTES */
/* LABELs */
.label1 {
    background-color: #8dc7fd;
}

.filtroLateral {
    right: auto;
}


/* lista Processos */
.buttons {
    color: white;
    text-decoration: none
}

.backgroundList:hover {
    background-color: rgba(156,144,30,0.4);
}

.buttons:hover {
    color: white;
}

/* a:link {
    color: #00F;
    background-color: rgb(56, 56, 54);
 }
   
 a:hover {
     color: #F00;
     background-color: rgb(39, 33, 126);
 }

 a:visited {
     color: #F00;
     background-color: rgb(39, 33, 126);
 } */

a:active {
    background-color: black;
}

/* buttons */

.buttonExcluir {
    color: rgb(34, 34, 34);
    background-color: rgba(156, 30, 30, 0.4);
}

.buttonEdit {
    color: rgb(34, 34, 34);
    background-color: rgba(156,144,30,0.4);
}
    </style>
    
    
</head>
<body class="backgroundProjeto">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container-fluid mx-5 my-1">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="mr-5">
                    <div class="mr-5 title2 textColorYellow">
                        {{ __('Plataforma RACI') }}
                    </div>
                </div>
                <div class="mr-5">esp</div>
                <div class="collapse navbar-collapse ml-5" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto ml-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            @if (Auth::user()->name == "admin")
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if (Auth::user()->name == "admin")
                                <a class="nav-link" href="{{ route('process') }}">{{ __('Cadastro processos') }}</a>
                            @endif
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i><span>    </span>{{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
            
        <!-- ICONES DOS ALERTS DO BOOTSTRAP -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
        <main class="mx-5">
            @yield('content')
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
</body>
</html>