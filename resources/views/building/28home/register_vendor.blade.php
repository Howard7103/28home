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

<form method="POST" action="/register_vendor">
    {!! csrf_field() !!}

    <div>
        {{__('message.vendor_name')}}
        <input type="text" name="vendor_name" >
    </div><br>

    <div>
        {{__('message.vendor_email')}}
        <input type="email" name="vendor_email" >
    </div><br>

    <div>
        {{__('message.vendor_address')}}
        <input type="text" name="vendor_address" >
    </div><br>

    <div>
        {{__('message.vendor_telephone')}}
        <input type="tel" name="vendor_telephone" >
    </div><br>

    <div>
        {{__('message.vendor_bank_account')}}
        <input type="text" name="vendor_bank_account">
    </div><br>

    <div>
        {{__('message.vendor_self_photo')}}
        <input type="text" name="vendor_self_photo">
    </div><br>

    <div>
        {{__('message.vendor_shop_photo')}}
        <input type="text" name="vendor_shop_photo">
    </div><br>

    <div>
        {{__('message.vendor_introduce_content')}}
        <input type="text" name="vendor_introduce_content" >
    </div><br>

    <div>
        {{__('message.vendor_product_category')}}
        <input type="text" name="vendor_product_category">
    </div><br>

    <div>
        <button type="submit">{{trans('message.register')}}</button>
        <button type="reset">{{__('message.reset')}}</button>
    </div>
</form>

@endsection