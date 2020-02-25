@extends('building.layout')
@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">

        <a href="/admin/create/en"><input type="submit"  id="english" value=" {{trans('message.english')}}"></a>
<a href="/admin/create/TW"><input type="submit"  id="chinese" value=" {{trans('message.chinese')}}"></a>

@if($errors AND count($errors))
    <ul>
        @foreach($errors->all() as $err)
            <li>
                {{$err}}
            </li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/admin/create" >

    {!! csrf_field() !!}

    <div><br>
        {{__('message.user_account')}}
        <input type="text" name="user_account" value="">
    </div><br>

    <div>
        {{trans('message.user_password')}}
        <input type="password" name="user_password" value="">
    </div><br>

    <div>
        {{trans('message.user_password_confirmation')}}
        <input type="password" name="user_password_confirmation" value="">
    </div><br>

    <div>
        {{__('message.user_type')}}
        <select name="roleselect" id="myselect">
            <option name="buyer" selected='selected'>Buyer</option>
            <option name="seller" selected='selected'>Seller</option>
        </select>
    </div><br>
        <button type="submit">{{__('message.register')}}</button>
</form>

@endsection
