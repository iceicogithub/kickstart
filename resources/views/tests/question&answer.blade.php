@extends('includes.student.main')
@section('title')
    Question & Answers
@endsection

@section('style')
    <style>
        .nav-link {
            color: #5d77a8;
            font-size: medium;
            font-weight: bold;
            line-height: 2;
            z-index: 1;
        }

        .nav-link:hover {
            margin-left: 5px;
            transition: all 0.5s ease-in-out;
            color: #26c5b5;
            text-decoration: underline;
        }
        .main_content .main_content_iner.overly_inner::before {
            height: 110px;
        }
    </style>
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
                                <a href="javascript:void(0);">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Arithmetic Aptitude</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Questions & Answers</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- section-starts --}}

    <div class="row mt-3">

        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12">
            <div class="card shadow mb-3">
                <div class="card-body">
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">

            <div class="card shadow mb-3">
                <div class="card-body">

                    <div class="text-center bg_purple_color mb-3">
                        <h4 class="text-light py-2">Quick Links</h4>
                    </div>

                    <div class="mb-3">
                        <h5 class="main-title fw-bold">General Aptitude</h5>
                        <div class="quick_links">
                            <div class="card-icon mdi-chart-donut-variant">
                                <ul id="list">
                                    <li><a href="" class="nav-link">Online Aptitude Test</a></li>
                                    <li><a href="" class="nav-link">Data Interpretation Test</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5 class="main-title fw-bold">Verbal and Reasoning</h5>
                        <div class="">
                            <div class="card-icon mdi-chart-donut-variant">
                                <ul id="list">
                                    <li><a href="" class="nav-link">Verbal Ability</a></li>
                                    <li><a href="" class="nav-link">Logical Reasoning</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5 class="main-title fw-bold">Current Affairs & GK</h5>
                        <div class="">
                            <div class="card-icon mdi-chart-donut-variant">
                                <ul id="list">
                                    <li><a href="" class="nav-link">Current Affairs</a></li>
                                    <li><a href="" class="nav-link">Read more.....</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5 class="main-title fw-bold">Programming</h5>
                        <div class="">
                            <div class="card-icon mdi-chart-donut-variant">
                                <ul id="list">
                                    <li><a href="" class="nav-link">C Programming</a></li>
                                    <li><a href="" class="nav-link">C++ Programming</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
