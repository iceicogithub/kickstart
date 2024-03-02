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
                        <div class="form-group" id="otpInputContainer" style="display: none;">
                            <input type="number" class="form-control" id="otp" name="otp"
                                placeholder="Enter OTP">
                        </div>
                        <div class="form-group" id="passwordInputs" style="display: none;">
                            <input type="password" class="form-control" name="new_password" id="new_password"
                                placeholder="New Password">
                            <input type="password" class="form-control" name="password_confirmation"
                                id="confirm_password" placeholder="Confirm Password">
                        </div>
                        <a href="{{ url('/') }}" class="d-block ps-1 pt-2 text-decoration-none">Back</a>
                        <button type="button" id="checkEmailPhone" class="btn_1 full_width text-center">Check
                            Email/Phone</button>
                        <button type="button" id="sendOTP" class="btn_1 full_width text-center"
                            style="display: none;">SEND OTP</button>
                        <button type="button" id="verifyOTP" class="btn_1 full_width text-center"
                            style="display: none;">VERIFY OTP</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Include SweetAlert CDN and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#email_or_phone').on('input', function() {
                var value = $(this).val().trim();
                var isValid = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value) ||
                    /^[0-9]{10}$/.test(value);

                if (value === '') {
                    $('#email_phone_error').text('Input field cannot be blank.');
                    $('#email_phone_error').show();
                    $('#sendOTP').prop('disabled', true);
                } else if (!isValid) {
                    $('#email_phone_error').text('Please enter a valid email or 10-digit phone number.');
                    $('#email_phone_error').show();
                    $('#sendOTP').prop('disabled', true);
                } else {
                    $('#email_phone_error').hide();
                    $('#sendOTP').prop('disabled', false);
                }
            });

            // Add event listener for form submission
            $('#forgotPasswordForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                // Perform AJAX request
                $.ajax({
                    url: $(this).attr('action'), // Get the action URL from the form
                    method: 'POST', // Use POST method
                    data: $(this).serialize(), // Serialize form data
                    success: function(response) { // If request succeeds
                        if (response.message) { // If server response contains a success message
                            // Show success message
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Show the OTP input field
                                    $('#otpInputContainer').show();
                                    // Disable the email/phone input field
                                    $('#email_or_phone').prop('disabled', true);
                                    // Focus on the OTP input field
                                    $('#otp').focus();
                                }
                            });
                        } else if (response
                            .error) { // If server response contains an error message
                            // Show error message
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.error,
                            });
                        }
                    },
                    error: function(xhr, status, error) { // If request fails
                        // Log error to console
                        console.error(xhr.responseText);
                        // Show error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong! Please try again later.',
                        });
                    }
                });
            });

            // Add event listener for sending OTP button click
            $('#sendOTP').on('click', function() {
                // Get the email or phone input value
                const emailOrPhone = $('#email_or_phone').val().trim();

                // Perform AJAX request to check if user exists and send OTP
                $.ajax({
                    url: '{{ route('check-email-phone') }}', // URL for checking email/phone
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    data: {
                        email_or_phone: emailOrPhone
                    }, // Data to send
                    success: function(response) { // If request succeeds
                        if (response.message) { // If user exists, show success message
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Show the OTP input field
                                    $('#otpInputContainer').show();
                                    // Disable the email/phone input field
                                    $('#email_or_phone').prop('disabled', true);
                                    // Focus on the OTP input field
                                    $('#otp').focus();
                                }
                            });
                        } else if (response
                            .error) { // If user does not exist, show error message
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.error,
                            });
                        }
                    },
                    error: function(xhr, status, error) { // If request fails
                        // Log error to console
                        console.error(xhr.responseText);
                        // Show error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong! Please try again later.',
                        });
                    }
                });
            });

            // Add event listener for verifying OTP button click
            $('#verifyOTP').on('click', function() {
                // Get the OTP input value
                const otp = $('#otp').val().trim();

                // Perform AJAX request to verify OTP
                $.ajax({
                    url: '{{ route('forgot-verify-otp') }}', // URL for verifying OTP
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    data: {
                        otp: otp
                    }, // Data to send
                    success: function(response) { // If request succeeds
                        if (response.message) { // If OTP is verified, show success message
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Show the password input fields
                                    $('#passwordInputs').show();
                                    // Hide the verify OTP button
                                    $('#verifyOTP').hide();
                                }
                            });
                        } else if (response
                            .error) { // If OTP verification fails, show error message
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.error,
                            });
                        }
                    },
                    error: function(xhr, status, error) { // If request fails
                        // Log error to console
                        console.error(xhr.responseText);
                        // Show error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong! Please try again later.',
                        });
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
