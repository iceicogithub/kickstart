<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="header_iner p-0 py-2 px-5 d-flex justify-content-between align-items-center bg_purple_color">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area d-flex align-items-center">
                    <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="profile_info">
                        <img src="{{ asset('studentdashboard/img/client_img.png') }}" alt="#"
                            class="img-thumbnail" />
                        <div class="profile_info_iner">
                            <div class="profile_author_name pb-1">
                                <p>{{ auth()->guard('student')->user()->studentDetail->profession ?? 'N/A' }}</p>
                                <h5 class="text-capitalize mb-0">{{ auth()->guard('student')->user()->studentDetail->fullname ?? 'N/A' }}</h5>
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
                </div>
            </div>
        </div>
    </div>
</div>
