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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .form_size {
            height: 100vh;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body>
    <div class="row form_size justify-content-center align-items-center">
        <div class="col-lg-6">
            <div class="modal-content cs_modal">
                <div class="modal-header theme_bg_1 justify-content-center">
                    <h5 class="modal-title text_white">Resister</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('student.register') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-9 col-sm-12 col-lg-9">
                                <input type="text" name="email_or_phone" id="email_or_phone"
                                    placeholder="Email or Phone" class="d-block w-100 p-3 mb-4 rounded-3"
                                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}|[0-9]{10}" required>
                                <div class="text-danger" id="email_phone_error" style="display: none;"></div>
                            </div>
                            @error('email_or_phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <button type="button" id="getotp" title="Get Otp For Verification"
                                    class="btn btn-danger btn-lg py-2 w-100">Get OTP</button>
                                <button type="button" id="verify_done" title="Verified Successfully"
                                    class="btn btn-success btn-lg py-2 w-100 d-none" disabled>Verified</button>
                            </div>
                        </div>
                        <div class="row d-flex" id="verify" style="display: none!important;">
                            <div class="col-md-9 col-sm-12 col-lg-9">
                                <input type="number" name="verify_otp" id="verify_otp" placeholder="Enter Otp"
                                    class="d-block w-100 p-3 mb-4 rounded-3">
                                <div class="text-danger" id="otp_error" style="display: none;"></div>
                            </div>
                            @error('verify_otp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <button type="button" id="verifyotp" title="Confirm Otp"
                                    class="btn btn-danger btn-lg py-2 w-100">Verify OTP</button>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input type="password" name="password" placeholder="Create a Password"
                                class="d-block w-100 p-3 mb-4 rounded-3" required>
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input type="password" name="password_confirmation" placeholder="Confirm a Password"
                                class="d-block w-100 p-3 mb-4 rounded-3" required>
                        </div>
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <a href="{{ url('/') }}" class="d-block ps-1 pb-3 text-decoration-none">Back</a>
                        <button type="submit"
                            class="d-block bg-primary w-100 p-3 border-0 rounded-3 text-white">Signup</button>

                        <div class="text-center my-3">
                            <p class="fw-bold mb-3">OR</p>
                            {{-- <a href="{{ url('/googleLogin') }}" class="d-block bg-primary w-100 p-3 border-0 rounded-3 text-white">
                                <i class="fab fa-google text-white"></i> Continue With Google
                            </a> --}}
                            <a href="{{ url('/googleLogin') }}" class="d-block w-100 p-3 mb-4 border-0 rounded-3 text-white btn btn-primary">
                                <i class="fab fa-google text-white"></i> Signup with Google</a>               
                        </div>
                        <div class="text-center text-black"><span class="">Already have an account?<a
                                    href="{{ route('student.login') }}" class="text-decoration-none"> Login
                                </a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#email_or_phone').on('input', function() {
                var value = $(this).val();
                var isValid = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value) ||
                    /^[0-9]{10}$/.test(value);
                if (!isValid) {
                    $('#email_phone_error').text('Please enter a valid email or 10-digit phone number.');
                    $('#email_phone_error').show();
                    $('#getotp').prop('disabled', true);
                } else {
                    $('#email_phone_error').hide();
                    $('#getotp').prop('disabled', false);
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const getOtpBtn = document.getElementById('getotp');
            const verifyDiv = document.getElementById('verify');
            let countdown = 25;

            getOtpBtn.addEventListener('click', function(event) {
                event.preventDefault();

                const emailOrPhoneInput = document.getElementById('email_or_phone');

                if (emailOrPhoneInput.value.trim() === '') {
                    displayError('email_phone_error', 'Please enter your email or phone number.');
                } else {
                    hideError('email_phone_error');
                    fetch('{{ route('generate-otp') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                email_or_phone: emailOrPhoneInput.value
                            })
                        })
                        .then(response => {
                            if (response.ok) {
                                showElement(verifyDiv);
                                startCountdown();
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Failed to send OTP or User Already Exists. Please try again.',
                                });
                                hideElement(verifyDiv);
                                stopCountdown();
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }
            });

            function displayError(id, message) {
                const errorDiv = document.getElementById(id);
                errorDiv.innerText = message;
                errorDiv.style.display = 'block';
            }

            function hideError(id) {
                const errorDiv = document.getElementById(id);
                errorDiv.style.display = 'none';
            }

            function showElement(element) {
                element.style.display = 'block';
            }

            function hideElement(element) {
                // element.style.display = 'none';
                document.getElementById('verify').classList.add('d-none');

            }

            function startCountdown() {
                $('#getotp').prop('disabled', true);
                let interval = setInterval(function() {
                    if (countdown <= 0) {
                        clearInterval(interval);
                        $('#getotp').text('Resend OTP');
                        $('#getotp').prop('disabled', false);
                        countdown = 25;
                    } else {
                        $('#getotp').text(formatTime(countdown));
                        countdown--;
                    }
                }, 1000);
            }

            function stopCountdown() {
                clearInterval(interval);
            }

            function formatTime(seconds) {
                let minutes = Math.floor(seconds / 60);
                let remainingSeconds = seconds % 60;
                return `${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const getOtpButton = document.getElementById('getotp');
            const verifyOtpButton = document.getElementById('verifyotp');

            // Event listener for Get OTP button
            getOtpButton.addEventListener('click', function() {
                fetch('{{ route('generate-otp') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            email_or_phone: document.getElementById('email_or_phone').value
                        })
                    })
                    .then(response => {
                        if (response.ok) {
                            // Show success message if OTP is sent
                            // Swal.fire({
                            //     icon: 'success',
                            //     title: 'Success!',
                            //     text: 'OTP sent successfully',
                            // });

                            // Display verification block and start countdown only if OTP sending is successful
                            showElement(verifyDiv);
                            startCountdown();
                        } else {
                            // Handle error if failed to send OTP
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Failed to send OTP or User Already Exists. Please try again.',
                            });
                            hideElement(verifyDiv);
                            stopCountdown();
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });


            verifyOtpButton.addEventListener('click', function() {
                const otp = document.getElementById('verify_otp').value;

                fetch('{{ route('verify-otp') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            otp: otp
                        })
                    })
                    .then(response => {
                        if (response.ok) {
                            // Hide the verification block
                            document.getElementById('verify').classList.add('d-none');
                            document.getElementById('verify').classList.remove('d-flex');

                            // Show the "Verified" button and hide the "Get OTP" button
                            document.getElementById('getotp').classList.add('d-none');
                            document.getElementById('verify_done').classList.remove('d-none');

                            // Show success message if OTP is verified
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'OTP verified successfully',
                                onClose: () => {
                                    // Clear the OTP input field after successful verification
                                    document.getElementById('verify_otp').value = '';
                                }
                            });

                            // Clear the interval to stop the countdown
                            clearInterval(interval);
                            countdown = 0;
                        } else {
                            // Show error message if OTP verification fails
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Invalid OTP',
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });

            // Function to start countdown timer
            function startCountdown() {
                $('#getotp').prop('disabled', true);
                interval = setInterval(function() {
                    if (countdown <= 0) {
                        clearInterval(interval);
                        $('#getotp').text('Resend OTP');
                        $('#getotp').prop('disabled', false);
                        countdown = 25;
                    } else {
                        $('#getotp').text(formatTime(countdown));
                        countdown--;
                    }
                }, 1000);
            }

        });
    </script>
    <script>
        const signupButton = document.querySelector('button[type="submit"]');

        signupButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent form submission

            // Check if the OTP is verified
            if (document.getElementById('getotp').classList.contains('d-none')) {
                // OTP is verified, proceed with form submission

                // Check if the password fields are empty
                const passwordInput = document.querySelector('input[name="password"]');
                const confirmPasswordInput = document.querySelector('input[name="password_confirmation"]');

                if (passwordInput.value.trim() === '' || confirmPasswordInput.value.trim() === '') {
                    // Password fields are empty, prompt the user to enter a password
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please enter a password to complete the signup process',
                    });
                } else {
                    // Passwords are entered, submit the form
                    document.querySelector('form').submit();
                }
            } else {
                // OTP is not verified, show error message
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please verify your OTP first',
                });
            }
        });
    </script>

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
