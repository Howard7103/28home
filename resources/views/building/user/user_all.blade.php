@extends('building.layout')
@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">使用者管理</strong>
                        </div>
                        <div class="content mt-3">

                        </div>
                        <div class="table-responsive-md col-md-12">
                            <table id="bootstrap-data-table-export" style="word-break:break-all;table-layout:fixed;" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>使用者編號</th>
                                    <th>使用者帳號</th>
                                    <th>使用者型別</th>
                                    <th>使用者狀態</th>
                                    <th>   </th>

                                </thead>
                                <tbody>
                                @foreach($User as $user)

                                    <tr>
                                        <td>{{$user -> user_id}}</td>
                                        <td>{{$user -> user_account}}</td>
                                        <td>
                                            @if($user -> user_type == '1')
                                                買家
                                            @elseif($user -> user_type == '2')
                                                賣家
                                            @else($user -> user_type == '3')
                                                管理者
                                            @endif
                                        </td>
                                        <td>
                                            @if($user -> user_status == '1')
                                                正常
                                            @elseif($user -> user_status == '2')
                                                封鎖
                                            @endif
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-success btn-sm"  value="編輯">
                                                <a href='/admin/user/{{$user->user_id}}' style="text-decoration:none;color:white;">編輯</a>
                                            </button>
                                            <button type="submit" class="btn btn-danger btn-sm " value="刪除">
                                                <a href='/admin/user/delete/{{$user->user_id}}' style="text-decoration:none;color:white;">删除</a>
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
    </div>

    @endsection