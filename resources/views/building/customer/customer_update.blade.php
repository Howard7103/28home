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
                        <li> <a href="/admin/customer" class="active">買家管理</a></li>
                        <li  class="active">{{$Customer -> customer_name}}</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div  class="col-lg-2 "> </div>

    <div  class="col-lg-12 ">
        <div class="card">
            <div style="text-align:center" class="card-header">
                <strong>{{$Customer -> customer_name}}</strong>
            </div>
            <div class="card-body card-block">
                <form action="/admin/customer/{{$Customer -> customer_id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-4"><label class=" form-control-label">買家編號</label></div>
                        <div class="col-6  col-md-4">
                            <p class="form-control-static">{{$Customer-> customer_id}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">使用者編號</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="customer_id" name="customer_id" placeholder="輸入使用者編號" class="form-control" maxlength="10" value="{{$Customer -> user -> user_id}}"><small class="form-text text-muted">
                            </small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家姓名</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="customer_name" name="customer_name" placeholder="輸入姓名" class="form-control" maxlength="15" value="{{$Customer -> customer_name}}"><small class="form-text text-muted">
                            </small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="exampleInputEmail1">買家信箱</label></div>
                        <div class="col-6  col-md-5"><input type="email" id="customer_email" name="customer_email" aria-describedby="emailHelp"  class="form-control"placeholder="輸入信箱"  value="{{$Customer -> customer_email}}"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="datepicker" class=" form-control-label">買家生日</label></div>
                        <div class="col-6 col-md-5">
                            <input type="text" id="customer_birthday" name="customer_birthday" placeholder="選擇生日日期"  class="form-control" value="{{$Customer -> customer_birthday}}"><small class="help-block form-text"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家地址</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="customer_address" name="customer_address" placeholder="輸入地址" class="form-control" maxlength="100" value="{{$Customer -> customer_address}}"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家電話</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="customer_telephone" name="customer_telephone" placeholder="輸入電話" class="form-control" maxlength="10" value="{{$Customer -> customer_telephone}}"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家等級</label></div>
                        <div class="col-6  col-md-5">
                            <select name="customer_grade" id="customer_grade" class="form-control">
                                <option value="1">普通</option>
                                <option value="2">高級</option>
                            </select>
                        </div>

                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家銀行帳戶</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="customer_bank_account" name="customer_bank_account" placeholder="輸入銀行帳戶" class="form-control" maxlength="15" value="{{$Customer -> customer_bank_account}}"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="file-multiple-input" class=" form-control-label">買家照片檔案位址</label></div>
                        <div class="col-12 col-md-8"><input type="file" id="customer_self_photo" name="customer_self_photo" multiple="" class="form-control-file" value="{{$Customer -> customer_self_photo}}"></div>
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
    <script>
        $("#customer_birthday").datetimepicker();

    </script>
    @endsection