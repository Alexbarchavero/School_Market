@extends('layouts.mainlayout')
@section('content')
<div>
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @method('put')
        @csrf

        <label for="username">Usuario</label>
        <input name="username" type="text" value="{{ $user->username }}">
        
        <label for="email">Email</label>
        <input name="email" type="text" value="{{ $user->email }}">
        
        <label for="name">Nombre</label>
        <input name="name" type="text" value="{{ $user->name }}">
        
        <label for="apellido1">Apellido1</label>
        <input name="apellido1" type="text" value="{{ $user->apellido1 }}">
        
        <label for="apellido2">Apellido2</label>
        <input name="apellido2" type="text" value="{{ $user->apellido2 }}">
        
        <label for="telefono">Telefono</label>
        <input name="telefono" type="text" value="{{ $user->telefono }}">
        
        <label for="genero">Genero</label>
        <input name="genero" type="text" value="{{ $user->genero }}">

        <label for="rol">Rol</label>
        <input name="rol" type="text" value="{{ $user->rol }}">

        <label for="avatar">Avatar</label>
        <input name="avatar" type="text" value="{{ $user->avatar }}">

        <button type="ACEPTAR">Actualizar</button>
    </form>
</div>

@endsection