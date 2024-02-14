<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{ asset('front/img/career.png') }}" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Kalam&family=Kanit:wght@300&family=Montserrat:wght@500&family=Protest+Riot&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            background-color: rgb(105, 28, 200);
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form input {
            border: 1px solid rgb(105, 28, 200);
        }

        .box {
            width: 100%;
            max-width: 500px;
            padding: 52px !important;
        }

        .box button {
            background-color: rgb(105, 28, 200);
        }

        .input-group i {
            color: rgb(105, 28, 200);
        }

        .box a {
            color: rgb(105, 28, 200);
        }

        .mainbox {
            display: flex;
            /* width: 60%; */
            align-items: center;
            justify-content: center;

        }

        .content {
            position: absolute;
            top: 50%;
            line-height: 1;
        }

        @media screen and (max-width: 817px) {

            .box2 {
                display: none;
            }

        }

        .error-message {
            color: red;
            font-size: 14px;
            /* Adjust font size as needed */
            margin-top: 4px;
            /* Add some space between the input field and the error message */
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="mainbox">
            <div class="box border bg-white p-4">
                <h1 class="fw-bold py-4 fs-2">Login</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group w-100 mx-auto mb-2 ">
                        <span class="input-group-text"><i class="fa-solid fa-envelope fs-5 px-1"></i></span>
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control py-3 "
                            required>
                        <x-input-error :messages="$errors->get('email')" class="error-message" />
                    </div>
                    <div class="input-group w-100 mx-auto">
                        <span class="input-group-text "><i class="fa-solid fa-lock fs-5 px-1"
                                style="
                            padding-right: .38rem!important;
                        "></i></i></span>
                        <input type="password" id="password" name="password" required placeholder="Enter your password"
                            class="form-control border-1 py-3 ">
                        <x-input-error :messages="$errors->get('password')" class="error-message" />
                    </div>
                    <button type="submit"
                        class="d-block w-100 p-3 mb-3 mt-4 border-0 rounded-3 text-white">Login</button>
                    <div class="text-center"><a class="text-decoration-none" href="{{ url('/') }}">Back</a></a>
                    </div>

                </form>
            </div>
            <div class="box2 position-relative text-center opacity-75">
                <div class="content">
                    <p class="fs-3 fw-bold text-white">Every new Friend is a new adventure.</p>
                    <p class=" fw-bold text-white">let's get connected</p>
                </div>
                <img src="{{asset('admin/img/admin-register.avif')}}"
                    alt="" width="450px" height="444px" class="">

            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
