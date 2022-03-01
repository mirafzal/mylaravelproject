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
    <label for="name">Product name</label>
    <input type="text" name="name"><br>
    <label for="name">Product category</label>
    <select type="text" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select><br>
    <label for="name">Product price</label>
    <input type="text" name="price"><br>

    <button type="submit">Create product</button>
</form>
<a href="{{ route('products.index') }}">Back</a>
</body>
</html>
