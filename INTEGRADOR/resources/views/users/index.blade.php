@extends('layouts.mainlayout')

@section('content')

<br><br>
<a href="{{ route('edit') }}">Crear Usuario</a>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Apellido1</th>
        <th>Apellido2</th>
        <th>Avatar</th>
        <th>Acciones</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->last_name1}}</td>
            <td>{{$user->last_name2}}</td>
            <td>{{$user->avatar}}</td>
            <td>
                <a href="{{ route('edit') }}">Editar</a>
                <a href="#">Eliminar</a>
            </td>
        </tr>
    {{$user->user_name}}
    @endforeach
</table>
<br><br>

@endsection