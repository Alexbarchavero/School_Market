<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleC.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/vmv.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/aboutus.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleH.css')}}"/>
    <title>SCHOOLMARKET</title>
</head>

<body>
        
    <header id="main-header">
        <a href="#" class="logo">
            <img src="https://media.canva.com/1/image-resize/1/200_200_100_PNG_F/czM6Ly9tZWRpYS1wcml2YXRlLmNhbnZhLmNvbS9yRFU4ay9NQUZ6dHVyRFU4ay8xL3AucG5n?osig=AAAAAAAAAAAAAAAAAAAAAGVBpnCiGmU3UPGbwWpWzEisfu-mtXwGjaD2yOBZ3rAw&exp=1699582767&x-canva-quality=thumbnail&csig=AAAAAAAAAAAAAAAAAAAAACFnUQugeVoTeg6WHg-oJGcPFh-AiWmWUOAcMk7779q_" alt="Logo" class="logo-img" style="width: 120px; height: auto;">
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