<nav class="sidebar vertical-scroll ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index.html"><img src="{{asset('img/kickstart.jpeg')}}" alt style="height: 7rem"/></a>
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
                <span>Dashboard</span>
            </a>
        </li>
        <li class>
            <a href="Board.html" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('studentdashboard/img/menu-icon/5.svg')}}" alt />
                </div>
                <span>Code Editor</span>
            </a>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('studentdashboard/img/menu-icon/2.svg')}}" alt />
                </div>
                <span>Languages</span>
            </a>
            <ul>
                <li><a href="editor.html">editor</a></li>
                <li><a href="mail_box.html">Mail Box</a></li>
                <li><a href="chat.html">Chat</a></li>
                <li><a href="faq.html">FAQ</a></li>
            </ul>
        </li>
    </ul>
</nav>