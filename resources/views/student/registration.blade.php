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

    <div class="container-fluid main_box d-flex align-items-center justify-content-center py-5">

        {{-- <div class="text-start sub_box col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <p class="side_content text-white fw-bold display-5 text-start">KickStart Your Career With Us</p>
        </div> --}}
        <div class="card form_card col-xxl-7 col-xl-7 col-lg-77 col-md-7 col-sm-12 col-12 shadow px-2">
            <div class="py-1 bg-warning"></div>

            <div class="text-center my-3">
                <img src="{{ asset('img/kickstart.jpeg') }}" class="logo_img">
            </div>

            <p class="fw-bold h5 text-start ps-2 py-3">Personal Details:</p>

            <form method="post" action="{{ route('store.student') }}">
                @csrf
                @foreach($formData as $data)
                <div class="d-lg-flex d-md-flex d-sm-flex">
                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="First Name" aria-label="Username"
                            aria-describedby="basic-addon1" name="firstname">
                    </div>

                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Last Name" aria-label="Username"
                            aria-describedby="basic-addon1" name="lastname">
                    </div>
                </div>

                <div class="d-lg-flex d-md-flex d-sm-flex">
                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email" aria-label="Username"
                            aria-describedby="basic-addon1" name="email" value="{{ $data->email ?? '' }}">
                    </div>

                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-mobile"></i></span>
                        <input type="number" class="form-control" placeholder="Mobile" aria-label="Username"
                            aria-describedby="basic-addon1" name="phone" value="{{ $data->phone ?? '' }}">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 ms-2">
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
                <!-- </div> -->

                {{-- <div class="d-flex">
                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-mobile"></i></span>
                        <input type="number" class="form-control" placeholder="Mobile" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                </div> --}}

                <div class="input-group mb-4 px-2">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-location-dot"></i></span>
                    <input type="text" class="form-control" placeholder="Address" aria-label="Username"
                        aria-describedby="basic-addon1" name="address" value="{{ $data->address ?? '' }}">
                </div>

                <div class="d-lg-flex d-md-flex d-sm-flex">
                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-map-pin"></i></span>
                        <input type="text" class="form-control" placeholder="State" aria-label="Username"
                            aria-describedby="basic-addon1" name="state" value="{{ $data->state ?? '' }}">
                    </div>

                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-city"></i></span>
                        <input type="text" class="form-control" placeholder="City" aria-label="Username"
                            aria-describedby="basic-addon1" name="city" value="{{ $data->city ?? '' }}">
                    </div>
                </div>

                {{-- clg-details --}}

                <p class="fw-bold h5 text-start ps-2 py-3">College Details:</p>

                <div class="input-group mb-4 px-2">
                    <span class="input-group-text" id="basic-addon1"><i
                            class="fa-solid fa-building-columns"></i></span>
                    <input type="text" class="form-control" placeholder="College name" aria-label="Username"
                        aria-describedby="basic-addon1" name="college_name" value="{{ $data->college_name ?? '' }}">
                </div>

                <div class="d-lg-flex d-md-flex d-sm-flex">
                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i
                                class="fa-solid fa-calendar-days"></i></span>
                        <input type="text" class="form-control" placeholder="Year" aria-label="Username"
                            aria-describedby="basic-addon1" name="year" value="{{ $data->year ?? '' }}">
                    </div>

                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i
                                class="fa-solid fa-code-branch"></i></span>
                        <input type="text" class="form-control" placeholder="Branch" aria-label="Username"
                            aria-describedby="basic-addon1" name="branch" value="{{ $data->branch ?? '' }}">
                    </div>
                </div>

                <div class="d-lg-flex d-md-flex d-sm-flex">
                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control" placeholder="Area of Interest"
                            aria-label="Username" aria-describedby="basic-addon1" name="area_of_interest"
                            value="{{ $data->area_of_interest ?? ''}}">
                    </div>

                    <div class="input-group mb-4 px-2">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-percent"></i></span>
                        <input type="text" class="form-control" placeholder="CGPA/%" aria-label="Username"
                            aria-describedby="basic-addon1" name="cgpa" value="{{ $data->cgpa ?? ''}}">
                    </div>
                    @endforeach
                </div>

                <div class="my-4 text-center">
                    <button type="submit" class="btn btn-warning col-5 shadow">SUBMIT</button>
                </div>
                {{-- <div class="my-4 text-center">
                    <button type="button" onclick="showPaymentPopup()" class="btn btn-warning col-5 shadow">Pay Registration Fee</button>
                </div> --}}

                <!-- Payment popup -->
                {{-- <div id="paymentPopup" style="display: none;">
                    <h2>Payment Form</h2>
                    <!-- Razorpay Payment Form -->
                    <form id="paymentForm" action="{{ route('process.payment') }}" method="POST">
                        @csrf
                        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                        <button type="button" onclick="confirmPayment()" class="btn btn-success">Confirm Payment</button> <!-- New Confirm Payment button -->
                        <input type="hidden" custom="Hidden Element" name="hidden">
                    </form>
                    <!-- End of Razorpay Payment Form -->
            
                    <!-- Close button for the popup -->
                    <button type="button" onclick="closePaymentPopup()">Close</button>
                </div>
            
                <!-- Success Modal -->
                <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                    <!-- Your success modal content -->
                </div>
            
                <!-- JavaScript to show/hide payment popup -->
                <script>
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
                    function confirmPayment() {
        // You can perform any validation here before proceeding with payment
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
            </form>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>
