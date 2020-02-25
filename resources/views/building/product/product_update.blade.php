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

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>管理者</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li> <a href="/admin" class="active">管理者介面</a></li>
                        <li> <a href="/products" class="active">商品管理</a></li>
                        <li  class="active">商品編輯</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div  class="col-lg-12">
        <div class="card">
            <div style="text-align:center" class="card-header">
                <strong>商品項目編輯</strong>
            </div>
            <div class="card-body card-block">
                <form action="/admin/product/{{$Product-> product_id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-4"><label class=" form-control-label">商品編號</label></div>
                        <div class="col-6  col-md-5">
                            <p class="form-control-static">{{$Product->product_id}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label class=" form-control-label">賣家名稱</label></div>
                        <div class="col-6  col-md-5">
                            <p class="form-control-static">{{$Product-> vendor -> vendor_name}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="disabledSelect" class=" form-control-label">商品類別</label></div>
                        <div class="col-6  col-md-5">
                            <input type="text" name="product_category_id" id="product_category_id" class="form-control" value="{{$Product->product_category_id}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="disabledSelect" class=" form-control-label">商品賣家自家類別</label></div>
                        <div class="col-6  col-md-5">
                            <input type="text" name="product_category_vendor_id" id="product_category_vendor_id" class="form-control" value="{{$Product-> product_category_vendor_id}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="disabledSelect" class=" form-control-label">商品狀態</label></div>
                        <div class="col-6  col-md-5">
                            <select  name="product_status" id="product_status" class="form-control" >
                                <option value="1">販售</option>
                                <option value="0">未販售</option>

                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品名稱</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="product_name" name="product_name" placeholder="特選木" maxlength="15" class="form-control" value="{{$Product->product_name}}"><small class="form-text text-muted"></small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="textarea-input" class=" form-control-label">商品介紹詞</label></div>
                        <div class="col-12 col-md-8"><textarea name="product_introduce_content" id="product_introduce_content" rows="9"  maxlength="500" style="height: 300px;" class="form-control text-left">{{$Product->product_introduce_content}}</textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="file-multiple-input" class=" form-control-label">商品照片</label></div>
                        <div class="col-12 col-md-8"><input type="file" id="product_photo" name="product_photo"  class="form-control-file" value="{{$Product->product_photo}}"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品價格</label></div>
                        <div class="col-6  col-md-2"><input type="text" id="product_price" name="product_price" class="form-control" value="{{$Product->product_price}}"><small class="form-text text-muted" ></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品折扣</label></div>
                        <div class="col-6  col-md-2"><input type="text" id="product_discount" name="product_discount" class="form-control" value="{{$Product->product_discount}}"><small class="form-text text-muted" ></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="datepicker" class=" form-control-label">開始顯示</label></div>
                        <div class="col-6 col-md-2">
                            <input type="text" id="datepicker" name="product_sell_star_date" class="form-control" value="{{$Product->product_sell_star_date}}"><small class="help-block form-text" ></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="datepicker2" class=" form-control-label">結束顯示</label></div>
                        <div class="col-6 col-md-2">
                            <input type="text" id="datepicker2" name="product_sell_end_date" class="form-control" value="{{$Product->product_sell_end_date}}"><small class="help-block form-text"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品販賣數量</label></div>
                        <div class="col-6  col-md-2"><input type="text" id="product_sell_count" name="product_sell_count"  class="form-control" value="{{$Product->product_sell_count}}"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label class=" form-control-label">商品剩餘數量</label></div>
                        <div class="col-6  col-md-2"><input type="text" id="product_now_count" name="product_now_count"  class="form-control" value="{{$Product->product_now_count}}"><small class="form-text text-muted"></small></div>
                        </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label class=" form-control-label">商品運費</label></div>
                        <div class="col-6  col-md-2"><input type="text" id="product_delivery_fee" name="product_delivery_fee"  class="form-control" value="{{$Product->product_delivery_fee}}"><small class="form-text text-muted"></small></div>
                    </div>


    <div style="text-align:center" class="card-header">
        <input type="reset" class="btn btn-warning btn-sm " value="重新">
        <a href=# style="text-decoration:none;color:white;"></a>
{{csrf_field()}}
        <input type="submit" class="btn btn-info btn-sm " value="送出">
        <a href="/admin/product" style="text-decoration:none;color:white;"></a>

        </div>
</form>
    </div>
        </div>
    </div>
    @endsection