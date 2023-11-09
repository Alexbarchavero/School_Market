<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleC.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/vmv.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/aboutus.css')}}">
    <title>SCHOOLMARKET</title>
</head>

<body>
        
    <header id="main-header">
        <a href="#" class="logo">
            <img src="{{ asset('public/img/LogoP.png') }}" alt="Logo" class="logo-img" style="width: 120px; height: auto;">
        </a>
        <nav class="navigation">
            <a href="#">Acerca de</a>
            <a href="#">Productos</a>
            <a href="#">Contacto</a>
            <button class="bthLogin-popup">Iniciar sesión</button>
        </nav>
    </header>
        
    @yield('content')
    
    <footer>
        <p>©Derechos Reservados</p>
    </footer>
</body>
</html>