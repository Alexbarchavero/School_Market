<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
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
            <button class="bthLogin-popup">Iniciar sesión</button>
        </nav>
    </header>
        
    @yield('content')
    
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>
</body>
</html>