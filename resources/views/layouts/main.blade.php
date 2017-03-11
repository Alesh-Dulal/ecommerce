<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ourshop | @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/material.min.css">
    <link rel="stylesheet" type="text/css"href="/css/app.css">
    <link rel="stylesheet"type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    @section('nav-title','Our Shop')
    @include('includes.navbar')
    <main class="mdl-layout__content">
        <div class="page-content">
            <!-- Your content goes here -->
            @yield('content')
        </div>
    </main>
</div>
<script src="/js/app.js"></script>
<script src="/js/material.min.js"></script>
</body>
</html>