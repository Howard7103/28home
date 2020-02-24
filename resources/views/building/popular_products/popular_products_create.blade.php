@if($errors AND count($errors))
    <ul>
        @foreach($errors->all() as $err)
            <li>
                {{$err}}
            </li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/admin/popular_products_create">
        {!! csrf_field() !!}
        <div>
            推薦產品組合名字:
            <input type="text" name="popular_product_name" value="">
        </div><br>

        <div>
            推薦產品組合的商品:
            <input type="text" name="popular_product_productlists" value="">
        </div>

        <div>
            <button type="submit">Create</button>
        </div>
    </form>
