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
                        <li> <a href="admin.html" class="active">管理者介面</a></li>
                        <li> <a href="/news" class="active">消息管理</a></li>
                        <li class="active">消息編輯</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="card">
            <div style="text-align:center"  class="card-header">
                <strong>使用者編輯</strong>
            </div>
            <div class="card-body card-block">
                <form action="/admin/user/{{$User->user_id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">使用者編號</label></div>
                        <div class="col-6 col-md-2"> <p class="form-control-static">{{$User-> user_id}}</p></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">使用者帳號</label></div>
                        <div class="col-6 col-md-2"><input type="text" id="user_account" name="user_account" placeholder="最多20字" maxlength="20" class="form-control" value="{{$User->user_account}}"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select1" class=" form-control-label">使用者型別</label></div>
                        <div class="col-9 col-md-9">
                            <select  name="user_type" id="user_type"  class="form-control col-5 col-md-2" >
                                <option value="1">買家</option>
                                <option value="2">賣家</option>
                                <option value="3">管理者</option>
                            </select>
                        </div></div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select2" class=" form-control-label">使用者狀態</label></div>
                        <div class="col-9 col-md-9">
                            <select  name="user_status" id="user_status"  class="form-control col-5 col-md-2" >
                                <option value="1">正常</option>
                                <option value="2">封鎖</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label"></label></div>
                        <div class="col-6 col-md-2"><input type="hidden" id="user_password" name="user_password" placeholder="最多20字" maxlength="20" class="form-control" value="{{$User->user_password}}"><small class="form-text text-muted"></small></div>
                    </div>


    <div style="text-align:center" class="card-header">
        <a href=# ><input type="reset" style="text-decoration:none; color:white;" class="btn btn-warning btn-sm " value="重新"></a>

{{csrf_field()}}

        <a href="/admin/user" ><input type="submit" style="text-decoration:none;color:white;" class="btn btn-info btn-sm " value="送出"></a>

        </div>
</form>
    </div>
        </div>
    </div>
    @endsection