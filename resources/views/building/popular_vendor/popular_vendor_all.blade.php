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
<h1 align = "center">推薦廠商組合 <a href='/admin/popular_vendor_create'><input type="submit" name="create" style="text-align:center" value="Create" ></a></h1>
<table align = "center">
    <tr>
        <th width = "200px">組合編號</th>
        <th width = "200px">組合名字</th>
        <th width = "200px">組合的商品</th>
        <th width = "200px">編輯</th>
    </tr>
    @foreach($Popular_vendor as $popular_vendor)

        <tr>
            <td>{{$popular_vendor -> popular_vendor_id}}</td>
            <td>{{$popular_vendor -> popular_vendor_name}}</td>
            <td>{{$popular_vendor -> popular_vendor_vendorlists}}</td>
            <td>
                <a href='/admin/popular_vendor/{{$popular_vendor->popular_vendor_id}}'><input type="submit" name="update" value="Update" ></a>
                <a href='/admin/popular_vendor/delete/{{$popular_vendor->popular_vendor_id}}'><input type="submit" name="delete" value="Delete" ></a>
            </td>

        </tr>
    @endforeach
</table>
</body>
@stop