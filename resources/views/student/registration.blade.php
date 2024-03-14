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

                <form method="post" action="{{ route('store.student') }}" onsubmit="return validateForm()">
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

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Last Name" aria-label="Username"
                                    aria-describedby="basic-addon1" name="lastname"
                                    value="{{ old('last_name', $lastName) }}" required>
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
                                <input type="text" class="form-control" placeholder="Mobile" aria-label="Username"
                                    aria-describedby="basic-addon1" name="phone" pattern="[0-9]*" id="mobileNumber"
                                    name="numberField" value="{{ old('phone', $formData->phone ?? '') }}" required>
                            </div>

                            <span id="phoneerror" class="text-danger ps-3"></span>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4 ms-2">
                        <div class="md-1">

                            <p for="exampleText" class="form-label fw-bold">Gender</p>
                            <input class="form-check-input " type="radio" name="gender" id="flexRadioDefault1"
                                value="male">
                            <label class="form-check-label px-2 " for="flexRadioDefault1">
                                Male
                            </label>

                            <input class="form-check-input " type="radio" name="gender" id="flexRadioDefault2"
                                value="female">
                            <label class="form-check-label px-2 " for="flexRadioDefault1">
                                Female
                            </label>

                            <input class="form-check-input " type="radio" name="gender" id="flexRadioDefault3"
                                value="other">
                            <label class="form-check-label px-2 " for="flexRadioDefault1">
                                Other
                            </label>

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
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">

                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-location-pin"></i></span>
                                <input type="text" class="form-control" placeholder="Pin-Code"
                                    aria-describedby="basic-addon1" name="pincode"
                                    value="{{ old('pincode', $formData->pincode ?? '') }}" required>
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
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-code-branch"></i></span>
                                <input type="text" class="form-control" placeholder="Branch"
                                    aria-label="Username" aria-describedby="basic-addon1" name="branch"
                                    value="{{ old('branch', $formData->branch ?? '') }}" required>
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
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="input-group mb-1 px-2">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-percent"></i></span>
                                <input type="text" class="form-control" placeholder="CGPA/%"
                                    aria-label="Username" aria-describedby="basic-addon1" id="percentage"
                                    name="cgpa" value="{{ old('cgpa', $formData->cgpa ?? '') }}" required>
                            </div>

                            <span id="percentageerror" class="text-danger ps-3"></span>

                        </div>
                    </div>


                    <div class="my-4 text-center">
                        <button type="submit" onclick="showPaymentPopup()"
                            class="btn btn-warning col-5 shadow">Register
                            & Pay</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Payment popup -->
    {{-- <div id="paymentPopup" style="display: none;">
                        <h2>Payment Form</h2> --}}
    <!-- Razorpay Payment Form -->
    {{-- <form id="paymentForm" action="{{ route('process.payment') }}" method="POST">
                            @csrf
                            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                            <button type="button" onclick="confirmPayment()" class="btn btn-success">Confirm
                                Payment</button> <!-- New Confirm Payment button -->
                            <input type="hidden" custom="Hidden Element" name="hidden">
                        </form> --}}
    <!-- End of Razorpay Payment Form -->

    <!-- Close button for the popup -->
    {{-- <button type="button" onclick="closePaymentPopup()">Close</button>
                    </div> --}}

    <!-- Success Modal -->
    {{-- <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel"
                        aria-hidden="true"> --}}
    <!-- Your success modal content -->
    {{-- </div> --}}

    <!-- JavaScript to show/hide payment popup -->
    {{-- <script>
                        function showSuccessModal() {
                            $('#successModal').modal('show');
                        }

                        function showPaymentPopup() {
                            var popup = document.getElementById('paymentPopup');
                            popup.style.display = 'block';
                        }

                        function closePaymentPopup() {
                            var popup = document.getElementById('paymentPopup');
                            popup.style.display = 'none';
                        }

                        function confirmPayment() {  --}}
    {{-- // You can perform any validation here before proceeding with payment
                            // For now, let's directly open the Razorpay popup
                            var options = {
                                "key": "rzp_test_ci8sxj5IUpXRv1",
                                "amount": "30000",
                                "currency": "INR",
                                "description": "Acme Corp",
                                "prefill": {
                                    "email": "myemail@example.com",
                                    "contact": "+919900000000"
                                },
                                "handler": function(response) {
                                    // Handle successful payment response here
                                    alert('Payment successful!');
                                    // You may want to submit the form after successful payment
                                    document.getElementById('paymentForm').submit();
                                },
                                "modal": {
                                    "ondismiss": function() {
                                        console.log("Checkout form closed by the user");
                                    }
                                }
                            };
                            var rzp = new Razorpay(options);
                            rzp.open();
                        }
                    </script> --}}
    {{-- </form>
            </div>
        </div>
    </div> --}}
    {{-- script for country state city started --}}
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
