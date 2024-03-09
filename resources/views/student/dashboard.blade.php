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
            color: #dc3545;
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
        @foreach ($category as $cat)
            <div class="col">
                <div class="white_card card_height_100 mb_20 shadow">
                    <div class="card-body">
                        <h5 class="main-title fw-bold">{{ $cat->category }}</h5>
                        <div class="card-content card-style-list d-flex justify-content-between">
                            <div class="card-icon mdi-chart-donut-variant">
                                <ul id="list">
                                    @foreach ($chapter->where('category_id', $cat->id)->take(4) as $chap)
                                        <li>
                                            <a href="{{ route('chapter.topics', ['id' => $chap->id, 'chapter' => $chap->chapter]) }}"
                                                class="nav-link">{{ $chap->chapter }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="">
                                <img src="{{ '/flaticons/' . $loop->iteration . '.png' }}" class="dashboard_icons">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
