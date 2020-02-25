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
                        <li> <a href="admin" class="active">管理者介面</a></li>
                        <li class="active">賣家管理</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">賣家管理</strong>
                        </div>
                        <div class="content mt-3">

                            <div  class=".col-md float-right">
                                <button type="submit" class="btn btn-primary btn-sm"  value="新增">
                                    <a href="/admin/vendor_create" class="float-right " style="text-decoration:none;color:white;">新增</a>
                                </button>
                                <div class="content mt-3"></div>
                            </div>

                        </div>
                        <div class="table-responsive-md col-md-12">
                            <table id="bootstrap-data-table-export" style="word-break:break-all; table-layout:fixed;" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr class="text-center">

                                    <th>編號</th>
                                    <th>店名</th>
                                    <th>帳號</th>
                                    <th>電話</th>
                                    <th>等級</th>
                                    <th>狀態</th>
                                    <th> </th>
                                </tr>
                                </thead>
                                @foreach($Vendor as $vendor)
                                <tbody>
                                <tr class="text-center">

                                    <td >{{$vendor-> vendor_id}}</td>
                                    <td >{{$vendor-> vendor_name}}</td>
                                    <td >{{$vendor-> user -> user_account }}</td>
                                    <td >{{$vendor-> vendor_telephone}}</td>
                                    <td >
                                        @if($vendor -> vendor_grade == '1')
                                            普通
                                        @elseif($vendor -> vendor_grade == '2')
                                            高級
                                        @endif
                                    </td>
                                    <td >
                                        @if($vendor -> user -> user_status == '1')
                                            正常
                                        @elseif($vendor -> user -> user_status == '2')
                                            封鎖
                                        @endif
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-success btn-sm"  value="編輯">
                                            <a href="/admin/vendor/{{$vendor -> vendor_id}}"  style="text-decoration:none;color:white;">編輯</a>
                                        </button>
                                        <button type="submit" class="btn btn-danger btn-sm " value="刪除">
                                            <a href="/admin/vendor/delete/{{$vendor -> vendor_id}}"  style="text-decoration:none;color:white;">删除</a>
                                        </button>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->



    @endsection