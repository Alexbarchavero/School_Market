@extends('layouts.mainlayout')

@section('content')

<div style="margin-top:5rem">
<table>
    <tr>
        <th></th>
    </tr>
    <tr>
        <td></td>
    </tr>
</table>
</div>
@foreach($users as $user)
{{$user->user_name}}
@endforeach

@endsection