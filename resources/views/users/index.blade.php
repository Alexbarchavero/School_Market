@extends('layouts.mainlayout')
@section('content')

<br><br>
<a href="{{ route('users.create') }}">Crear Usuario</a>
<br><br>
<table id="tablausers">
    <tr>
        <th>Id</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                <a href="{{ route('users.destroy', $user->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">Eliminar</a>
                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
    @endforeach
</table>
<br><br>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<br><br>

@endsection