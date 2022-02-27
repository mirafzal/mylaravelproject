<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product show</title>
</head>
<body>
<a href="{{ route('products.index') }}">Back</a>

<p>{{ $product->name }}</p>
<p>{{ $product->category_id }}</p>
<p>{{ $product->price }}</p>

</body>
</html>
