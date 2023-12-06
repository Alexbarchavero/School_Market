<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleL.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('css/styleC.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/vmv.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/aboutus.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleH.css')}}"/>
    <title>SCHOOLMARKET</title>
    <style>
        body{
            background-size: cover;
            background-image: url("{{asset('img/fondo.png')}}");
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

<body>
        
    <header id="main-header">
        <a href="{{url('/')}}" class="logo">
            <img src="{{asset('img/LogoP.png')}}" alt="Logo" class="logo-img" style="width: 80px; height: auto;">
        </a>
        <nav class="navigation">
            <a href="{{url('/nosotros')}}">Acerca de</a>
            <a href="{{url('/contacto')}}">Contacto</a>
            <a href="{{url('/mvv')}}">Mision y vision</a>
        </nav>
    </header>
    <div>
        <br><br><br><br><br><br><br><br><br><br>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
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
    </div><br>

    @yield('content')
    
    <br><footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>
</body>
</html>