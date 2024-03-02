@extends('includes.student.main')
@section('content')
    <div class="main-div py-2 px-2">

        <div class="my-2 mx-3">
            <h3 class="fw-bold ">Welcome Vibhor .....!</h3>
            <label class="sub-heading">STUDENT ID : 7XNIA738BCJA</label>
        </div>

        <div class="row  py-lg-4 py-md-3 ">

            <div class="col-md-12 col-lg-7 sec">

                <div class="row px-2">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="p-2 dash-boxes m-1">
                            <div class="d-flex justify-content-between py-2 px-2">
                                <label class="">Total Points</label>
                                <i class="fa-solid fa-list-check px-2 text-warning"></i>
                            </div>
                            <h3 class="py-2 px-2 text-success">10/60</h3>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="p-2 dash-boxes m-1">
                            <div class="d-flex justify-content-between py-2 px-2">
                                <label class="">Total Points</label>
                                <i class="fa-solid fa-list-check px-2 text-warning"></i>
                            </div>
                            <h3 class="py-2 px-2 text-success">10/60</h3>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="p-2 dash-boxes m-1">
                            <div class="d-flex justify-content-between py-2 px-2">
                                <label class="">Total Points</label>
                                <i class="fa-solid fa-list-check px-2 text-warning"></i>
                            </div>
                            <h3 class="py-2 px-2 text-success">10/60</h3>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="dash-boxes py-3 mx-1">
                            <div class="d-flex justify-content-between px-3">
                                <label class="fw-bold text-success">Course Progress</label>
                                <label class=""><i class="fa-solid fa-arrow-trend-up text-warning"></i></label>
                            </div>
                            <div class="progress my-3 mx-3">
                                <div class="progress-bar bg-success" role="progressbar" aria-label="Basic example"
                                    style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="70">
                                </div>
                            </div>
                            <label class="fw-bold px-3 text-success">Spiritual Maturity & Understanding Your
                                Ministry
                                Calling</label>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12 col-lg-5 margin dash-box-outer">
                <div class="p-2  dash-box-inner tasks">
                    <div class="d-flex justify-content-between px-3 py-2">
                        <label class="fw-bold">Tasks</label>
                        <label class=""><i class="fa-solid fa-business-time text-danger"></i></label>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center text-success">
                            A list item
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center text-success">
                            A second list item
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center text-success">
                            A third list item
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row row-main">

            <div class="col-md-12 col-lg-7 ">
                <div class="dash-boxes mx-2 px-2 py-2 mx-1 margin">
                    <div class="d-flex justify-content-between">
                        <label class="fw-bold px-2 py-3">Posts</label>
                        <label class="py-3"><i class="fa-solid fa-signs-post px-2 text-warning"></i></label>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="p-2 text-success">Spiritual Maturity & Understanding Your Ministry
                            Calling</label>
                        <label class="p-2 sub-heading">10 min</label>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="p-2 text-success">Our Values & You</label>
                        <label class="p-2 sub-heading">2 min</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-5 margin dash-box-outer">
                <div class="p-3 dash-box-inner posts">
                    <div class="d-flex justify-content-between py-2">
                        <label class="fw-bold">Documents Uploaded</label>
                        <label class=""><i class="fa-solid fa-book px-2"></i></label>
                    </div>

                    <div class="d-flex justify-content-between py-2">
                        <label class="sub-heading">None</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection