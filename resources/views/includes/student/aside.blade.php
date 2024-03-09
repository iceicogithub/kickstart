<style>
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

<nav class="sidebar vertical-scroll ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{ url('/') }}"><img src="{{ asset('img/kickstart.jpeg') }}" alt style="height: 7rem" /></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="" href="{{ Route('/') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('studentdashboard/img/menu-icon/dashboard.svg') }}" alt />
                </div>
                <span>Home</span>
            </a>
        </li>
        <li class="mm-active">
            <a class="" href="{{ route('student.dashboard', ['id' => auth()->guard('student')->id()]) }}"
                aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('studentdashboard/img/menu-icon/13.svg') }}" alt />
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class>
            <a href="Board.html" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('studentdashboard/img/menu-icon/5.svg') }}" alt />
                </div>
                <span>Code Editor</span>
            </a>
        </li>
        @php
            $category = DB::table('category')->where('status_id', 1)->get();
            $chapter = DB::table('chapter')->where('status_id', 1)->get();
        @endphp
        @foreach ($category as $cat)
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ '/flaticons_aside/' . $loop->iteration . '.png' }}" alt />
                    </div>
                    <span style="text-wrap: nowrap;">{{ $cat->category }}</span>
                </a>
                <ul>
                    @foreach ($chapter->where('category_id', $cat->id)->take(4) as $chap)
                        <li>
                            <a href="{{ route('chapter.topics', ['id' => $chap->id, 'chapter' => $chap->chapter]) }}"
                                class="nav-link">{{ $chap->chapter }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</nav>
