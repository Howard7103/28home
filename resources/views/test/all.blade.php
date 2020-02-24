<html>
<head>
    <style>
        table
        {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        th {
            background-color: #f7a836;
            color: white;
            text-align: center;
        }
        td{
            background-color: white;
            text-align: center;
        }
    </style>
</head>
<body>
<h1 align = "center">會員資料總表</h1>
<table align = "center">
    <tr>
        <th>編號</th>
        <th>姓名</th>
        <th>地址</th>
        <th>手機</th>
        <th width = "400px">編輯</th>

    </tr>
    <a href="/create"><input type="submit" name="create" value="Create" ></a>
    @foreach($data as $user)

        <tr>
                <td>{{$user -> id}}</td>
            <td>{{$user -> name}}</td>
            <td>{{$user -> address}}</td>
            <td>{{$user -> telephone}}</td>
            <td>
                <a href="/update/{{$user->id}}"><input type="submit" name="update" value="Update" ></a>
                <a href="/delete/{{$user->id}}"><input type="submit" name="delete" value="Delete" ></a>
            </td>

        </tr>
    @endforeach
</table>
</body>
</html>