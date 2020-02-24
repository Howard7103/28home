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
                        <li class="active">管理者</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xs-6  col-sm-6 col-md-12">

        <input type="submit" onclick="window.location.href='/logout'" value="登出">

        <div class="card">
            <div class="card-header">
                <strong>最新消息 </strong>

            </div>
            <div class="card-body">
                <!--                    <button type="button" class="btn btn-primary">Primary</button>-->
                <!--                    <button type="button" class="btn btn-secondary">Secondary</button>-->
                <!--                    <button type="button" class="btn btn-success">Success</button>-->
                <!--                    <button type="button" class="btn btn-danger">Danger</button>-->
                <!--                    <button type="button" class="btn btn-warning">Warning</button>-->
                <!--                    <button type="button" class="btn btn-info">Info</button>-->
                <!--                    <button type="button" class="btn btn-link">Link</button>-->
            </div>
        </div><!-- /# card -->
    </div>

    <div class="col-xs-6  col-sm-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>會員訊息 </strong>
            </div>
        </div>

    </div>

    <div class="col-xs-3  col-sm-3 col-md-6">
        <div class="card">
            <div class="card-header">
                <strong>廠商訊息 </strong>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <strong>尋找服務訊息 </strong>
            </div>
        </div>

    </div>

    <div class="col-xs-3  col-sm-3 col-md-6">
        <div class="card">
            <div class="card-header">
                <strong>最新商品/熱賣商品 </strong>

            </div>
            <div class="card-body">
                <!--                    <button type="button" class="btn btn-outline-primary">Primary</button>-->
                <!--                    <button type="button" class="btn btn-outline-secondary">Secondary</button>-->
                <!--                    <button type="button" class="btn btn-outline-success">Success</button>-->
                <!--                    <button type="button" class="btn btn-outline-danger">Danger</button>-->
                <!--                    <button type="button" class="btn btn-outline-warning">Warning</button>-->
                <!--                    <button type="button" class="btn btn-outline-info">Info</button>-->
                <!--                    <button type="button" class="btn btn-outline-link">Link</button>-->
            </div>
        </div><!-- /# card -->

        <div class="card">
            <div class="card-header">
                <strong>詢問訊息 </strong>
            </div>
        </div>
    </div>



@endsection