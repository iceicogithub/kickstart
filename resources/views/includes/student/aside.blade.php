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
        <a href="{{url('/')}}"><img src="{{asset('img/kickstart.jpeg')}}" alt style="height: 7rem"/></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('studentdashboard/img/menu-icon/dashboard.svg')}}" alt />
                </div>
                <span class="nav-link">Dashboard</span>
            </a>
        </li>
        <li class>
            <a href="Board.html" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('studentdashboard/img/menu-icon/5.svg')}}" alt />
                </div>
                <span class="nav-link">Code Editor</span>
            </a>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('studentdashboard/img/menu-icon/3.svg')}}" alt />
                </div>
                <span class="nav-link">General Aptitude</span>
            </a>
            <ul>
                <li><a href="">Arithmetic Aptitude</a></li>
                <li><a href="">C Programming</a></li>
                <li><a href="">C++</a></li>
                <li><a href="">Java</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('studentdashboard/img/menu-icon/4.svg')}}" alt />
                </div>
                <span >Verbal Reasoning</span>
            </a>
            <ul>
                <li><a href="">Arithmetic Aptitude</a></li>
                <li><a href="">C Programming</a></li>
                <li><a href="">C++</a></li>
                <li><a href="">Java</a></li>
            </ul>
        </li>
    </ul>
</nav>