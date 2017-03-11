<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="stylesheet" type="text/css" href="/css/material.min.css">
    <link rel="stylesheet" type="text/css"href="/css/app.css">
    <link rel="stylesheet"type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div class="mdl-card mdl-shadow--4dp" style="margin:40px; margin-left: auto;margin-right: auto; padding:20px;">
    <form action="/product/store" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="name" id="name">
            <label class="mdl-textfield__label" for="name">Product Name</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="description" id="description">
            <label class="mdl-textfield__label" for="description">Product Description</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="number" name="price" id="price">
            <label class="mdl-textfield__label" for="price">Product Price</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="size" id="size">
            <label class="mdl-textfield__label" for="size">Available sizes</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="number" name="quantity" id="quan">
            <label class="mdl-textfield__label" for="quan">Present Quantity</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="status" id="status">
            <label class="mdl-textfield__label" for="status">Product Status</label>
        </div>
        <input type="hidden" name="category_id" value="{{$id}}">
        <input type="file" name="image" >

        <!-- Colored FAB button with ripple -->
        <div style="position: relative;">
            <button id="save" style="position: absolute; right:0px; bottom:0px;"
                    class="mdl-button mdl-js-button
                                mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">add</i>
                <div class="mdl-tooltip mdl-tooltip-top" data-mdl-for="save">
                    Save this product
                </div>
            </button>
        </div>
    </form>
</div>
<script src="/js/app.js"></script>
<script src="/js/material.min.js"></script>
</body>
</html>