@extends('layouts.mainlayout')
@section('content')

<br>
<div class="index-div-create-btn">
    <a href="{{ route('users.create') }}" class="index-create-button">Crear Usuario</a>
</div>
<br>

<div class="index-container">
    <table class="index-table">
        <thead class="index-thead">
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach($users as $user)
        <tbody class="index-tbody">
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td class="index-actions">
                    <button onclick="window.location='{{ route('users.edit', $user->id) }}'">Editar</button>
                    <button onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">Eliminar</button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <br><br>
    @if(session('success'))
        <div class="index-alert success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="index-alert error">
            {{ session('error') }}
        </div>
    @endif
    <br><br>
</div>

@endsection
