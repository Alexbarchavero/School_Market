@extends('layouts.mainlayout')
@section('content')

<br><br>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('put')

    <label>Nombre</label>
    <input name="username" type="text" value="{{ $user->username }}" required>
    <br><br>
    
    <label>Email</label>
    <input name="email" type="text" value="{{ $user->email }}" required>
    <br><br>

    <label>Contraseña</label>
    <input name="password" type="password" required>
    <br><br>

    <button type="submit">Actualizar</button>
</form>
<br><br>

@endsection