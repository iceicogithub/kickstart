<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KickStart | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('style')
    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            height: 100%;
        }

        .hamburger {
            display: none;
        }

        .dash-boxes,
        .dash-box-outer {
            border: 1px solid #7b6f6f;
            border-radius: 20px;
        }

        .dash-box-inner {
            border: 0px;
        }

        @media(max-width:991px) {
            .sidebar {
                display: none;
            }

            .hamburger {
                display: block;
            }

            .margin {
                margin-top: 1rem;
            }

            .navbar-brand {
                display: none;
            }

            .tasks,
            .posts {
                margin-left: 8px !important;
                margin-right: 8px !important;
            }

            .dash-box-inner {
                border: 1px solid #7b6f6f;
                border-radius: 20px;
            }

            .dash-box-outer {
                border: none;
            }
        }

        .row {
            --bs-gutter-x: 0rem;
        }

        .sub-heading {
            color: rgb(26, 121, 180);
        }

        .list-group-item {
            border: none;
        }

        .dropdown-menu {
            border-radius: 0%;
            width: fit-content;
        }

        .links {
            text-decoration: none;
            color: #000;
        }

        .links:hover {
            color: #fff;
        }

        .links-li {
            padding-left: 20px;
        }

        .links-li:hover {
            background-color: rgb(93, 132, 156);
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div>
            @include('includes.student.header')
        </div>
        <div id="mobile-view">
            @include('includes.student.aside')
        </div>
        <div class="row">
            <div class="col-lg-2 bg-light ">
                @include('includes.student.aside')
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12">
                @yield('content')
            </div>
        </div>
    </div>

        
            
            @yield('script')
            <script src="{{ asset('front/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
