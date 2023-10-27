<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <title>About Us</title>
</head>
<body>
    <div>
        <nav id="Estilo" class="navigation">
        <a href="#">Acerca de</a>
        <a href="#">Productos</a>
        <a href="#">Contacto</a>
        <button class="bthLogin-popup">Iniciar sesión</button>
        </nav><br><br>
    </div>
    
    @yield('content')

    <footer>
        <br><br><p>©Derechos Reservados</p>
    </footer>
</body>
</html>