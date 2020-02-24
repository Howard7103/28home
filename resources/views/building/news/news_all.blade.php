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
                        <li   class="active">消息管理</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">消息管理</strong>
            </div>
            <div class="content mt-3">


            <div  class=".col-md float-right">
                                <a href="/admin/news_create" style="text-decoration:none;color:white;"><input type="submit" class="btn btn-info btn-sm " value="新增"></a>
                            </div>

                        </div>
                        <div class="table-responsive-md col-md-12">
                            <table id="bootstrap-data-table-export" style="word-break:break-all; table-layout:fixed;" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>消息編號</th>
                                    <th>最新標題</th>
                                    <th>標題內容</th>
                                    <th>消息圖片</th>
                                    <th>開始顯示</th>
                                    <th>結束顯示</th>
                                    <th>消息狀態</th>
                                    <th>觀看權限</th>
                                    <th>   </th>

                                </thead>
                                <tbody>
                                @foreach($News as $news)

                                    <tr>
                                        <td>{{$news -> news_id}}</td>
                                        <td>{{$news -> news_title}}</td>
                                        <td>{{$news -> news_content}}</td>
                                        <td>
                                                <img src="{{asset($news->news_photo)}}">
                                        </td>
                                        <td>{{$news -> news_display_start_date}}</td>
                                        <td>{{$news -> news_display_end_date}}</td>
                                        <td>
                                            @if($news -> news_status == '0')
                                                不可以看
                                            @elseif($news -> news_status == '1')
                                                可以看
                                            @endif
                                        </td>
                                        <td>
                                            @if($news -> news_type == '1')
                                                大家
                                            @elseif($news -> news_type == '2')
                                                買家
                                            @else($news -> news_type == '3')
                                                賣家
                                            @endif
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-success btn-sm"  value="編輯">
                                                <a href='/admin/news/{{$news->news_id}}' style="text-decoration:none;color:white;">編輯</a>
                                            </button>
                                            <button type="submit" class="btn btn-danger btn-sm " value="刪除">
                                                <a href='/admin/news/delete/{{$news->news_id}}' style="text-decoration:none;color:white;">删除</a>
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