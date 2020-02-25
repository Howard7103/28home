@extends('building.layout')
@section('content')

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
                        <li  class="active">商品新增</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div  class="col-lg-12">
        <div class="card">
            <div style="text-align:center" class="card-header">
                <strong>商品項目新增</strong>
            </div>
            <div class="card-body card-block">
                <form action="/admin/product_create" method="post" enctype="multipart/form-data" class="form-horizontal
">
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">賣家編號</label></div>
                        <div class="col-6  col-md-5">
                            <input type="text" id="vendor_id" name="vendor_id"  maxlength="15" class="form-control" ><small class="form-text text-muted"></small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品類別</label></div>
                        <div class="col-6  col-md-5">
                            <select name="product_category_id" id="product_category_id" class="form-control">
                                <option value="1">木材 001</option>
                                <option value="2">精選木材 002</option>
                                <option value="3">精選檜木 003</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="disabledSelect" class=" form-control-label">商品賣家自家類別</label></div>
                        <div class="col-6  col-md-5">
                            <select name="product_category_vendor_id" id="product_category_vendor_id" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="disabledSelect" class=" form-control-label">商品狀態</label></div>
                        <div class="col-6  col-md-5">
                            <select name="product_status" id="product_status" class="form-control">
                                <option value="1">上架</option>
                                <option value="0">下架</option>

                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品名稱</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="product_name" name="product_name" placeholder="最少1 字元最多15 字元" maxlength="15" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="textarea-input" class=" form-control-label">商品介紹詞</label></div>
                        <div class="col-12 col-md-8"><textarea name="product_introduce_content" id="product_introduce_content" rows="9" placeholder="最少1 字元最多500 字元..." maxlength="500" class="form-control"></textarea></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="file-multiple-input" class=" form-control-label">商品照片</label></div>
                        <div class="col-12 col-md-8"><input type="file" id="product_photo" name="product_photo" multiple="" class="form-control-file"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品價格</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="product_price" name="product_price" placeholder="最多7 字元" maxlength="7" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品折扣</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="product_discount" name="product_discount" placeholder="最多7 字元" maxlength="7" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="datepicker" class=" form-control-label">開始顯示</label></div>
                        <div class="col-6  col-md-5">
                            <input type="text" id="product_sell_star_date" name="product_sell_star_date" placeholder="開始顯示日期" class="form-control" ><small class="help-block form-text"></small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="datepicker2" class=" form-control-label">結束顯示</label></div>
                        <div class="col-6 col-md-5">
                            <input type="text" id="product_sell_end_date" name="product_sell_end_date" placeholder="結束顯示日期" class="form-control"><small class="help-block form-text"></small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品販賣數量</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="product_sell_count" name="product_sell_count" placeholder="N->無限制 最多4 字元" maxlength="4" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品剩餘數量</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="product_now_count" name="product_now_count" placeholder="最多4 字元" maxlength="4" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">商品運費</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="product_delivery_fee" name="product_delivery_fee" placeholder="最多6 字元" maxlength="4" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>


        <div style="text-align:center" class="card-header">
            <input type="reset" class="btn btn-warning btn-sm">
            <a href=# style="text-decoration:none;color:white;" ></a>

{{csrf_field()}}

            <input type="submit" class="btn btn-info btn-sm " value="送出">
            <a href="/admin/products" style="text-decoration:none;color:white;"></a>


        </div>
</form>
    </div>
        </div></div>



    @endsection