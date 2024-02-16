<div class="header  pt-3 ">
    <nav class="container-fluid navbar navbar-expand-md px-4">
        <img src="{{ asset('img/logoNoBg.png') }}" class="head-logo" alt="not-found">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item pt-2 px-lg-2 px-md-0">
                    <a class="nav-link" aria-current="page" href="{{ Url('/') }}">Home</a>
                </li>
                <li class="nav-item pt-2 px-lg-2 px-md-0">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item pt-2 px-lg-2 px-md-0">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    @if (auth()->guard('student')->check())
                        <a href="{{ route('student.profile', ['id' => auth()->guard('student')->id()]) }}"
                            type="button" class="btn-sm btn btn-top btn-light fw-semibold text-muted">Profile</a>
                    @else
                        <a href="{{ route('student.register') }}" type="button"
                            class="btn-sm btn btn-top btn-light fw-semibold text-muted">Signup</a>
                        <a href="{{ route('student.login') }}" type="button"
                            class="btn-sm btn btn-top btn-light fw-semibold text-muted">Login</a>
                    @endif

                </li>
            </ul>
        </div>

    </nav>

</div>
