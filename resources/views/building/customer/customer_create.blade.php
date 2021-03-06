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
                        <li> <a href="/customer" class="active">買家管理</a></li>
                        <li  class="active">買家新增</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div  class="col-lg-12">
        <div class="card">
            <div style="text-align:center" class="card-header">
                <strong>買家資料新增</strong>
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
                <form action="/admin/customer_create" method="post" enctype="multipart/form-data" class="form-horizontal text-center">

                    <div class="row form-group text-center">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">使用者編號</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="user_id" name="user_id" placeholder="輸入使用者編號" maxlength="15" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group text-center">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家名字</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="customer_name" name="customer_name" placeholder="輸入買家姓名" maxlength="15" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group text-center">
                        <div class="col col-md-4"><label for="exampleInputEmail1">買家信箱</label></div>
                        <div class="col-6  col-md-5"><input type="email" class="form-control" id="customer_email" name="customer_email" aria-describedby="emailHelp" placeholder="輸入買家信箱"></div>
                        <!--                        id="exampleInputEmail1"-->
                    </div>
                    <div class="row form-group text-center">
                        <div class="col col-md-4"><label for="datepicker" class=" form-control-label">買家生日</label></div>
                        <div class="col-6 col-md-5">
                            <input type="text" id="customer_birthday" name="customer_birthday" placeholder="選擇買家生日"  class="form-control" ><small class="help-block form-text"></small></div>
                    </div>
                    <div class="row form-group text-center">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家地址</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="customer_address" name="customer_address" placeholder="輸入買家地址" maxlength="100" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group text-center">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家電話</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="customer_telephone" name="customer_telephone" placeholder="輸入買家電話" maxlength="10" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group text-center">
                        <div class="col col-md-4"><label for="select-input" class=" form-control-label">買家等級</label></div>
                        <div class="col-6  col-md-5">
                            <select name="customer_grade" id="customer_grade" class="form-control">
                                <option value="1">普通</option>
                                <option value="2">高級</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group text-center">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家銀行帳戶</label></div>
                    <div class="col-6  col-md-5"><input type="text" id="customer_bank_account" name="customer_bank_account" placeholder="輸入買家帳戶帳號" maxlength="15" class="form-control"><small class="form-text text-muted"></small></div>
            </div>
                    <div class="row form-group text-center">
                        <div class="col col-md-4"><label for="file-multiple-input" class=" form-control-label">買家照片檔案位址</label></div>
                        <div class="col-6 col-md-5"><input type="file" id="customer_self_photo" name="customer_self_photo" multiple="" class="form-control-file"></div>
                    </div>

        <div style="text-align:center" class="card-header">
            <button type="reset" class="btn btn-warning btn-sm">
                <a style="text-decoration:none;color:white;" >清除</a>
            </button>
            <button type="submit" class="btn btn-info btn-sm " value="新增">
                <a style="text-decoration:none;color:white;">新增</a>
            </button>
{{csrf_field()}}
        </div>
</form>
    </div>
        </div></div>
    <script>
        $("#customer_birthday").datetimepicker();

    </script>


    @endsection