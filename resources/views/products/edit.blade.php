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
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
<form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('put')
    <label for="name">Product name</label>
    <input type="text" name="name" value="{{ old('name') ?? $product->name }}"><br>
    <label for="name">Product category</label>
    <select type="text" name="category_id">
        @foreach($categories as $category)
            <option
              @if(old('category_id') == $category->id || (!old('category_id') && $product->category->id == $category->id)) selected @endif
            value="{{ $category->id }}"
            >
                {{ $category->name }}</option>
        @endforeach
    </select><br>
    <label for="name">Product price</label>
    <input type="text" name="price" value="{{ $product->price }}"><br>

    <button type="submit">Update product</button>
</form>
<a href="{{ route('products.index') }}">Back</a>
</body>
</html>
