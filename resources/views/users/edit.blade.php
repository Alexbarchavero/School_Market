@extends('layouts.mainlayout')
@section('content')

<div class="edit-container">
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="edit-form">
        @csrf
        @method('put')

        <label class="edit-label">Nombre</label>
        <input name="username" type="text" value="{{ $user->username }}" class="edit-input" required>
        
        <label class="edit-label">Email</label>
        <input name="email" type="text" value="{{ $user->email }}" class="edit-input" required>

        <label class="edit-label">Contraseña</label>
        <input name="password" type="password" class="edit-input" required>

        <button type="submit" class="edit-button">Actualizar</button>
    </form>
</div>

@endsection
