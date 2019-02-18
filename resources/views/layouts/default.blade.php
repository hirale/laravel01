<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title') - Twitter APP</title>
</head>
<body>
<div class="container-fluid">
@include('layouts._header')
    <div class="row">
        <div class="container">
            <div class="col">
                @yield('content','Twitter Content')
            </div>
        </div>
    </div>
</div>
@include('layouts._footer')
</body>
</html>
