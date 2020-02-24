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
                        <li class="active">買家管理</li>
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
                            <strong class="card-title">買家管理</strong>
                        </div>
                        <div class="content mt-3">

                            <div  class=".col-md float-right">
                                <button type="submit" class="btn btn-primary btn-sm"  value="新增">
                                    <a href="/admin/customer_create" class="float-right " style="text-decoration:none;color:white;">新增</a>
                                </button>
                                <div class="content mt-3"></div>
                            </div>
                        </div>
                        <div class="table-responsive-md col-md-12 ">
                            <table id="bootstrap-data-table-export" class="table table-striped text-nowrap table-bordered">

                                <thead>
                                <tr class="text-center">
                                    <th>編號</th>
                                    <th>姓名</th>
                                    <th>圖片</th>
                                    <th>帳號</th>
                                    <th>電話</th>
                                    <th>等級</th>
                                    <th>狀態</th>
                                    <th>  </th>
                                </thead>
                                @foreach($Customer as $customer)
                                        <tbody>

                                    <tr class="text-center">
                                        <td>{{$customer -> customer_id}}</td>
                                        <td>{{$customer -> customer_name}}</td>
                                        <td><img src="{{asset($customer -> customer_self_photo)}}"></td>
                                        <td>
                                            {{$customer -> user-> user_account}}
                                        </td>
                                        <td>{{$customer -> customer_telephone}}</td>
                                        <td>
                                            @if($customer -> customer_grade == '1')
                                                普通
                                            @elseif($customer -> customer_grade == '2')
                                                高級
                                            @endif
                                        </td>
                                        <td>
                                            @if($customer -> user -> user_status == '1')
                                                正常
                                            @elseif($customer -> user -> user_status == '2')
                                                封鎖
                                            @endif
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-success btn-sm"  value="編輯">
                                                <a href='/admin/customer/{{$customer->customer_id}}' style="text-decoration:none;color:white;">編輯</a>
                                            </button>
                                            <button type="submit" class="btn btn-danger btn-sm " value="刪除">
                                                <a href='/admin/customer/delete/{{$customer->customer_id}}' style="text-decoration:none;color:white;">删除</a>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->



    @endsection