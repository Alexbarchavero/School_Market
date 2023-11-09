@extends('layouts.mainlayout')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión y registrarse</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
</head>
<body>
<div class="wrapper">
    <span class="icon-close">
        <ion-icon name="close"></ion-icon>
    </span>
    <div class="form-box login">
        <h2>Iniciar sesión</h2>
        <form action="#">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" required>
                <label>Correo electrónico</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" required>
                <label>Contraseña</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" required>
                    Recordarme</label>
                <a href="#">¿Olvidaste la contraseña?</a>
            </div>
            <button type="submit" class="bth">Iniciar sesión</button>
            <div class="login-register">
                <p>¿No tienes una cuenta? <a href="#" class="register-link">Registrarse</a></p>
            </div>
        </form>
    </div>

    <div class="form-box register">
        <h2>Registro</h2>
        <form action="#">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="person"></ion-icon>
                </span>
                <input type="text" required>
                <label>Nombre de usuario</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" required>
                <label>Correo electrónico</label>
            </div>
            <div class "input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" required>
                <label>Contraseña</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" required>
                    Acepto los términos y condiciones</label>
            </div>
            <button type="submit" class="bth">Registrarse</button>
            <div class="login-register">
                <p>¿Ya tienes una cuenta? <a href="#" class="login-link">Iniciar sesión</a></p>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('script.js') }}"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

@stop