<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products index</title>
</head>
<body>
<h2><a href="{{ route('products.create') }}">Create a product</a></h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Product name</th>
        <th>Product category ID</th>
        <th>Product price</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>

        @foreach($products as $product )
    <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category_id }}</td>
            <td>{{ $product->price }}</td>
            <td><a href="{{ route('products.show', $product->id) }}">Show</a></td>
            <td><a href="{{ route('products.edit', $product->id) }}">Edit</a></td>
            <td><form action="{{ route('products.delete', $product->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </td>
    </tr>
        @endforeach


</table>
<h3><a href="{{ route('categories.index') }}">Categories</a></h3>


</body>
</html>

