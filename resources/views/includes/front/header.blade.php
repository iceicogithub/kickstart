<style>
    .profile_info .profile_info_iner .profile_author_name {
        background-image: linear-gradient(to bottom right, #863ee2, #571f9e);
    }

    .img-thumbnail {
        background-color: #f5f6ff !important;
        border: 1px solid #f5f6ff !important;
        border-radius: 20px !important;
    }

    .profile_info {
        position: relative;
    }

    .profile_info img {
        max-width: 42px;
        max-height: 42px;
        border-radius: 50%;
        cursor: pointer;
    }

    @media (max-width: 991px) {
        .profile_info img {
            max-width: 30px;
        }
    }

    .profile_info .profile_info_iner {
        position: absolute;
        right: 0;
        background-color: #fff;
        text-align: left;
        width: 215px;
        padding: 0;
        opacity: 0;
        visibility: hidden;
        top: 77px;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
        border: 1px solid #d2d4d7;
    }

    .profile_info .profile_info_iner::before {
        position: absolute;
        content: "";
        width: 0;
        height: 0;
        border-style: solid;
        top: -10px;
        right: 15px;
        border-width: 0 11px 12px;
        border-color: transparent transparent #567aed transparent;
        z-index: 2;
    }

    .profile_info .profile_info_iner .profile_author_name {
        padding: 20px 25px;
        background: #567aed;
        border-radius: 10px 15px 0 0;
    }

    .profile_info .profile_info_iner a {
        display: block;
    }

    .profile_info .profile_info_iner p {
        font-size: 16px;
        font-weight: 400;
        color: #fff;
    }

    .profile_info .profile_info_iner h6 {
        /* font-size: 20px; */
        color: #fff;
        font-weight: 600;
    }

    .profile_info:hover .profile_info_iner {
        opacity: 1;
        visibility: visible;
        top: 77px;
        z-index: 9999;
    }

    .profile_info .profile_info_details {
        padding: 20px 25px;
    }

    .profile_info .profile_info_details a {
        color: #2e4765;
        font-size: 14px;
        display: block;
        padding: 10px 0;
        font-weight: 400;
    }

    .profile_info .profile_info_details a:hover {
        color: #2e4765;
    }

    .profile_info .profile_info_details a:hover i {
        color: #2e4765;
    }

    .profile_info .profile_info_details i {
        color: #2e4765;
        font-size: 12px;
        margin-left: 20px;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }
</style>

<div class="header">
    <nav class="container-fluid navbar navbar-expand-md px-4">
        <img src="{{ asset('img/kickstart_bg.png') }}" class="head-logo" alt="not-found">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item pt-1 px-lg-2 px-md-0">
                    <a class="nav-link" aria-current="page" href="{{ Url('/') }}">Home</a>
                </li>
                <li class="nav-item pt-1 px-lg-2 px-md-0">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item pt-1 px-lg-2 px-md-0">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                @if (auth()->guard('student')->check())
                    {{-- <a href="{{ route('student.dashboard', ['id' => auth()->guard('student')->id()]) }}" type="button"
                        class="btn-sm btn btn-top btn-light fw-semibold text-muted front-btn">Dashboard</a> --}}

                    <div class="profile_info">
                        <img src="{{ asset('studentdashboard/img/client_img.png') }}" alt="#"
                            class="img-thumbnail" />

                        <div class="profile_info_iner">
                            <div class="profile_author_name pb-1">
                                <p>{{ auth()->guard('student')->user()->studentDetail->profession ?? 'N/A' }}</p>
                                <h6 class="text-capitalize mb-0">
                                    {{ auth()->guard('student')->user()->studentDetail->fullname ?? 'N/A' }}</h6>
                            </div>

                            <div class="profile_info_details pt-1">
                                <a href="{{ route('student.profile', ['id' => auth()->guard('student')->id()]) }}">My
                                    Profile</a>
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                    Out</a>

                                <form id="logout-form" action="{{ route('student.logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('student.register') }}" type="button"
                        class="btn-sm btn btn-top btn-light fw-semibold text-muted front-btn">Signup</a>
                    <a href="{{ route('student.login') }}" type="button"
                        class="btn-sm btn btn-top btn-light fw-semibold text-muted front-btn">Login</a>
                @endif





                {{-- ------------------------------------------------------------- --}}

                {{-- @if (auth()->guard('student')->check())
                    <a href="{{ route('student.dashboard', ['id' => auth()->guard('student')->id()]) }}" type="button"
                        class="btn-sm btn btn-top btn-light fw-semibold text-muted front-btn">Dashboard</a>
                @else
                    <a href="{{ route('student.register') }}" type="button"
                        class="btn-sm btn btn-top btn-light fw-semibold text-muted front-btn">Signup</a>
                    <a href="{{ route('student.login') }}" type="button"
                        class="btn-sm btn btn-top btn-light fw-semibold text-muted front-btn">Login</a>
                @endif --}}

                {{-- <li class="nav-item">
                    @if (auth()->guard('student')->check())
                        <a href="{{ route('student.profile', ['id' => auth()->guard('student')->id()]) }}"
                            type="button"
                            class="btn-sm btn btn-top btn-light fw-semibold text-muted front-btn">Profile</a>
                    @else
                        <a href="{{ route('student.register') }}" type="button"
                            class="btn-sm btn btn-top btn-light fw-semibold text-muted front-btn">Signup</a>
                        <a href="{{ route('student.login') }}" type="button"
                            class="btn-sm btn btn-top btn-light fw-semibold text-muted front-btn">Login</a>
                    @endif

                </li> --}}
            </ul>
        </div>

    </nav>

</div>
