@extends('layouts.mainlayout')
@section('content')
<form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
        @method('delete')
        @csrf
        <button type="CONFIRMAR">Eliminar usuario</button>
    </form>
</div>