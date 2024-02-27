<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Signup</title>

    <link rel="stylesheet" href="{{ asset('studentdashboard/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/datepicker/date-picker.css') }}" />
    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/vectormap-home/vectormap-2.0.2.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/scroll/scrollable.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('studentdashboard/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/morris/morris.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/css/metisMenu.css') }}" />

    <link rel="stylesheet" href="{{ asset('studentdashboard/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('studentdashboard/css/colors/default.css') }}" id="colorSkinCSS" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <style>
        .form_size {
            height: 100vh;
        }
    </style>

    <div class="row form_size justify-content-center align-items-center">
        <div class="col-lg-6">

            <div class="modal-content cs_modal">
                <div class="modal-header theme_bg_1 justify-content-center">
                    <h5 class="modal-title text_white">Resister</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('student.register') }}" method="post">
                        @csrf
                        <input type="text" name="email_or_phone" placeholder="Email or Phone"
                            class="d-block w-100 p-3 mb-4 rounded-3">
                        @error('email_or_phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="password" name="password" placeholder="Create a Password"
                            class="d-block w-100 p-3 mb-4 rounded-3">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="password" name="password_confirmation" placeholder="Confirm a Password"
                            class="d-block w-100 p-3 mb-4 rounded-3">
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <a href="{{ url('/') }}" class="d-block ps-1 pb-3 text-decoration-none">Back</a>
                        <button type="submit"
                            class="d-block bg-primary w-100 p-3 border-0 rounded-3 text-white">Signup</button>

                        <div class="text-center my-3">
                            <p class="fw-bold mb-3">OR</p>
                            <button type="submit"
                                class="d-block bg-primary w-100 p-3 border-0 rounded-3 text-white"><i class="fa-brands fa-google text-white"></i> Continue With
                                Google</button>
                        </div>

                        <div class="text-center text-black"><span class="">Already have an account?<a
                                    href="{{ route('student.login') }}" class="text-decoration-none"> Login </a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://apis.google.com/js/platform.js"></script>

    <script src="{{ asset('studentdashboard/js/jquery1-3.4.1.min.js') }}"></script>

    <script src="{{ asset('studentdashboard/js/popper1.min.js') }}"></script>

    <script src="{{ asset('studentdashboard/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('studentdashboard/js/metisMenu.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/count_up/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('studentdashboasrd/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/datatable/js/buttons.print.min.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/datepicker/datepicker.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/datepicker/datepicker.en.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/datepicker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('studentdashboard/js/chart.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/chartjs/roundedBar.min.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/am_chart/amcharts.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/scroll/scrollable-custom.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/vectormap-home/vectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/vectormap-home/vectormap-world-mill-en.js') }}"></script>

    <script src="{{ asset('studentdashboard/vendors/apex_chart/apex-chart2.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/apex_chart/apex_dashboard.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/echart/echarts.min.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/chart_am/core.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/chart_am/charts.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/chart_am/animated.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/chart_am/kelly.js') }}"></script>
    <script src="{{ asset('studentdashboard/vendors/chart_am/chart-custom.js') }}"></script>

    <script src="{{ asset('studentdashboard/js/dashboard_init.js') }}"></script>
    <script src="{{ asset('studentdashboard/js/custom.js') }}"></script>
</body>

</html>
