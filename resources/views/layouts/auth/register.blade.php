<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{ asset('front/img/career.png') }}" type="image/x-icon">
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
            background-color: rgb(2, 152, 127);
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            width: 100%;
            max-width: 450px;
            /* Adjust the maximum width as needed */
            margin: auto;
            padding: 20px;

        }

        form input {
            border: 1px solid rgb(184, 184, 184);
        }

        .box button {
            background-color: rgb(2, 152, 127);
        }

        .box a {
            color: rgb(2, 152, 127);
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
        <div class="box py-3 border bg-white rounded-3 p-4">
            <h1 class="fw-bold py-4 text-center">Signup</h1>
            <form action="{{ route('student.register') }}" method="post">
                @csrf
                <input type="text" name="email_or_phone" placeholder="Email or Phone"
                    class="d-block w-100 p-3 mb-4 rounded-3">
                @error('email_or_phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="password" name="password" placeholder="Create a Password"
                    class="d-block w-100 p-3 mb-4 rounded-3">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="password" name="password_confirmation" placeholder="Confirm a Password"
                    class="d-block w-100 p-3 mb-4 rounded-3">
                @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <a href="{{ url('/') }}" class="d-block ps-1 py-2 text-decoration-none">Back</a>
                <button type="submit" class="d-block w-100 p-3 mb-4 border-0 rounded-3 text-white">Signup</button>
                <div class="text-center text-black"><span class="">Already have an account?<a
                            href="{{ route('student.login') }}" class="text-decoration-none"> Login </a></span></div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
