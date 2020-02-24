<form method="POST" action="/create_save">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="">
    </div>

    <div>
        Address
        <input type="text" name="address" value="">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>