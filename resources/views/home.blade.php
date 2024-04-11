@extends('layouts.mainlayout')
@section('content')

<br><br><br>
<br><br><br>

<div>
    <div class="status-home">
        @if (session('status'))
            <div role="alert">{{ session('status') }}</div>
        @endif
        {{ __('Bienvenido!') }}
    </div>
</div>

<br><br><br>
<br><br><br><br>

@endsection