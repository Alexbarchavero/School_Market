@extends('layouts.mainlayout')

@section('content')

<div>
    <form action="route('admin.users.save')" method="POST">
        @method('post')
        @csrf

        <label for="">Usuario</label>
        <input name="" type="text">

        <label for="">Email</label>
        <input name="" type="text">
        
        <label for="">Nombre</label>
        <input name="" type="text">
        
        <label for="">Apellido1</label>
        <input name="" type="text">
        
        <label for="">Apellido2</label>
        <input name="" type="text">
        
        <label for="">Telefono</label>
        <input name="" type="text">

        <label for="">Genero</label>
        <input name="" type="text">

        <label for=""></label>
        <input name="" type="text">

        <label for=""></label>
        <input name="" type="text">
    </form>
</div>

@endsection