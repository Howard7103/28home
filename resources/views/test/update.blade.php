<form action = "/update/{{$data->id}}" method="post">
    姓名Name:<input type = "text" name = "name" value="{{$data->name}}"><br/><br/>
    地址Address:<input type = "text" name = "address" value="{{$data->address}}"><br/><br/>
    手機Telephone:<input type = "text" name = "telephone" value="{{$data->telephone}}"><br/><br/>
    <input type="submit" value="修改">
    {{csrf_field()}}
</form>