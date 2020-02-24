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
                        <li> <a href="/admin/vendor" class="active">賣家管理</a></li>
                        <li  class="active"></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>




    <div  class="col-lg-12">
        <div class="card">
            <div style="text-align:center" class="card-header">
                <strong>賣家資料新增</strong>
            </div>
            <div class="card-body card-block">
                @if($errors AND count($errors))
                    <ul>
                        @foreach($errors->all() as $err)
                            <li>
                                {{$err}}
                            </li>
                        @endforeach
                    </ul>
                @endif
                <form action="{{asset('/admin/vendor_create')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">使用者編號</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="user_id" name="user_id" placeholder="最少1 字元最多15 字元" maxlength="15" value="" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">賣家店名</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_name" name="vendor_name" placeholder="最少1 字元最多15 字元" maxlength="15" value="" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="exampleInputEmail1">賣家信箱</label></div>
                        <div class="col-6  col-md-5"><input type="email" class="form-control" id="vendor_email" name="vendor_email" aria-describedby="emailHelp" placeholder="Enter email" value="" ></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">賣家地址</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_address" name="vendor_address" placeholder="最多100字元" maxlength="100" value="" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">賣家電話</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_telephone" name="vendor_telephone" placeholder="最多10字元" maxlength="10" value="" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="select-input" class=" form-control-label">賣家等級</label></div>
                        <div class="col-6  col-md-5">
                            <select name="vendor_grade" id="vendor_grade" class="form-control">
                                <option value="1">普通</option>
                                <option value="2">高級</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">賣家銀行帳戶</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_bank_account" name="vendor_bank_account" placeholder="最多15字元" value="" maxlength="15"  class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="file-multiple-input" class=" form-control-label">賣家照片檔案位址</label></div>
                        <div class="col-12 col-md-8"><input type="file" id="vendor_self_photo" name="vendor_self_photo" multiple="" value="" class="form-control-file"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="file-multiple-input" class=" form-control-label">賣家商店介紹照片</label></div>
                        <div class="col-12 col-md-8"><input type="file" id="vendor_shop_photo" name="vendor_shop_photo" multiple="" value="" class="form-control-file"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="textarea-input" class=" form-control-label">賣家介紹詞</label></div>
                        <div class="col-12 col-md-8"><textarea name="vendor_introduce_content" id="vendor_introduce_content" rows="9" placeholder="最少1 字元最多500 字元..." maxlength="500" value="" class="form-control"></textarea></div>
                    </div>
                    <div class="row form-group " >
                        <div class="col-md-4"><label for="select-input" class=" form-control-label">賣家自家商品分類</label></div>
                        <div class="table-responsive-md col-md-8  text-center">
                            <table  style="word-break:break-all; word-wrap:break-all;table-layout:fixed;" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <td>類別</td>
                                    <td>名稱</td>
                                    <td  style="width:  15%">操作 </td>
                                </tr>
                                </thead>
                                <tbody id="mytable">
                                <tr id="1st">
                                    <td><select id="vendor_product_category[]" name="vendor_product_category" class="form-control ">
                                            <option value="1">分類一</option>
                                            <option value="2">分類二</option>
                                            <option value="3">分類三</option>
                                            <option value="4">分類四</option>
                                            <option value="5">分類五</option>
                                        </select></td>
                                    <td><input type="text" id="vendor_product_category_name[]" name="vendor_product_category_name" placeholder="最少1 字元最多15 字元" class="form-control" maxlength="15"><small class="form-text text-muted"></td>
                                    <td>
                                        <input type="button" class="btn btn-success btn-sm " value="新增" onclick="add_new_data()">
                                        <!--                                    <input type="button" class="btn btn-danger btn-sm" value="刪除" onclick="remove_data(this)"></td>-->
                                </tr>
                                <script>
                                    function add_new_data() {
                                        var num = document.getElementById("mytable").rows.length;
                                        if (num < 5) {
                                            var Tr = document.getElementById("mytable").insertRow(num);
                                            Td = Tr.insertCell(Tr.cells.length);
                                            Td.innerHTML = ' <select id="vendor_product_category[]" name="vendor_product_category" class="form-control ">' +
                                                '<option value="1">分類一</option>' +
                                                '<option value="2">分類二</option>' +
                                                '<option value="3">分類三</option>' +
                                                '<option value="4">分類四</option>' +
                                                '<option value="5">分類五</option></select>';
                                            Td = Tr.insertCell(Tr.cells.length);
                                            Td.innerHTML = '<input type="text" id="vendor_product_category_name[]" name="vendor_product_category_name" placeholder="最少1 字元最多15 字元" class="form-control" maxlength="15"><small class="form-text text-muted">';
                                            Td = Tr.insertCell(Tr.cells.length);
                                            Td.innerHTML = '<input type="button" class="tn btn-danger btn-sm "  value="刪除" onclick="deletetr(this)">'
                                        }
                                    }
                                </script>
                                </tbody>
                            </table>
                        </div>
                    </div>

        <div style="text-align:center" class="card-header">
            <button type="reset" class="btn btn-warning btn-sm">
                <a style="text-decoration:none;color:white;" >清除</a>
            </button>
            <button type="submit" class="btn btn-info btn-sm " value="送出">
                <a style="text-decoration:none;color:white;">送出</a>
            </button>
            {{csrf_field()}}
        </div>
</form>
    </div>
        </div></div>





    @endsection