@extends('building.layout')
@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">

        <html>
<head>
</head>
<body>
@if($errors AND count($errors))
    <ul>
        @foreach($errors->all() as $err)
            <li>
                {{$err}}
            </li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/login_save">
    {!! csrf_field() !!}

    <div>
        {{trans('message.user_account')}}
        <input type="text" name="user_account" >
    </div><br>

    <div>
        {{trans('message.user_password')}}
        <input type="password" name="user_password" >
    </div><br>

    <div>
        <button type="submit">{{__('message.login')}}</button>
    </div>
</form>
</body>

</html>
@endsection

