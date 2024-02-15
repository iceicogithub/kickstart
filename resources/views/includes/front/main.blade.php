<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KickStart | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('style')
</head>

<body>
    <div class="container-fluid">
        <div>
            @include('includes.front.header')
        </div>
        <div>
            @yield('content')
        </div>
    </div>
    <div class="container-fluid">
        @include('includes.front.footer')
    </div>

    @yield('script')
    <script src="{{ asset('front/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('front/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
