<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show</title>
</head>
<body>
@foreach($products as $product)
    {{$product->name}}
@endforeach
</body>
</html>