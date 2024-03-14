<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Forgot Password</title>

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
    <style>
        .form_size {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="row justify-content-center align-items-center form_size">
        <div class="col-lg-6">

            <div class="modal-content cs_modal">
                <div class="modal-header theme_bg_1">
                    <h5 class="modal-title text_white">Forget Password</h5>
                </div>
                <div class="modal-body">
                    <form id="forgotPasswordForm" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="email_or_phone" name="email_or_phone"
                                placeholder="Enter Your Email or Phone" required>
                            <div id="email_phone_error" class="text-danger" style="display: none;"></div>
                        </div>
                        <a href="{{ url('/') }}" class="d-block ps-1 pt-2 text-decoration-none">Back</a>
                        <button type="button" id="forgot" class="btn_1 full_width text-center">Forgot
                            Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include SweetAlert CDN and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $('#forgot').click(function() {
                var emailOrPhone = $('#email_or_phone').val();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('checkUserExistence') }}',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        email_or_phone: emailOrPhone
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'User Found',
                                text: response.message
                            });
                            // Call the route to send forgot password email
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('sendForgotPasswordEmail') }}',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    email_or_phone: emailOrPhone
                                },
                                success: function(response) {
                                    if (response.status == 'success') {
                                        // Swal.fire({
                                        //     icon: 'success',
                                        //     title: 'Email Sent',
                                        //     text: response.message
                                        // });
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Failed to Send Email',
                                            text: response.message
                                        });
                                    }
                                },
                                error: function(xhr, status, error) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: error
                                    });
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'User Not Found',
                                text: response.message
                            });
                        }
                    }
                });
            });
        });
    </script>

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
