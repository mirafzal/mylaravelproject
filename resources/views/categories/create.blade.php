<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<ul>
@foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
</ul>
<form action="{{ route('categories.store') }}" method="post">
  @csrf
  <input type="text" name="name">
{{--  <select name="categor_id" id="">--}}
{{--    @foreach($categories as $category)--}}
{{--      <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--    @endforeach--}}
{{--  </select>--}}
  <button type="submit">Create</button>
</form>
</body>
</html>
