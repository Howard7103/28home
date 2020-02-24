@extends('building.layout')
@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">

        <form method="POST" action="/admin/register_success">

    <div>
        {{__('message.Register Success!')}}
    </div>

    <div>
        <input type="button" onclick="window.location.href='/admin/user'" value="{{__('message.return')}}">
    </div>

</form>

@endsection

