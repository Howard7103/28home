@extends('building.admin.demo')
@section('demo')
<head>
    <style>
        th {
            text-align: center;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
<h1 align = "center">推薦產品組合 <a href='/admin/popular_products_create'><input type="submit" name="create" style="text-align:center" value="Create" ></a></h1>
<table align = "center">
    <tr>
        <th width = "200px">組合編號</th>
        <th width = "200px">組合名字</th>
        <th width = "200px">組合的商品</th>
        <th width = "200px">編輯</th>
    </tr>
    @foreach($Popular_product as $popular_product)

        <tr>
            <td>{{$popular_product -> popular_product_id}}</td>
            <td>{{$popular_product -> popular_product_name}}</td>
            <td>{{$popular_product -> popular_product_productlists}}</td>
            <td>
                <a href='/admin/popular_products/{{$popular_product->popular_product_id}}'><input type="submit" name="update" value="Update" ></a>
                <a href='/admin/popular_products/delete/{{$popular_product->popular_product_id}}'><input type="submit" name="delete" value="Delete" ></a>
            </td>
        </tr>
    @endforeach
</table>
</body>
@stop