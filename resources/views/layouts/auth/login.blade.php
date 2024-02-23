<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="{{ asset('front/img/career.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kalam&family=Kanit:wght@300&family=Montserrat:wght@500&family=Protest+Riot&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif
        }

        html,
        body {
            width: 100%;
            height: 100%;
        }

        .main {
            background-color: #26C5B5;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form input {
            border: 1px solid rgb(184, 184, 184);
        }

        .box {
            width: 100%;
            max-width: 450px;
            /* Adjust the maximum width as needed */
            margin: auto;
            padding: 20px;
        }

        .box button {
            background-color: #26C5B5;
        }

        .box a {
            color: #26C5B5;
        }

        @media (min-width: 576px) {
            .box {
                padding: 40px;
            }
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="box border bg-white rounded-3 p-4">
            <h1 class="fw-bold py-4 text-center fs-2">Login</h1>
            <form action="{{ route('student.login') }}" method="post">
                @csrf

                <input type="text" name="email_or_mobile" placeholder="Enter Your Email or Phone"
                    class="d-block w-100 p-3 mb-4 rounded-2 border-1">
                @error('email_or_mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <input type="password" name="password" placeholder="Enter Your Password"
                    class="d-block w-100 p-3 mb-4 rounded-2 border-1">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="d-flex justify-content-between">
                    <a href="{{ url('/') }}" class="d-block py-3  text-decoration-none ">Back</a>
                    <a href="" class="d-block py-3  text-decoration-none ">Forgot Password ?</a>
                </div>

                <button class="d-block w-100 p-3 mb-4 border-0 rounded-3 text-white">Login</button>

                @if (session('status'))
                    <span class="text-danger">{{ session('status') }}</span>
                @endif

                <div class="text-center"><span class="">Do You have An Account? <a
                            href="{{ route('student.register') }}" class="text-decoration-none">Signup</a></span></div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
