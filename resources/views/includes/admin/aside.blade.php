<nav id="sidebar" class="">
    <div class="sidebar-header">
        <a href="{{Route('dashboard')}}"><img class="main-logo" src="{{ asset('admin/img/logo/logo.png') }}" alt="" /></a>
        <strong><img src="{{ asset('admin/img/logo/logosn.png') }}" alt="" /></strong>
    </div>
    <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro">
            <ul class="metismenu" id="menu1">
                <li>
                    <a class="has-arrow" href="#">
                        <i class="icon nalika-desktop icon-wrap"></i>
                        <span class="mini-click-non">Admin</span>
                    </a>
                    <ul class="submenu-angle" aria-expanded="true">
                        <li>
                            <a title="Add Admin" href="{{Route('add.admin')}}">
                                <span class="mini-sub-pro">Add Admin</span>
                            </a>
                        </li>
                        <li>
                            <a title="Admin List" href="{{Route('admin.list')}}">
                                <span class="mini-sub-pro">Admin List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#">
                        <i class="icon nalika-eye icon-wrap"></i>
                        <span class="mini-click-non">Mentor</span>
                    </a>
                    <ul class="submenu-angle" aria-expanded="true">
                        <li>
                            <a title="Add Mentor" href="#">
                                <span class="mini-sub-pro">Add Mentor</span>
                            </a>
                        </li>
                        <li>
                            <a title="Mentor List" href="#">
                                <span class="mini-sub-pro">Mentor List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#">
                        <i class="icon nalika-share icon-wrap"></i>
                        <span class="mini-click-non">Institute</span>
                    </a>
                    <ul class="submenu-angle" aria-expanded="true">
                        <li>
                            <a title="Add Institute" href="#">
                                <span class="mini-sub-pro">Add Institute</span>
                            </a>
                        </li>
                        <li>
                            <a title="Institute List" href="#">
                                <span class="mini-sub-pro">Institute List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#">
                        <i class="icon nalika-user icon-wrap"></i>
                        <span class="mini-click-non">Student</span>
                    </a>
                    <ul class="submenu-angle" aria-expanded="true">
                        <li>
                            <a title="Student List" href="{{Route('student.list')}}">
                                <span class="mini-sub-pro">Student List</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</nav>
