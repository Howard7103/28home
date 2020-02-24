@extends('building.layout')
@section('content')

        @if($errors AND count($errors))
    <ul>
        @foreach($errors->all() as $err)
            <li>
                {{$err}}
            </li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/admin/create_buyer">
    {!! csrf_field() !!}

    <div>
        買家名字:
        <input type="text" name="customer_name" >
    </div><br>

    <div>
        買家信箱:
        <input type="email" name="customer_email" >
    </div><br>

    <div>
        買家生日:
        <input type="text" name="customer_birthday" >
    </div><br>

    <div>
        買家地址:
        <input type="tel" name="customer_address" >
    </div><br>

    <div>
        買家電話:
        <input type="text" name="customer_telephone">
    </div><br>

    <div>
        買家銀行帳戶:
        <input type="text" name="customer_bank_account">
    </div><br>

    <div>
        買家照片檔案位址:
        <input type="text" name="customer_self_photo">
    </div><br>

    <div>
        <button type="submit">{{__('message.register')}}</button>
        <button type="reset">{{__('message.reset')}}</button>
    </div>
</form>

@endsection