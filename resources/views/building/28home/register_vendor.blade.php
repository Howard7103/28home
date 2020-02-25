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
        <input type="text" name="vendor_name" placeholder="{{__('message.vendor-name')}}">
    </div><br>

    <div>
        {{__('message.vendor_email')}}
        <input type="email" name="vendor_email" placeholder="{{__('message.vendor-email')}}">
    </div><br>

    <div>
        {{__('message.vendor_address')}}
        <input type="text" name="vendor_address" placeholder="{{__('message.vendor-address')}}">
    </div><br>

    <div>
        {{__('message.vendor_telephone')}}
        <input type="tel" name="vendor_telephone" placeholder="{{__('message.vendor-telephone')}}">
    </div><br>

    <div>
        {{__('message.vendor_bank_account')}}
        <input type="text" name="vendor_bank_account" placeholder="">
    </div><br>

    <div>
        {{__('message.vendor_self_photo')}}
        <input type="file" name="vendor_self_photo" placeholder="">
    </div><br>

    <div>
        {{__('message.vendor_shop_photo')}}
        <input type="file" class="rounded" name="vendor_shop_photo" placeholder="">
    </div><br>

    <div>
        {{__('message.vendor_introduce_content')}}
        <input type="text" name="vendor_introduce_content" placeholder="">
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
