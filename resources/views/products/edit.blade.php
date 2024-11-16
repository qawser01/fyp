<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <h1>edit a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach
        </ul>

        @endif
    </div>
   <form method="post" action="{{route('product.update', ['product' => $product])}}">
    @csrf
    @method('put')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="name" value="{{$product->name}}"/>
    </div>
    <div>
        <label>quantity</label>
        <input type="text" name="quantity" placeholder="quantity" value="{{$product->quantity}}"/>
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="price" value="{{$product->price}}"/>
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="description" value="{{$product->description}}"/>
    </div>
    <div>
        <input type="submit" value="update" />
    </div>

   </form>
</body>
</html>