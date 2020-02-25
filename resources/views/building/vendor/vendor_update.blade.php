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
                    <h1>管理介面</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li> <a href="/admin" class="active">管理者介面</a></li>
                        <li> <a href="/admin/vendor" class="active">賣家管理</a></li>
                        <li  class="active">賣家資料編輯</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>





    <div  class="col-lg-12">
        <div class="card">
            <div style="text-align:center" class="card-header">
                <strong>賣家資料編輯</strong>
            </div>
            <div class="card-body card-block">
                <form action="/admin/vendor/{{$Vendor -> vendor_id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-4"><label class=" form-control-label">賣家編號</label></div>
                        <div class="col-6  col-md-4">
                            <p class="form-control-static">{{$Vendor -> vendor_id}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label class=" form-control-label">使用者編號</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="user_id" name="user_id" placeholder="輸日使用者編號" maxlength="15" class="form-control" value="{{$Vendor-> user-> user_id}}"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">賣家店名</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_name" name="vendor_name" placeholder="樂成" maxlength="15" class="form-control" value="{{$Vendor->vendor_name}}"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="exampleInputEmail1">賣家信箱</label></div>
                        <div class="col-6  col-md-5"><input type="email" class="form-control" id="vendor_email" name="vendor_email" aria-describedby="emailHelp" value="{{$Vendor->vendor_email}}"></div>

                        <!--                        id="exampleInputEmail1"-->
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">賣家地址</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_address" name="vendor_address"  maxlength="100" value="{{$Vendor-> vendor_address}}" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">賣家電話</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_telephone" name="vendor_telephone"  maxlength="15" value="{{$Vendor-> vendor_telephone}}" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="select-input" class=" form-control-label">賣家等級</label></div>
                        <div class="col-6  col-md-5">
                            <select name="vendor_grade" id="vendor_grade" class="form-control" value="{{$Vendor->vendor_grade}}">
                                <option value="1">普通</option>
                                <option value="2">高級</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">賣家銀行帳戶</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_bank_account" name="vendor_bank_account"  maxlength="19" value="{{$Vendor->vendor_bank_account}}" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="file-multiple-input" class=" form-control-label">賣家照片檔案位址</label></div>
                        <div class="col-12 col-md-8"><input type="file" id="vendor_self_photo" name="vendor_self_photo" multiple="" value="{{$Vendor->vendor_self_photo}}" class="form-control-file"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="file-multiple-input" class=" form-control-label">賣家商店介紹照片</label></div>
                        <div class="col-12 col-md-8"><input type="file" id="vendor_shop_photo" name="vendor_shop_photo" multiple="" value="{{$Vendor->vendor_shop_photo}}"  class="form-control-file"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="textarea-input" class=" form-control-label">賣家介紹詞</label></div>
                        <div class="col-12 col-md-8"><textarea name="vendor_introduce_content" id="vendor_introduce_content" rows="9" placeholder="說說關於你..." maxlength="500" value="" class="form-control">{{$Vendor->vendor_introduce_content}}</textarea></div>
                    </div>
                    <div class="row form-group " >
                        <div class="col-md-4"><label for="select-input" class=" form-control-label">賣家自家商品分類</label></div>
                        <div class="table-responsive-md col-md-8  text-center">
                            <table style="word-break:break-all;word-wrap:break-all;table-layout:fixed;" class="table table-striped table-bordered table-hover dataTables-example " >
                                <thead>
                                <tr>
                                    <td>類別</td>
                                    <td>名稱</td>
                                    <td  style="width:  25%">操作 </td>
                                </tr>
                                </thead>
                                <tbody id="mytable" >
                                <tr id="1st" class="text-center">
                                    <td><select  name="vendor_product_category[]" id="vendor_product_category" class="form-control ">
                                            <option value="1">分類一</option>
                                            <option value="2" selected>分類二</option>
                                            <option value="3">分類三</option>
                                            <option value="4">分類四</option>
                                            <option value="5">分類五</option>
                                        </select></td>
                                    <td><input type="text" id="vendor_product_category_name[]" name="vendor_product_category_name" placeholder="最少1 字元最多15 字元" class="form-control" maxlength="15"><small class="form-text text-muted"></td>
                                    <td>
                                        <input type="button" class="btn btn-success btn-sm " value="新增" onclick="add_new_data()"></td>
                                    <!--                                    <input type="button" class="btn btn-danger btn-sm" value="刪除" onclick="remove_data(this)"></td>-->
                                </tr>
                                    <script>

                                    function add_new_data() {
                                        //先取得目前的row數
                                        var num = document.getElementById("mytable").rows.length;
                                        if (num < 5) {
                                            //建立新的tr 因為是從0開始算 所以目前的row數剛好為目前要增加的第幾個tr
                                            var Tr = document.getElementById("mytable").insertRow(num);
                                            //建立新的td 而Tr.cells.length就是這個tr目前的td數
                                            Td = Tr.insertCell(Tr.cells.length);
                                            //而這個就是要填入td中的innerHTML
                                            Td.innerHTML = ' <select id="vendor_product_category[]" name="vendor_product_category" class="form-control ">' +
                                                '<option value="1">分類一</option>' +
                                                '<option value="2">分類二</option>' +
                                                '<option value="3">分類三</option>' +
                                                '<option value="4">分類四</option>' +
                                                '<option value="5">分類五</option></select>';
                                            //這裡也可以用不同的變數來辨別不同的td (我是用同一個比較省事XD)
                                            Td = Tr.insertCell(Tr.cells.length);
                                            Td.innerHTML = '<input type="text" id="vendor_product_category_name[]" name="vendor_product_category_name" placeholder="最少1 字元最多15 字元" class="form-control" maxlength="15"><small class="form-text text-muted">';
                                            //這樣就好囉 記得td數目要一樣 不然會亂掉~
                                            Td = Tr.insertCell(Tr.cells.length);
                                            Td.innerHTML = '<input type="button" class="btn btn-danger btn-sm "  value="刪除" onclick="deletetr(this)">'
                                        }
                                    }
                                </script>
                                </tbody>
                            </table>
                        </div>
                    </div>

    <div style="text-align:center" class="card-header">
        <button type="reset" class="btn btn-warning btn-sm " value="清除">
            <a style="text-decoration:none;color:white;">清除</a>
        </button>
        <button type="submit" class="btn btn-info btn-sm " value="送出">
            <a style="text-decoration:none;color:white;">送出</a>
        </button>
{{csrf_field()}}
        </div>
</form>
    </div>
        </div>
    </div>


    @endsection