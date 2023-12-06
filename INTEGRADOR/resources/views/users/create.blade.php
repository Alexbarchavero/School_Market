@extends('layouts.mainlayout')
@section('content')
<br><br><br><br><br><br><br><br><br><br>
<div id="formnewuser">
    <form action="{{ route('users.store')}}" method="POST">
        @method('post')
        @csrf

        <label>Usuario</label>
        <input name="username" type="text">
        <br><br>
        
        <label>Email</label>
        <input name="email" type="text">
        <br></br>

        <label>Contraseña</label>
        <input name="password" type="text">
        <br><br>

        <button type="ACEPTAR">Crear</button>        
    </form>
</div>
<br><br><br><br><br>

@endsection