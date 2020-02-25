<form action = '/admin/products_use_experience/{{$Product_use_experiences->Product_use_experienceID}}' method="post">
    商品使用經驗編號:<input type = "text" name = "product_use_experiences_id" value="{{$Product_use_experiences->product_use_experiences_id}}"><br/><br/>
    商品編號:<input type = "text" name = "product_id" value="{{$Product_use_experiences->product_id}}"><br/><br/>
    交易訂單紀錄:<input type = "text" name = "transaction_order_id" value="{{$Product_use_experiences->transaction_order_id}}"><br/><br/>
    商品使用經驗評價等級:<input type = "text" name = "product_use_experiences_grade" value="{{$Product_use_experiences->product_use_experiences_grade}}"><br/><br/>
    商品使用經驗內容:<input type = "text" name = "product_use_experiences_content"  value="{{$Product_use_experiences->product_use_experiences_content}}"><br/><br/>
    {{csrf_field()}}
</form>
<a href="/admin/product_use_experience"><button type="submit">Return</button></a>