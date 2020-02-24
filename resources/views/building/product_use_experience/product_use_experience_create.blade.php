@if($errors AND count($errors))
    <ul>
        @foreach($errors->all() as $err)
            <li>
                {{$err}}
            </li>
        @endforeach
    </ul>
@endif

    <form method="POST" action="/admin/poplar_use_experience_create">
        {!! csrf_field() !!}

        <div>
            商品使用經驗評價等級:
            <input type="text" name="product_use_experiences_grade" value="">
        </div>

        <div>
            <p style="float:top">商品使用經驗內容:</p>
            <textarea style="width:500px;height:500px;"></textarea>
        </div>


        <div>
            <button type="submit">Create</button>
        </div>
    </form>
