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
<h1 align = "center">買家</h1>
<table align = "center">
    <tr>
        <th width = "200px">買家名字</th>
        <th width = "200px">買家信箱</th>
        <th width = "200px">買家等級</th>
        <th width = "200px">編輯</th>
    </tr>
    @foreach($Customer as $customer)

        <tr>
            <td>{{$customer -> customer_name}}</td>
            <td>{{$customer -> customer_email}}</td>
            <td>{{$customer -> customer_grade}}</td>
            <td>
                <a href='/admin/customer/{{$customer->customer_id}}'><input type="submit" name="update" value="Update" ></a>
                <a href='/admin/customer/delete/{{$customer->customer_id}}'><input type="submit" name="delete" value="Delete" ></a>
            </td>

        </tr>
    @endforeach
</table>
</body>
@stop