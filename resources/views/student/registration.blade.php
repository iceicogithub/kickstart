<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KickStart | Registration</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <style>
        * {
            padding: 0;
            margin: 0;

        }

        .form-control {
            border-radius: 0;
            border: 1px solid #dcdcdc;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: rgba(0, 0, 0, .125);
        }

        .input-group-text {
            background-color: transparent;
            color: #000;
            border-radius: 0px;
        }

        .main_box {
            width: 100%;
            height: 100%;
            background-image: url('/img/green.jpeg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            /* background-color:lightgray; */
        }

        .logo_img {
            width: 10rem;
        }

        .form_card {
            /* background: transparent; */
            background-color: #fff;
            /* backdrop-filter: blur(40px); */
            color: #000;
            /* background-color: #000; */
        }

        .form-control {
            /* background-color:transparent; */
            background-color: #ffffff;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, .2) */
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    {{-- script to validate input fields started --}}
    <script>
        // phone number client side validation
        document.addEventListener('DOMContentLoaded', function() {
            var mobileNumberInput = document.getElementById('mobileNumber');
            var errorSpan = document.getElementById('phoneerror');

            mobileNumberInput.addEventListener('input', function() {
                // Remove any non-digit characters from the input
                this.value = this.value.replace(/\D/g, '');

                // Check if more than 10 digits are entered
                if (this.value.length > 10) {
                    errorSpan.textContent = "Mobile number should be exactly 10 digits";
                } else {
                    errorSpan.textContent = "";
                }
            });
        });

        // email client side validation

        document.addEventListener('DOMContentLoaded', function() {
            var emailInput = document.getElementById('email');
            var errorSpan = document.getElementById('mailerror');
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression for validating email format

            emailInput.addEventListener('input', function() {
                var enteredValue = this.value.trim();

                if (!emailRegex.test(enteredValue)) {
                    errorSpan.textContent = "Please enter a valid email address";
                } else {
                    errorSpan.textContent = "";
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            var percentageInput = document.getElementById('percentage');
            var errorSpan = document.getElementById('percentageerror');
            var percentageRegex = /^(\d+(\.\d{1,2})?|\.\d{1,2})%?$/; // Updated regular expression to allow % sign

            percentageInput.addEventListener('input', function() {
                var enteredValue = this.value.trim();

                if (!percentageRegex.test(enteredValue)) {
                    errorSpan.textContent = "Please enter a valid percentage or CGPA";
                } else {
                    errorSpan.textContent = "";
                }
            });
        });
    </script>

    {{-- validation script ends here --}}
    <div class="main_box">

        <div class="container-fluid col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 py-4 text-start">
            <a type="button" href="{{ url('/') }}" class="btn btn-danger text-light"><i
                    class="fa-solid fa-house"></i></a>
        </div>

        <div class="container-fluid d-flex align-items-center justify-content-center flex-column pb-5">

            <div class="card form_card col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 shadow px-2">
                <div class="py-1 bg-warning"></div>

                <div class="text-center my-3">
                    <img src="{{ asset('img/kickstart.jpeg') }}" class="logo_img">
                </div>

                <p class="fw-bold h5 text-start ps-2 py-3">Personal Details:</p>

                <form class="needs-validation" id="registrationForm" onsubmit="return validateForm()" novalidate>
                    @csrf
                    {{-- @foreach ($formData as $data) --}}
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="First Name"
                                    aria-label="Username" aria-describedby="basic-addon1" name="firstname"
                                    value="{{ old('first_name', $firstName) }}" required>
                            </div>
                            <div class="invalid-feedback">
                                Please provide a first name.
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Last Name" aria-label="Username"
                                    aria-describedby="basic-addon1" name="lastname"
                                    value="{{ old('last_name', $lastName) }}" required>
                            </div>
                            <div class="invalid-feedback">
                                Please provide a last name.
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-1">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Email" aria-label="Username"
                                    aria-describedby="basic-addon1" id="email" name="email"
                                    value="{{ old('email', $formData->email ?? '') }}" required>
                                <div class="invalid-feedback"> Please provide a email.</div>

                            </div>

                            @if ($errors->has('email'))
                                <span class="text-danger ps-3">{{ $errors->first('email') }}</span>
                            @endif

                            <span id="mailerror" class="text-danger ps-3"></span>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-1">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-mobile"></i></span>
                                <input type="text" class="form-control" placeholder="Mobile" aria-label="Mobile"
                                    aria-describedby="basic-addon1" name="phone" pattern="[0-9]{10}"
                                    title="Please enter a 10-digit mobile number."
                                    value="{{ old('phone', $formData->phone ?? '') }}" required>

                                <div class="invalid-feedback">Please enter a 10-digit mobile number.</div>

                            </div>

                            <span id="phoneerror" class="text-danger ps-3"></span>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4 ms-2">
                        <div class="md-1">

                            <p for="exampleText" class="form-label fw-bold">Gender</p>
                            <div class="d-flex">
                                <div class="form-check me-2">
                                    <input class="form-check-input" type="radio" name="gender"
                                        id="flexRadioDefault1" value="male" required>
                                    <label class="form-check-label" for="flexRadioDefault1">Male</label>
                                </div>
                                <div class="form-check me-2">
                                    <input class="form-check-input" type="radio" name="gender"
                                        id="flexRadioDefault2" value="female" required>
                                    <label class="form-check-label" for="flexRadioDefault2">Female</label>
                                </div>
                                <div class="form-check me-2">
                                    <input class="form-check-input" type="radio" name="gender"
                                        id="flexRadioDefault3" value="other" required>
                                    <label class="form-check-label" for="flexRadioDefault3">Other</label>
                                </div>
                            </div>
                            <div class="invalid-feedback">Please select a gender.</div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">

                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-globe"></i></span>
                                <select class="form-control countries form-select" aria-label="Default select example"
                                    aria-describedby="basic-addon1" id="countryId" name="country" required>
                                    <option value="{{ old('country', $formData->country ?? '') }}">Select Country
                                    </option>
                                </select>
                                <div class="invalid-feedback">Please select a country.</div>

                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">

                            <div class="input-group  mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-chart-area"></i></span>
                                <select type="text" class="states form-select form-control"
                                    aria-label="Default select example" aria-describedby="basic-addon1"
                                    id="stateId" name="state" required>
                                    <option value="{{ old('state', $formData->state ?? '') }}">Select State</option>
                                </select>
                                <div class="invalid-feedback">Please select a State.</div>

                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">

                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-city"></i></span>
                                <select class="form-control cities form-select" aria-label="Default select example"
                                    aria-describedby="basic-addon1" id="cityId" name="city" required>
                                    <option value="{{ old('city', $formData->city ?? '') }}">Select City</option>
                                </select>
                                <div class="invalid-feedback">Please select a City.</div>

                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">

                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-location-pin"></i></span>
                                <input type="text" class="form-control" placeholder="Pin-Code"
                                    aria-describedby="basic-addon1" name="pincode"
                                    value="{{ old('pincode', $formData->pincode ?? '') }}" required>
                                <div class="invalid-feedback"> Please provide a pincode.</div>

                            </div>

                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="input-group mb-1 px-2">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fa-solid fa-location-dot"></i></span>
                            <input type="text" class="form-control" placeholder="Address" aria-label="Username"
                                aria-describedby="basic-addon1" name="address"
                                value="{{ old('address', $formData->address ?? '') }}" required>
                            <div class="invalid-feedback"> Please provide a address.</div>

                        </div>

                    </div>

                    {{-- clg-details --}}

                    <p class="fw-bold h5 text-start ps-2 py-3">College Details:</p>

                    <div class="mb-4">
                        <div class="input-group mb-1 px-2">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fa-solid fa-building-columns"></i></span>
                            <input type="text" class="form-control" placeholder="College name"
                                aria-label="Username" aria-describedby="basic-addon1" name="college_name"
                                value="{{ old('college_name', $formData->college_name ?? '') }}" required>
                            <div class="invalid-feedback"> Please provide a college name.</div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-calendar-days"></i></span>
                                <input type="text" class="form-control" placeholder="Year" aria-label="Username"
                                    aria-describedby="basic-addon1" name="year"
                                    value="{{ old('year', $formData->year ?? '') }}" required>
                                <div class="invalid-feedback"> Please provide a year .</div>

                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-code-branch"></i></span>
                                <input type="text" class="form-control" placeholder="Branch"
                                    aria-label="Username" aria-describedby="basic-addon1" name="branch"
                                    value="{{ old('branch', $formData->branch ?? '') }}" required>
                                <div class="invalid-feedback"> Please provide a branch.</div>

                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-magnifying-glass"></i></span>

                                <select class="form-control form-select" aria-label="Default select example"
                                    aria-describedby="basic-addon1" name="area_of_interest"
                                    value="{{ old('area_of_interest', $formData->area_of_interest ?? '') }}" required>
                                    <option>Area of Interest</option>
                                    <option value="wd">Web Devlopment</option>
                                    <option value="cc">Cloud Computing</option>
                                    <option value="d">Devops</option>
                                </select>
                                <div class="invalid-feedback"> Please select a area of interest.</div>

                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-percent"></i></span>
                                <input type="text" class="form-control" placeholder="CGPA/%"
                                    aria-label="Username" aria-describedby="basic-addon1" id="percentage"
                                    name="cgpa" value="{{ old('cgpa', $formData->cgpa ?? '') }}" required>
                                <div class="invalid-feedback"> Please provide a cgpa.</div>

                            </div>

                            <span id="percentageerror" class="text-danger ps-3"></span>

                        </div>
                    </div>


                    <div class="my-4 text-center">
                        <button type="submit" id="payButton" class="btn btn-warning col-5 shadow">Register
                            & Pay</button>
                    </div>
                </form>

                <div id="paymentResponse"></div>
                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                        $(document).ready(function() {
                        $('#registrationForm').submit(function(e) {
                            e.preventDefault();

                            var formData = $(this).serialize();

                            $.ajax({
                                type: 'POST',
                                url: '{{ route('store.student') }}',
                                data: formData,
                                success: function(response) {
                                    // Redirect to Razorpay payment gateway
                                    window.location.href = response.redirect_url;
                                },
                                error: function(xhr, status, error) {
                                    $('#paymentResponse').text("Error: " + xhr.responseText);
                                }
                            });
                        });
                    });

                    var options = {
                        "key": "rzp_test_ci8sxj5IUpXRv1",
                        "amount": "30000",
                        "currency": "INR",
                        "description": "Acme Corp",
                        "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
                        "prefill": {
                            "email": "gaurav.kumar@example.com",
                            "contact": +919900000000,
                        },
                        config: {
                            display: {
                                blocks: {
                                    utib: { //name for Axis block
                                        name: "Pay using Axis Bank",
                                        instruments: [{
                                                method: "card",
                                                issuers: ["UTIB"]
                                            },
                                            {
                                                method: "netbanking",
                                                banks: ["UTIB"]
                                            },
                                        ]
                                    },
                                    other: { //  name for other block
                                        name: "Other Payment modes",
                                        instruments: [{
                                                method: "card",
                                                issuers: ["ICIC"]
                                            },
                                            {
                                                method: 'netbanking',
                                            }
                                        ]
                                    }
                                },
                                hide: [{
                                    method: "upi"
                                }],
                                sequence: ["block.utib", "block.other"],
                                preferences: {
                                    show_default_blocks: false // Should Checkout show its default blocks?
                                }
                            }
                        },
                        "handler": function(response) {
                            alert(response.razorpay_payment_id);
                        },
                        "modal": {
                            "ondismiss": function() {
                                if (confirm("Are you sure, you want to close the form?")) {
                                    txt = "You pressed OK!";
                                    console.log("Checkout form closed by the user");
                                } else {
                                    txt = "You pressed Cancel!";
                                    console.log("Complete the Payment")
                                }
                            }
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    document.getElementById('payButton').onclick = function(e) {
                        rzp1.open();
                        e.preventDefault();
                    }
                </script>



            </div>
        </div>
    </div>


    <script>
        function ajaxCall() {
            this.send = function(data, url, method, success, type) {
                type = 'json';
                var successRes = function(data) {
                    success(data);
                }

                var errorRes = function(xhr, ajaxOptions, thrownError) {

                    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);

                }
                jQuery.ajax({
                    url: url,
                    type: method,
                    data: data,
                    success: successRes,
                    error: errorRes,
                    dataType: type,
                    timeout: 60000
                });

            }

        }

        function locationInfo() {
            var rootUrl = "https://geodata.phplift.net/api/index.php";
            var call = new ajaxCall();



            this.getCities = function(id) {
                jQuery(".cities option:gt(0)").remove();
                //get additional fields

                var url = rootUrl + '?type=getCities&countryId=' + '&stateId=' + id;
                var method = "post";
                var data = {};
                jQuery('.cities').find("option:eq(0)").html("Please wait..");
                call.send(data, url, method, function(data) {
                    jQuery('.cities').find("option:eq(0)").html("Select City");
                    var listlen = Object.keys(data['result']).length;

                    if (listlen > 0) {
                        jQuery.each(data['result'], function(key, val) {

                            var option = jQuery('<option />');
                            option.attr('value', val.name).text(val.name);
                            jQuery('.cities').append(option);
                        });
                    }


                    jQuery(".cities").prop("disabled", false);

                });
            };

            this.getStates = function(id) {
                jQuery(".states option:gt(0)").remove();
                jQuery(".cities option:gt(0)").remove();
                //get additional fields
                var stateClasses = jQuery('#stateId').attr('class');


                var url = rootUrl + '?type=getStates&countryId=' + id;
                var method = "post";
                var data = {};
                jQuery('.states').find("option:eq(0)").html("Please wait..");
                call.send(data, url, method, function(data) {
                    jQuery('.states').find("option:eq(0)").html("Select State");

                    jQuery.each(data['result'], function(key, val) {
                        var option = jQuery('<option />');
                        option.attr('value', val.name).text(val.name);
                        option.attr('stateid', val.id);
                        jQuery('.states').append(option);
                    });
                    jQuery(".states").prop("disabled", false);

                });
            };

            this.getCountries = function() {
                var url = rootUrl + '?type=getCountries';
                var method = "post";
                var data = {};
                jQuery('.countries').find("option:eq(0)").html("Please wait..");
                call.send(data, url, method, function(data) {
                    jQuery('.countries').find("option:eq(0)").html("Select Country");

                    jQuery.each(data['result'], function(key, val) {
                        var option = jQuery('<option />');

                        option.attr('value', val.name).text(val.name);
                        option.attr('countryid', val.id);

                        jQuery('.countries').append(option);
                    });
                    // jQuery(".countries").prop("disabled",false);

                });
            };

        }

        jQuery(function() {
            var loc = new locationInfo();
            loc.getCountries();
            jQuery(".countries").on("change", function(ev) {
                var countryId = jQuery("option:selected", this).attr('countryid');
                if (countryId != '') {
                    loc.getStates(countryId);
                } else {
                    jQuery(".states option:gt(0)").remove();
                }
            });
            jQuery(".states").on("change", function(ev) {
                var stateId = jQuery("option:selected", this).attr('stateid');
                if (stateId != '') {
                    loc.getCities(stateId);
                } else {
                    jQuery(".cities option:gt(0)").remove();
                }
            });
        });
    </script>
    {{-- script for country state city ended --}}


    {{-- for bootstrap validation --}}
    <script>
        (function() {
            'use strict';

            var forms = document.querySelectorAll('.needs-validation');

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add('was-validated');

                        // Custom validation for mobile number
                        var mobileNumberInput = form.querySelector('#mobileNumber');
                        var mobileErrorElement = form.querySelector('#mobileError');

                        if (mobileNumberInput.value.length !== 10) {
                            mobileErrorElement.textContent = 'Please enter a 10-digit mobile number.';
                        } else {
                            mobileErrorElement.textContent = '';
                        }
                    }, false);
                });
        })();
    </script>
    <script>
        // Prevent non-numeric input in mobile number field
        document.addEventListener('DOMContentLoaded', function() {
            var mobileNumberInput = document.querySelector('input[name="phone"]');

            mobileNumberInput.addEventListener('input', function() {
                this.value = this.value.replace(/\D/g, ''); // Remove non-numeric characters
            });
        });
    </script>
    {{-- @if (Session::has('amount'))
<form action="" method="POST">
    <script src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="rzp_test_ci8sxj5IUpXRv1"
            data-amount="{{Session::get('amount')}}"
            data-currency="INR"
            data-order_id="{{Session::get('order_id')}}"
            data-buttontext="Pay with razorpay"
            data-name="registration fees"
            data-theme.color="#F37254"
    ></script>
    <input type="hidden" custom="Hidden Element" name="hidden">    
</form>
@endif --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery library -->




    {{-- <script>
        $(document).ready(function() {
            var paymentRoute = $('#paymentButton').data('route'); // Use jQuery to get data-route attribute

            var options = {
                "key": "rzp_test_ci8sxj5IUpXRv1", // Enter the Key ID generated from the Dashboard
                "amount": "1000",
                "currency": "INR",
                "description": "Acme Corp",
                "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
                "prefill": {
                    "email": "gaurav.kumar@example.com",
                    "contact": +919900000000,
                },
                "handler": function(response) {
                    alert(response.razorpay_payment_id);
                },
                "config": {
                    "display": {
                        "blocks": {
                            "utib": { //name for Axis block
                                "name": "Pay using Axis Bank",
                                "instruments": [{
                                        "method": "card",
                                        "issuers": ["UTIB"]
                                    },
                                    {
                                        "method": "netbanking",
                                        "banks": ["UTIB"]
                                    },
                                ]
                            },
                            "other": { //  name for other block
                                "name": "Other Payment modes",
                                "instruments": [{
                                        "method": "card",
                                        "issuers": ["ICIC"]
                                    },
                                    {
                                        "method": 'netbanking',
                                    }
                                ]
                            }
                        },
                        "hide": [{
                            "method": "upi"
                        }],
                        "sequence": ["block.utib", "block.other"],
                        "preferences": {
                            "show_default_blocks": false // Should Checkout show its default blocks?
                        }
                    }
                },
                "modal": {
                    "ondismiss": function() {
                        if (confirm("Are you sure, you want to close the form?")) {
                            txt = "You pressed OK!";
                            console.log("Checkout form closed by the user");
                        } else {
                            txt = "You pressed Cancel!";
                            console.log("Complete the Payment")
                        }
                    }
                }
            };
            var rzp1 = new Razorpay(options);

            $('#paymentButton').click(function(e) {
                e.preventDefault();
                console.log(paymentRoute);

                // Make AJAX request
                $.ajax({
                    type: 'POST',
                    url: '/razorpay',
                    data: $('#studentForm').serialize(), // Serialize form data
                    success: function(response) {
                        console.log(response);
                        rzp1.open(); // Open Razorpay modal after successful AJAX request
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // Handle error if needed
                    }
                });
            });
        });
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
