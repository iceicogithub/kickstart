<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KickStart | Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            ol > li {
                border: 0!important;
            }
        </style>
</head>

<body>
    <div class="container-fluid main-box bg-light ">
        <div class="container ">
            <a href="{{ url('/') }}" class="btn btn-seagreen m-2">Back</a>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 p-1 ">
                    <div class="card text-center pt-3 shadow border-0" style="width:auto;min-height: 100%;">
                        <div>
                            <img src="http://127.0.0.1:8000/front/img/user.png" class="card-img-top rounded-circle my-1"
                                alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Vibhor Patil</h5>
                            <p class="card-text text pt-2">Full Stack Devloper</p>
                            <p class="card-text text">Bay Area , San Francisco CA</p>
                        </div>
                    </div>
                </div>
                <div class= "col-lg-8 col-md-6 col-sm-12 p-1">
                    <ol class="list-group shadow " style="min-height: 100%;">
                        <li class="list-group-item d-flex input-li">
                            <label class="px-4 pt-1 fw-bold">Name</label>

                            <label class="px-4 pt-1">ExampleName</label>
                        </li>
                        <li class="list-group-item d-flex input-li">
                            <label class="px-4 pt-1 fw-bold">Email</label>

                            <label class="px-4 pt-1">ExampleName</label>
                        </li>
                        <li class="list-group-item d-flex input-li">
                            <label class="px-4 pt-1 fw-bold">Phone</label>

                            <label class="px-4 pt-1">ExampleName</label>
                        </li>
                        <li class="list-group-item d-flex input-li">
                            <label class="px-4 pt-1 fw-bold">Mobile</label>

                            <label class="px-4 pt-1">ExampleName</label>
                        </li>
                        <li class="list-group-item d-flex input-li">
                            <label class="px-4 pt-1 fw-bold">Address</label>

                            <label class="px-4 pt-1">ExampleName</label>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row first mt-2">

                <div class="col-sm-12 col-md-4 col-lg-4 p-1">
                    <ol class="list-group shadow bg-white p-3" style="min-height: 100%;">
                        <p class="fw-bold h6 m-0 text-dark"><span class="color-seegreen">Social </span>Accounts</p>
                        <li class="list-group-item d-flex justify-content-between align-items-start links-li">
                            <div class="">
                                <i class="fa-solid fa-globe"></i> <label class="h6">Website</label>
                            </div>
                            <span class="">www.iceico.in</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start links-li">
                            <div class="">
                                <i class="fa-brands fa-github"></i> <label class="h6">Github</label>
                            </div>
                            <span class="">www.iceico.in</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start links-li">
                            <div class="">
                                <i class="fa-brands fa-twitter text-success"></i> <label class="h6">Twitter</label>
                            </div>
                            <span class="">www.iceico.in</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start links-li">
                            <div class="">
                                {{-- <div class="fw-bold">Subheading</div> --}}
                                <i class="fa-brands fa-instagram text-danger"></i> <label
                                    class="h6">Instagram</label>
                            </div>
                            <span class="">www.iceico.in</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start links-li">
                            <div class="">
                                {{-- <div class="fw-bold">Subheading</div> --}}
                                <i class="fa-brands fa-facebook text-primary"></i> <label
                                    class="h6">Instagram</label>
                            </div>
                            <span class="">www.iceico.in</span>
                        </li>

                    </ol>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 p-1">

                    <ol class="list-group shadow " style="min-height: 100%;">

                        <li class="list-group-item">
                            <p class="h6 fw-bold py-1"><span class="color-seegreen">Assignment</span>
                                Project
                                Status</p>

                            <label>Web Design</label>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                    style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <label>Web Design</label>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                    style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <label>Web Design</label>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                    style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <label>Web Design</label>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                    style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <label>Web Design</label>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                    style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>


                    </ol>

                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 p-1">

                    <ol class="list-group shadow" style="min-height: 100%;">

                        <li class="list-group-item">
                            <p class="h6 fw-bold py-1"><span class="color-seegreen">Assignment</span>
                                Project
                                Status</p>

                            <label>Web Design</label>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                    style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <label>Web Design</label>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                    style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <label>Web Design</label>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                    style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <label>Web Design</label>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                    style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <label>Web Design</label>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high"
                                    style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>


                    </ol>

                </div>

            </div>

            <form method="POST" action="{{ route('student.logout') }}">
                @csrf
                <button type="submit" class="btn btn-seagreen m-2">Logout</button>
            </form>

        </div>
    </div>

    <script src="{{ asset('front/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('front/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
