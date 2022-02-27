<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products create</title>
</head>
<body>

<form action="{{ route('products.store') }}" method="post">
    @csrf
    @method('post')
    <input type="text" name="name"><br>
    <input type="text" name="category_name"><br>
    <input type="text" name="price"><br>

    <button type="submit">Create product</button>
</form>
<a href="{{ route('products.index') }}">Back</a>
</body>
</html>
