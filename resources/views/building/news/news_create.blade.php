@extends('building.layout')
@section('content')

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
                        <li> <a href="/news" class="active">消息管理</a></li>
                        <li class="active">消息新增</li>


                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div style="text-align:center" class="card-header">
                <strong>消息新增</strong>
            </div>
            <div class="card-body card-block">
                <form action="/admin/news_create" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select1" class=" form-control-label">消息狀態</label></div>
                        <div class="col-9 col-md-9">
                            <select name="news_status" id="news_status"  class="form-control col-5 col-md-2">
                                <option value="1">開啟顯示</option>
                                <option value="2">關閉顯示</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select2" class=" form-control-label">觀看權限</label></div>
                        <div class="col-9 col-md-9">
                            <select name="news_type" id="news_type"  class="form-control col-5 col-md-2">
                                <option value="1">全部人</option>
                                <option value="2">買家</option>
                                <option value="3">賣家</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">消息標題</label></div>
                        <div class="col-9  col-md-6"><input type="text" id="news_title" name="news_title" placeholder="最少1 字元最多20 字元" maxlength="20" class="form-control"><small class="form-text text-muted"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">消息內容</label></div>
                        <div class="col-9 col-md-9"><textarea name="news_content" id="news_content" rows="9" placeholder="最少1 字元最多500 字元..." maxlength="500" class="form-control"></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">消息圖片</label></div>
                        <div class="col-6 col-md-5"><input type="file" name="news_photo" id="news_photo"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="datepicker" class=" form-control-label">開始顯示</label></div>
                        <div class="col-4 col-md-2">
                            <input type="text" id="news_display_start_date" name="news_display_start_date" placeholder="開始顯示日期" class="form-control"><small class="help-block form-text"></small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="datepicker2" class=" form-control-label">結束顯示</label></div>
                        <div class="col-4 col-md-2">
                            <input type="text" id="news_display_end_date" name="news_display_end_date" placeholder="開始顯示日期" class="form-control" ><small class="help-block form-text"></small></div>
                    </div>

        <div style="text-align:center" class="card-header">
            <input type="reset" class="btn btn-warning btn-sm">
            <a href=# style="text-decoration:none;color:white;" >取消</a>
{{csrf_field()}}
            <input type="submit" class="btn btn-info btn-sm " value="送出">
            <a href="/admin/news_create" style="text-decoration:none;color:white;">送出</a>
        </div>
</form>
    </div>
        </div></div>



    @endsection