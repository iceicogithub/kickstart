@extends('includes.student.main')
@section('title')
    Profile
@endsection
@section('content')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Student</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Profile</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- profile-section-starts --}}

        <style>
            .profile_img {
                width: 7rem;
            }

            .user_info_sec p {
                line-height: 1;
            }

            .sub-title {
                color: #808080;
            }
        </style>

        <div class="container-fluid bg-white text-dark">

            <div class="d-flex justify-content-between py-4 px-2">
                <div class="d-lg-flex d-md-block user_info_sec">
                    <img src="{{ '/img/profile.jpg' }}" class="profile_img rounded-circle" alt="" />
                    <div class="ps-3">
                        <h3 class="pt-3">Vibhor Patil</h3>
                        <p class="sub-title">Full-Stack Devloper</p>
                    </div>
                </div>
                <div class="pt-3">
                    <button type="button" class="btn" style="background-color: #5d77a8; color:#fff" >Export</button>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-3 pb-2">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body user_info_sec">

                            <h4 class="fw-bold">Personal Details</h4>

                            <div class="my-3">
                                <p for="exampleText" class="form-label fw-bold ">First Name</p>
                                <p for="exampleText" class="form-label sub-title ps-1">Vibhor</p>
                            </div>

                            <div class="mb-3">
                                <p for="exampleText" class="form-label fw-bold ">Last Name</p>
                                <p for="exampleText" class="form-label sub-title ps-1">Patil</p>
                            </div>

                            <div class="mb-3">
                                <p for="exampleText" class="form-label fw-bold ">Gender</p>
                                <p for="exampleText" class="form-label sub-title ps-1">Male</p>
                            </div>

                            <div class="mb-3">
                                <p for="exampleText" class="form-label fw-bold ">Email</p>
                                <p for="exampleText" class="form-label sub-title ps-1">Vibhor@gmail.com</p>
                            </div>

                            <div class="mb-3">
                                <p for="exampleText" class="form-label fw-bold ">Mobile</p>
                                <p for="exampleText" class="form-label sub-title ps-1">+ 91-xxxxxxxx81</p>
                            </div>

                            <div class="mb-3">
                                <p for="exampleText" class="form-label fw-bold ">Address</p>
                                <p for="exampleText" class="form-label sub-title ps-1">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Neque, saepe.</p>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body user_info_sec">
                            <h4 class="fw-bold h5">Class Details</h4>

                            <div class="my-3">
                                <p for="exampleText" class="form-label fw-bold ">College Name</p>
                                <p for="exampleText" class="form-label sub-title ps-1">Harvard University , Cambridge</p>
                            </div>

                            <div class="mb-3">
                                <p for="exampleText" class="form-label fw-bold ">Yaer</p>
                                <p for="exampleText" class="form-label sub-title ps-1">3rd</p>
                            </div>

                            <div class="mb-3">
                                <p for="exampleText" class="form-label fw-bold ">Branch</p>
                                <p for="exampleText" class="form-label sub-title ps-1">Bsc</p>
                            </div>

                            <div class="mb-3">
                                <p for="exampleText" class="form-label fw-bold ">Area of Interest</p>
                                <p for="exampleText" class="form-label sub-title ps-1">Web Devlopment</p>
                            </div>

                            <div class="mb-3">
                                <p for="exampleText" class="form-label fw-bold ">CGPA / %</p>
                                <p for="exampleText" class="form-label sub-title ps-1">9.2</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
