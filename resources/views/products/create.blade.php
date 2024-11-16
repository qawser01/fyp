<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <h1>create a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach
        </ul>

        @endif
    </div>
   <form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="name" />
    </div>
    <div>
        <label>quantity</label>
        <input type="text" name="quantity" placeholder="quantity" />
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="price" />
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="description" />
    </div>
    <div>
        <input type="submit" value="Save a product" />
    </div>

   </form>
</body>
</html>