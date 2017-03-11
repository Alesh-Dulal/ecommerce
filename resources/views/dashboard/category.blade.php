<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>
<form name="" method="POST" action="{{url('category')}}">
    {{csrf_field()}}
    Category::<br/>
    <input type="text" name="name" placeholder="category"><br/>
    <select name="status">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select><br/>
    <input type="submit" value="submit">
</form>

@foreach($categories as $category)
    <a href="/product/create/{{$category->id}}">{{$category->name}}</a>
@endforeach

</body>
</html>