@extends('layouts.mainlayout')

@section('content')

<div style="margin-top:5rem"></div>
@foreach($users as $user)
{{$user->user_name}}
@endforeach

@endsection