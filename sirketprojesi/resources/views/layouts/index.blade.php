<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('tema/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('tema/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('tema/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('tema/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <title>@yield('title')</title>
</head>

<body>

<div class="dashboard-main-wrapper">

    @include('layouts.header')

    @include('layouts.menu')

    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            @yield('content')
        </div>
    </div>
</div>

<script src="{{asset('tema/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<!-- bootstap bundle js -->
<script src="{{asset('tema/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- slimscroll js -->
<script src="{{asset('tema/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<!-- main js -->
<script src="{{asset('tema/assets/libs/js/main-js.js')}}"></script>
</body>

</html>
