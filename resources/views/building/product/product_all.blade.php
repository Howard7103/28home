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
                        <li   class="active">商品管理</li>
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
                            <strong class="card-title">商品管理</strong>
                        </div>
                        <div class="content mt-3">

                            <div  class=".col-md float-right">
                                <a href="/admin/product_create" style="text-decoration:none;color:white;"><input type="submit" class="btn btn-info btn-sm " value="新增"></a>

                            </div>

                        </div>
                        <div class="table-responsive-md col-md-12 ">
                            <table id="bootstrap-data-table-export" class="table table-striped text-nowrap table-bordered">
                                <thead>
                                <tr class="text-center">
                                    <th>商品編號</th>
                                    <th>賣家名稱</th>
                                    <th>商品名稱</th>
                                    <th>商品價格</th>
                                    <th>商品優惠</th>
                                    <th>商品開始販賣時間</th>
                                    <th>商品結束販賣時間</th>
                                    <th style="text-align:center">  </th>
                                </thead>
                                <tbody>

                                @foreach($Product as $product)
                                    <tr>
                                        <td>{{$product -> product_id}}</td>
                                        <td>{{$product -> vendor -> vendor_name}}</td>
                                        <td>{{$product -> product_name}}</td>
                                        <td>{{$product -> product_price}}</td>
                                        <td>{{$product -> product_discount}}</td>
                                        <td>{{$product -> product_sell_star_date}}</td>
                                        <td>{{$product -> product_sell_end_date}}</td>
                                        <td>
                                            <button type="submit" class="btn btn-success btn-sm"  value="編輯">
                                                <a href='/admin/product/{{$product->product_id}}' style="text-decoration:none;color:white;">編輯</a>
                                            </button>
                                            <button type="submit" class="btn btn-danger btn-sm " value="刪除">
                                                <a href='/admin/product/delete/{{$product->product_id}}' style="text-decoration:none;color:white;">删除</a>
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