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
</head>

<body>
    <div class="container-fluid main-box bg-light ">
        <div class="container ">
            <a href="#" class="btn btn-outline-primary m-2">Back</a>

            <div class="row ">
                <div class="col-sm-12 col-md-6 col-lg-4 mt-2">

                    {{-- card started --}}
                    <div class="card text-center pt-3 shadow" style="width:auto;">
                        <div>
                            <img src="{{ 'img/profile.jpg' }}" class="card-img-top rounded-circle my-1" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Vibhor Patil</h5>
                            <p class="card-text text pt-2">Full Stack Devloper</p>
                            <p class="card-text text">Bay Area , San Francisco CA</p>
                            <a href="#" class="btn follow-btn ">Follow</a>
                            <a href="#" class="btn btn-outline-primary m-2">Edit</a>
                            <a href="#" class="btn btn-outline-primary ">Message</a>
                        </div>
                    </div>
                </div>
                {{-- card ended --}}

                <div class="col-sm-12 col-md-6 col-lg-8 mt-2">

                    {{-- input fields started --}}

                    <ol class="list-group shadow ">
                        <li class="list-group-item d-flex input-li">
                            <label class="px-4 pt-1 fw-bold">Name</label>
                            {{-- <input type="email" class="form-control text-start mx-2" placeholder="Vibhor Patil"
                                    id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
                            <label class="px-4 pt-1">ExampleName</label>
                        </li>
                        <li class="list-group-item d-flex input-li">
                            <label class="px-4 pt-1 fw-bold">Email</label>
                            {{-- <input type="email" class="form-control text-start mx-2"
                                    placeholder="Vibhorpatil@gmail.com" id="exampleInputEmail1"
                                    aria-describedby="emailHelp"> --}}
                            <label class="px-4 pt-1">ExampleName</label>
                        </li>
                        <li class="list-group-item d-flex input-li">
                            <label class="px-4 pt-1 fw-bold">Phone</label>
                            {{-- <input type="email" class="form-control text-start mx-2" placeholder="+91-7454722901"
                                    id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
                            <label class="px-4 pt-1">ExampleName</label>
                        </li>
                        <li class="list-group-item d-flex input-li">
                            <label class="px-4 pt-1 fw-bold">Mobile</label>
                            {{-- <input type="email" class="form-control text-start mx-2" placeholder="+91-7454722901"
                                    id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
                            <label class="px-4 pt-1">ExampleName</label>
                        </li>
                        <li class="list-group-item d-flex input-li">
                            <label class="px-4 pt-1 fw-bold">Address</label>
                            {{-- <input type="email" class="form-control text-start mx-2" placeholder="lorem ipsum"
                                    id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
                            <label class="px-4 pt-1">ExampleName</label>
                        </li>
                    </ol>

                    {{-- links startd --}}

                </div>

            </div>

            {{-- first row ended --}}

            {{-- sewcond row started --}}

            <div class="row first">

                <div class="col-sm-12 col-md-4 col-lg-4 ">

                        <ol class="list-group mt-2 shadow">
                            <li class="list-group-item d-flex justify-content-between align-items-start links-li">
                                <div class="">
                                    {{-- <div class="fw-bold">Subheading</div> --}}
                                    <i class="fa-solid fa-globe"></i> <label class="h6">Website</label>
                                </div>
                                <span class="">www.iceico.in</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start links-li">
                                <div class="">
                                    {{-- <div class="fw-bold">Subheading</div> --}}
                                    <i class="fa-brands fa-github"></i> <label class="h6">Github</label>
                                </div>
                                <span class="">www.iceico.in</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start links-li">
                                <div class="">
                                    {{-- <div class="fw-bold">Subheading</div> --}}
                                    <i class="fa-brands fa-twitter text-success"></i> <label
                                        class="h6">Twitter</label>
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

                <div class="col-sm-12 col-md-4 col-lg-4 mt-2">

                    <ol class="list-group shadow ">

                        <li class="list-group-item">
                            <p class="h6 fw-bold py-1"><span class="text-success">Assignment</span>
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

                <div class="col-sm-12 col-md-4 col-lg-4 my-2">

                    <ol class="list-group shadow">

                        <li class="list-group-item">
                            <p class="h6 fw-bold py-1"><span class="text-success">Assignment</span>
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
        </div>
    </div>

    <script src="{{ asset('front/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('front/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
