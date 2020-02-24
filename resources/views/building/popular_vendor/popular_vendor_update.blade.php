<form action = '/admin/popular_vendor/{{$Popular_vendor->popular_vendor_id}}' method="post">
    推薦廠商組合名字:<input type = "text" name = "popular_vendor_name" value="{{$Popular_vendor->popular_vendor_name}}"><br/><br/>
    推薦廠商組合的商品:<input type = "text" name = "popular_vendor_vendorlists" value="{{$Popular_vendor->popular_vendor_vendorlists}}"><br/><br/>
    <input type="submit" value="Update">
    {{csrf_field()}}
</form>
<a href="/admin/popular_use_experience"><button type="submit">Return</button></a>