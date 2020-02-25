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
                                <button type="submit" class="btn btn-success btn-sm"  value="新增">
                                    <a href="/customercreate" class="float-right " style="text-decoration:none;color:white;">新增</a>
                                </button>
                            </div>
                        </div>
                        <!--                        <div class=table-responsive">-->
                        <!--                            <table class="table text-nowrap">-->
                        <div class="table-responsive-md col-md-12 ">
                            <table id="bootstrap-data-table-export" class="table table-striped text-nowrap table-bordered">

                                <!--                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">-->
                                <thead>
                                <tr class="text-center">
                                    <th>名字</th>
                                    <th>信箱</th>
                                    <th>生日</th>
                                    <th>電話</th>
                                    <th>等級</th>
                                    <th>銀行帳戶</th>
                                    <th>  </th>



                                </thead>
                                <tbody>
                                <tr class="text-center">
                                    <td onclick="tdclick(this)">東協</td>
                                    <td onclick="tdclick(this)">fy@mail.com</td>
                                    <td onclick="tdclick(this)">2000/12/12</td>
                                    <td onclick="tdclick(this)">0987654323</td>
                                    <td onclick="tdclick(this)">1</td>
                                    <td onclick="tdclick(this)">82230203022</td>
                                    <td>
                                        <button onclick="deletetr(this)" type="submit" class="btn btn-danger btn-sm " value="刪除">删除
                                        </button>
                                        <button type="submit" class="btn btn-success btn-sm"  value="編輯">
                                            <a href="/customerid" style="text-decoration:none;color:white;">編輯</a>
                                        </button>
                                    </td>



                                </tr>
                                <tr class="text-center">

                                    <td onclick="tdclick(this)">西煌</td>
                                    <td onclick="tdclick(this)">fy2@mail.com</td>
                                    <td onclick="tdclick(this)">2002/12/23</td>
                                    <td onclick="tdclick(this)">0987654326</td>
                                    <td onclick="tdclick(this)">2</td>
                                    <td onclick="tdclick(this)">82230203026</td>
                                    <td>
                                        <button onclick="deletetr(this)" type="submit" class="btn btn-danger btn-sm " value="刪除">删除
                                        </button>
                                        <button type="submit" class="btn btn-success btn-sm"  value="編輯">
                                            <a href="/customerid" style="text-decoration:none;color:white;">編輯</a>
                                        </button>
                                    </td>



                                </tr>
                                <tr class="text-center">

                                    <td onclick="tdclick(this)">北伐</td>
                                    <td onclick="tdclick(this)">fy3@mail.com</td>
                                    <td onclick="tdclick(this)">2000/1/1</td>
                                    <td onclick="tdclick(this)">098765439</td>
                                    <td onclick="tdclick(this)">2</td>
                                    <td onclick="tdclick(this)">82230203029</td>
                                    <td>
                                        <button onclick="deletetr(this)" type="submit" class="btn btn-danger btn-sm " value="刪除">删除
                                        </button>
                                        <button type="submit" class="btn btn-success btn-sm"  value="編輯">
                                            <a href="/customerid" style="text-decoration:none;color:white;">編輯</a>
                                        </button>
                                    </td>




                                </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->



    @endsection