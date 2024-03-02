@extends('includes.student.main')
@section('title')
    Dashboard
@endsection

@section('style')
    <style>
        .card-content {
            position: relative;
        }

        .dashboard_icons {
            position: absolute;
            bottom: 0;
            right: 5%;
            width: 5rem;
            opacity: 0.1;
        }

        .nav-link {
            color: #5d77a8;
            font-size: medium;
            font-weight: bold;
            line-height: 1.2;
            z-index: 1;
        }

        .nav-link:hover {
            margin-left: 5px;
            transition: all 0.5s ease-in-out;
            color: #26c5b5;
            text-decoration: underline;
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
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- section starts --}}

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="white_card card_height_100 mb_20 shadow">
                <div class="card-body">
                    <h5 class="main-title fw-bold">General Aptitude</h5>
                    <div class="card-content card-style-list d-flex justify-content-between">
                        <div class="card-icon mdi-chart-donut-variant">
                            <ul id="list">
                                <li><a href="{{route('tests.topics')}}" class="nav-link">Arithmetic Aptitude</a></li>
                                <li><a href="" class="nav-link">Data Interpretation</a></li>
                                <li><a href="" class="nav-link">Online Aptitude Test</a></li>
                                <li><a href="" class="nav-link">Data Interpretation Test</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <img src="{{ '/img/aptitude.png' }}" class="dashboard_icons">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card white_card card_height_100 mb_20 shadow">
                <div class="card-body">
                    <h5 class="main-title fw-bold">Verbal and Reasoning
                    </h5>
                    <div class="card-content card-style-list">
                        <div class="card-icon mdi-chart-donut-variant ">
                            <ul>
                                <li><a href="" class="nav-link">Verbal Ability</a></li>
                                <li><a href="" class="nav-link">Logical Reasoning</a></li>
                                <li><a href="" class="nav-link">Verbal Reasoning</a></li>
                                <li><a href="" class="nav-link">Non Verbal Reasoning</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <img src="{{ '/img/settings.png' }}" class="dashboard_icons">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card white_card card_height_100 mb_20 shadow">
                <div class="card-body">
                    <h5 class="main-title fw-bold">Current Affairs & GK
                    </h5>
                    <div class="card-content card-style-list">
                        <div class="card-icon mdi-chart-donut-variant ">
                            <ul>
                                <li><a href="" class="nav-link">Current Affairs</a></li>
                                <li><a href="" class="nav-link">Basic General Knowledge</a></li>
                                <li><a href="" class="nav-link">General Science</a></li>
                                <li><a href="" class="nav-link">Read more...</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <img src="{{ '/img/book.png' }}" class="dashboard_icons">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="white_card card_height_100 mb_20 shadow">
                <div class="card-body">
                    <h5 class="main-title fw-bold">Interview
                    </h5>
                    <div class="card-content card-style-list">
                        <div class="card-icon mdi-chart-donut-variant ">
                            <ul>
                                <li><a href="" class="nav-link">Placement Papers</a></li>
                                <li><a href="" class="nav-link">Group Discussion</a></li>
                                <li><a href="" class="nav-link">HR Interview</a></li>
                                <li><a href="" class="nav-link">Read more...</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <img src="{{ '/img/interview.png' }}" class="dashboard_icons">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card white_card card_height_100 mb_20 shadow">
                <div class="card-body">
                    <h5 class="main-title fw-bold">Engineering
                    </h5>
                    <div class="card-content card-style-list">
                        <div class="card-icon mdi-chart-donut-variant ">
                            <ul>
                                <li><a href="" class="nav-link">Mechanical Engineering</a></li>
                                <li><a href="" class="nav-link">Civil Engineering</a></li>
                                <li><a href="" class="nav-link">ECE , EEE , CSE</a></li>
                                <li><a href="" class="nav-link">Chemical Engineering</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <img src="{{ '/img/worker.png' }}" class="dashboard_icons">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card white_card card_height_100 mb_20 shadow">
                <div class="card-body">
                    <h5 class="main-title fw-bold">Programming</h5>
                    <div class="card-content card-style-list">
                        <div class="card-icon mdi-chart-donut-variant ">
                            <ul>
                                <li><a href="" class="nav-link">C programming</a></li>
                                <li><a href="" class="nav-link">C++ programming</a></li>
                                <li><a href="" class="nav-link">C# programming</a></li>
                                <li><a href="" class="nav-link">Java programming</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <img src="{{ '/img/data.png' }}" class="dashboard_icons">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="white_card card_height_100 mb_20 shadow">
                <div class="card-body">
                    <h5 class="main-title fw-bold">Online Tests
                    </h5>
                    <div class="card-content card-style-list">
                        <div class="card-icon mdi-chart-donut-variant ">
                            <ul>
                                <li><a href="" class="nav-link">Arithmetic Aptitude</a></li>
                                <li><a href="" class="nav-link">Data Interpretation</a></li>
                                <li><a href="" class="nav-link">Online Aptitude Test</a></li>
                                <li><a href="" class="nav-link">Data Interpretation Test</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <img src="{{ '/img/online-education.png' }}" class="dashboard_icons">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card white_card card_height_100 mb_20 shadow">
                <div class="card-body">
                    <h5 class="main-title fw-bold">Technical MCQs
                    </h5>
                    <div class="card-content card-style-list">
                        <div class="card-icon mdi-chart-donut-variant ">
                            <ul>
                                <li><a href="" class="nav-link">Arithmetic Aptitude</a></li>
                                <li><a href="" class="nav-link">Data Interpretation</a></li>
                                <li><a href="" class="nav-link">Online Aptitude Test</a></li>
                                <li><a href="" class="nav-link">Data Interpretation Test</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <img src="{{ '/img/exam.png' }}" class="dashboard_icons">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card white_card card_height_100 mb_20 shadow">
                <div class="card-body">
                    <h5 class="main-title fw-bold">Technical Short Answers
                    </h5>
                    <div class="card-content card-style-list">
                        <div class="card-icon mdi-chart-donut-variant ">
                            <ul>
                                <li><a href="" class="nav-link">Arithmetic Aptitude</a></li>
                                <li><a href="" class="nav-link">Data Interpretation</a></li>
                                <li><a href="" class="nav-link">Online Aptitude Test</a></li>
                                <li><a href="" class="nav-link">Data Interpretation Test</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <img src="{{ '/img/result.png' }}" class="dashboard_icons">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
