<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel blue accent-2">
            <div class="container">
                <a class="navbar-brand white-text" href="home">
                    <h3 class="white-text">MateLocos</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link p-text" href="{{ route('login') }}">Iniciar Sesion</a></li>
                            <li><a class="nav-link p-text" href="{{ route('register') }}">Registrarse</a></li>
                        @else
                        <li class="nav-item dropdown white-text">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle white-text" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="caret white-text">Set 1</span>
                            </a>
                            <div class="dropdown-menu blue accent-2 mb-0" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item white-text" href="vista">
                                  Problema 1
                                </a>
                                <a class="dropdown-item white-text" href="vista2">
                                  Problema 2
                                </a>
                                <a class="dropdown-item white-text" href="vista3">
                                  Problema 3
                                </a>
                                <a class="dropdown-item white-text" href="vista4">
                                  Problema 4
                                </a>
                            </div>
                        </li>
                        @if(Auth::user()->level==2)
                        <li class="nav-item dropdown white-text">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle white-text" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="caret white-text">Set 2</span>
                            </a>

                            <div class="dropdown-menu  blue accent-2" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item white-text" href="vista5">
                                  Problema 5
                                </a>
                                <a class="dropdown-item white-text" href="vista6">
                                  Problema 6
                                </a>
                                <a class="dropdown-item white-text" href="vista7">
                                  Problema 7
                                </a>
                                <a class="dropdown-item white-text" href="vista8">
                                  Problema 8
                                </a>
                                <a class="dropdown-item white-text" href="vista9">
                                  Problema 9
                                </a>
                                <a class="dropdown-item white-text" href="vista10">
                                  Problema 10
                                </a>
                            </div>
                        </li>
                        @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle white-text" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <span class="white-text">{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu blue accent-2" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item white-text" href="login"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="page-footer blue-grey">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <h5 class="white-text">Hecho por:</h5>
                <h6 class="white-text" style="font-size:9pt">Alexis Giovanny Roque Morales</h6>
                <h6 class="white-text" style="font-size:9pt">Jhaysón Daniel Hernández Tovar</h6>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3 white-text list-style" href="login">www.MateLocos.com</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="greydarken-4">
            <div class="container">
            © 2018 Original Text
            <a class="grey-text text-lighten-4 right white-text list-style" href="#!">More Links</a>
            </div>
          </div>
        </footer>
    </div>
</body>
</html>
