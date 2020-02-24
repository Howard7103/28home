@extends('building.layout')
@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">

@if($errors AND count($errors))
    <ul>
        @foreach($errors->all() as $err)
            <li>
                {{$err}}
            </li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/register_buyer">
    {!! csrf_field() !!}

    <div>
        {{__('message.customer_name')}}
        <input type="text" name="customer_name" >
    </div><br>

    <div>
        {{__('message.customer_email')}}
        <input type="email" name="customer_email" >
    </div><br>

    <div>
        {{__('message.customer_birthday')}}
        <input type="text" name="customer_birthday" >
    </div><br>

    <div>
        {{__('message.customer_address')}}
        <input type="tel" name="customer_address" >
    </div><br>

    <div>
        {{__('message.customer_telephone')}}
        <input type="text" name="customer_telephone">
    </div><br>

    <div>
        {{__('message.customer_bank_account')}}
        <input type="text" name="customer_bank_account">
    </div><br>

    <div>
        {{__('message.customer_self_photo')}}
        <input type="text" name="customer_self_photo">
    </div><br>

    <div>
        <button type="submit">{{trans('message.register')}}</button>
        <button type="reset">{{__('message.reset')}}</button>
    </div>
</form>

@endsection