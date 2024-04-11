<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>School Market</title>
    <style>
        body{
            background-size: cover;
            background-image: url("{{asset('img/background.png')}}");
            background-repeat: no-repeat;
            background-position:center;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="{{url('/')}}" class="logo">
            <img src="{{asset('img/logo.png')}}" alt="logo">
        </a>
        <nav>
            <ul class="nav-links">
                <li><a href="{{url('/nosotros')}}">Nosotros</a></li>
                <li><a href="{{url('/contacto')}}">Contacto</a></li>
                <li><a href="{{url('/mvv')}}">Mision Vision Valores</a></li>
            </ul>
        </nav>
        <nav>
            <ul class="nav-links">
                @guest
                    @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}" class="btn">
                                <button>{{ __('Iniciar Sesion') }}</button>
                            </a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}" class="btn">
                                <button>{{ __('Registrarse') }}</button>
                            </a>
                        </li>
                    @endif
                    @else
                    <form style="display: inline-block;" action="{{ route('logout') }}" method="post">
                        @csrf
                        <li>
                            <a href="#" class="btn" onclick="this.closest('form').submit()">
                                <button>{{__('Cerrar Sesion')}}</button>
                            </a>
                        </li>
                    </form>
                @endguest
            </ul>
        </nav>
    </header>
    <br>

    @yield('content')
    
    <br>
    <footer class="footer">
        <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
    </footer>
</body>
</html>