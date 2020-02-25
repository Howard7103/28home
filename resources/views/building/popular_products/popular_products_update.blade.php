<form action = '/admin/popular_products/{{$Popular_product->popular_product_id}}' method="post">
    推薦產品組合名字:<input type = "text" name = "popular_product_name" value="{{$Popular_product->popular_product_name}}"><br/><br/>
    推薦產品組合的商品:<input type = "text" name = "popular_product_productlists" value="{{$Popular_product->popular_product_productlists}}"><br/><br/>
    <input type="submit" value="Update">
    {{csrf_field()}}
</form>