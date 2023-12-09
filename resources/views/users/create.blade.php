@extends('layouts.mainlayout')
@section('content')

<div class="create-container">
    <form action="{{ route('users.store')}}" method="POST" class="create-form">
        @method('post')
        @csrf

        <label class="create-label">Usuario</label>
        <input name="username" type="text" class="create-input">
        
        <label class="create-label">Email</label>
        <input name="email" type="text" class="create-input">

        <label class="create-label">Contraseña</label>
        <input name="password" type="text" class="create-input">

        <button type="submit" class="create-button">Crear</button>        
    </form>
</div>

@endsection
