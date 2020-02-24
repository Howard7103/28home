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

<form method="POST" action="/register_success">
    {!! csrf_field() !!}

    <div>
        賣家店名:
        <input type="text" name="vendor_name" >
    </div><br>

    <div>
        賣家信箱:
        <input type="email" name="vendor_email" >
    </div><br>

    <div>
        賣家地址:
        <input type="text" name="vendor_address" >
    </div><br>

    <div>
        賣家電話:
        <input type="tel" name="vendor_telephone" >
    </div><br>

    <div>
        賣家銀行帳戶:
        <input type="text" name="vendor_bank_account">
    </div><br>

    <div>
        賣家照片檔案位址:
        <input type="text" name="vendor_self_photo">
    </div><br>

    <div>
        賣家商店介紹照片:
        <input type="text" name="vendor_shop_photo">
    </div><br>

    <div>
        賣家介紹詞:
        <input type="text" name="vendor_introduce_content" >
    </div><br>

    <div>
        賣家自家商品分類:
        <input type="text" name="vendor_product_category">
    </div><br>

    <div>
        <button type="submit">Register</button>
    </div>
</form>

@endsection