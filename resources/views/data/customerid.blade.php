@extends('admin.layout')

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
                        <li  class="active">買家編輯</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div  class="col-lg-2 "> </div>

    <div  class="col-lg-12 ">
        <div class="card">
            <div style="text-align:center" class="card-header">
                <strong>買家資料編輯</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-4"><label class=" form-control-label">買家編號</label></div>
                        <div class="col-6  col-md-4">
                            <p class="form-control-static">001</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label class=" form-control-label">使用者帳號</label></div>
                        <div class="col-6  col-md-4">
                            <p class="form-control-static">FYadmin</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家店名</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_name" name="vendor_name" placeholder="最少1 字元最多15 字元" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="exampleInputEmail1">買家信箱</label></div>
                        <div class="col-6  col-md-5"><input type="email" class="form-control" id="vendor_email" name="vendor_email" aria-describedby="emailHelp" placeholder="Enter email"></div>

                        <!--                        id="exampleInputEmail1"-->
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家地址</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_address" name="vendor_address" placeholder="最多100字元" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家電話</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_telephone" name="vendor_telephone" placeholder="最多15字元" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家等級</label></div>
                        <div class="col-6  col-md-5">
                            <select name="vendor_grade" id="vendor_grade" class="form-control">
                                <option value="1">普通</option>
                                <option value="2">高級</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="text-input" class=" form-control-label">買家銀行帳戶</label></div>
                        <div class="col-6  col-md-5"><input type="text" id="vendor_bank_account" name="vendor_bank_account" placeholder="最多19字元" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="file-multiple-input" class=" form-control-label">買家照片檔案位址</label></div>
                        <div class="col-12 col-md-8"><input type="file" id="vendor_self_photo" name="vendor_self_photo" multiple="" class="form-control-file"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-4"><label for="datepicker" class=" form-control-label">新增消息時間</label></div>
                        <div class="col-6  col-md-5">
                            <label id="customer_create_date" name="customer_display_start_date1" placeholder="2018/08/08 21:30" class="form-control-label "></label>2018/08/08 21:30</div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4"><label for="datepicker2" class=" form-control-label">更新消息時間</label></div>
                        <div class="col-6  col-md-5">
                            <label id="customer_edit_date" name="customer_display_end_date1" placeholder="2018/08/08 21:30" class="form-control-label "></label>2018/08/08 21:30</div>
                        <!--                            <input type="text" id="customer_edit_date" name="customer_display_end_date" placeholder="2018/08/08 21:30" class="form-control" ><small class="help-block form-text"></small></div>-->
                    </div>





    <div style="text-align:center" class="card-header">
        <button type="submit" class="btn btn-info btn-sm " value="送出">
            <a href="/customer" style="text-decoration:none;color:white;">送出</a>
        </button>
{{csrf_field()}}
        <button type="reset" class="btn btn-warning btn-sm " value="重新">
            <a href=# style="text-decoration:none;color:white;">重新</a>
        </button>
        <button type="submit" class="btn btn-danger btn-sm " value="刪除">
            <a href="/customer" style="text-decoration:none;color:white;" >刪除</a>
        </button>
        </div>
</form>
    </div>
        </div>
    </div>
    @endsection