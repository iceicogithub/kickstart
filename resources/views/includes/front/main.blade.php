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
    @yield('style')
</head>

<body>
    <div class="container">
        <div>
            @include('includes.front.header');
        </div>
        <div>
            @yield('content')
        </div>
        <div>
            @include('includes.front.footer');
        </div>
    </div>

    @yield('script')
    <script src="{{ asset('front/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('front/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
