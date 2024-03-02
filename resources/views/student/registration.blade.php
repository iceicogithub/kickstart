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
        .form-control {
            border: 1px solid #dcdcdc;
        }
        .sub-div {
         border: 2px solid green; 
        color: #000;
        }

        .form_img {
            width: 15rem;
        }
        .sub-title{
            color: #808080;
            font-size: 0.8rem;
        }
        .form_img_div {
            border-bottom: 1px solid #dcdcdc;
        } 
      
        
    </style>

    <div class="container my-5">
        {{-- <div class="col-lg-12 bg-dark text-white">
            <h3 class="text-center">Registration Form</h3>
        </div> --}}
        
        <div class="sub-div px-3">
            <div class="row py-4 form_img_div">

                <div class="col-lg-4 col-md-4 text-center">
                    <img src="{{ '/img/forms-cuate.png' }}" class="form_img" alt="">
                </div>

                <div class="col-lg-8 col-md-8 text-center d-flex justify-content-center align-items-center">
                    <h2 class="fw-bold text-success">Students Registration Form</h2>
                </div>

            </div>
            

            <form method="POST" action="" class="py-3 px-2">
                {{-- ----------------------------------------------------------------- --}}
                <div class="row">
                    <label for="exampleText" class="form-label fw-bold ">Students Form</label>
                    <div class="col-lg-6 col-md-6 mb-3">
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                        <label for="exampleText" class="form-label sub-title ps-1">First Name</label>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-3">
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                        <label for="exampleText" class="form-label sub-title ps-1">Last Name</label>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6">
                        <p for="exampleText" class="form-label fw-bold">Gender</p>
                        <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label px-2 " for="flexRadioDefault1">
                            Male
                        </label>

                        <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label px-2 " for="flexRadioDefault1">
                            FeMale
                        </label>

                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6">
                        <label for="exampleText" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6">
                        <label for="exampleText" class="form-label fw-bold">Phone</label>
                        <input type="number" class="form-control" id="phone" aria-describedby="emailHelp">
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <label for="exampleText" class="form-label fw-bold">Address</label>
                    <div class="col-lg-12 col-md-12">
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                        <label for="exampleText" class="form-label sub-title ps-1">Street Address</label>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <div class="col-lg-12 col-md-12">
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                        <label for="exampleText" class="form-label sub-title ps-1">Street Address Line 2</label>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-3">
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                        <label for="exampleText" class="form-label sub-title ps-1">City</label>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-3">
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                        <label for="exampleText" class="form-label sub-title ps-1">State</label>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <div class="col-lg-12 col-md-12">
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                        <label for="exampleText" class="form-label sub-title ps-1">Postal/Zip Code</label>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6">
                        <label for="exampleText" class="form-label fw-bold">College Name</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6">
                        <label for="exampleText" class="form-label fw-bold">Year</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6">
                        <label for="exampleText" class="form-label fw-bold">Branch</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6">
                        <label for="exampleText" class="form-label fw-bold">Area of Interest</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6">
                        <label for="exampleText" class="form-label fw-bold">CGPA / %</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                    </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}                
                <div class="buttons d-flex align-items-center justify-content-center">
                    <button type="button" class="btn btn-success  fw-bold me-3 text-light">SUBMIT & PAY</button>
                </div>
                {{-- ----------------------------------------------------------------- --}}                

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
