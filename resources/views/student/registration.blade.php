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
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            border: none;
        }

        .form-bg {
            background-color: #686bed;
        }





        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .tbl-input {
            width: 100%;
        }

        @media screen and (max-width: 600px) {

            /* Adjust styling for smaller screens */
            th,
            td {
                /* display: flex; */
                width: 100%;
                box-sizing: border-box;
                /* overflow: scroll; */
            }

            inputs {
                width: calc(100% - 16px);
                /* Adjust input width with padding */
            }


            .tbl-scroll {
                overflow: scroll;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid p-5">
        <a href="{{ url('/') }}" class="btn btn-outline-primary m-2">Back</a>
        <div class="container-fluid form-bg p-5 rounded-4 shadow-lg">
            <p class="fs-2 fw-bold text-decoration-underline text-light text-uppercase">Student Registration
                Form
            </p>
            <form method="POST" class="form-bg">
                <div class="mb-3 row">
                    <div class="col-md-2">
                        <label for="name" class="col-form-label fw-bold text-light">FIRST NAME</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="Fname">
                    </div>
                </div>
                <!-- --------------------------------------------------------------------------------------------------------   -->
                <div class="mb-3 row">
                    <div class="col-md-2">
                        <label for="name" class=" col-form-label fw-bold text-light">LAST NAME</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="Lname">
                    </div>
                </div>
                <!-- ---------------------------------------------------------------------------------------------   -->
                <div class="mb-3 row">
                    <div class="col-md-2">
                        <label for="date" class=" col-form-label fw-bold text-light">Date of Birth:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="date" value="" class="form-control">
                    </div>
                </div>

                <!-- -----------------------------------------------------------------------------       -->


                <div class="mb-3 row">
                    <div class="col-md-2">
                        <label for="email" class=" col-form-label fw-bold text-light">EMAIL ID</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="email">
                    </div>
                </div>

                <!-- --------------------------------------------------------------------------   -->

                <div class="mb-3 row">
                    <div class="col-md-2">
                        <label for="phone" class=" col-form-label fw-bold text-light">MOBILE NUMBER</label>
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="phone">
                    </div>
                </div>

                <!-- ---------------------------------------------------------------------   -->

                <div class="mb-3 row">
                    <div class="col-md-2">
                        <label for="gende" class=" col-form-label fw-bold text-light">GENDER</label>
                    </div>
                    <div class="col-md-6 mt-2 ">
                        <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label px-2 text-light" for="flexRadioDefault1">
                            Male
                        </label>
                        <input class="form-check-input ms-3" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label px-2 text-light" for="flexRadioDefault1">
                            Female
                        </label>
                    </div>
                </div>


                <div class="my-3 row ">
                    <div class="col-md-2">
                        <label for="address" class=" col-form-label fw-bold text-light">ADDRESS</label>
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                </div>


                <div class="my-3 row ">
                    <div class="col-md-2">
                        <label for="city" class=" col-form-label fw-bold text-light">CITY</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="city">
                    </div>
                </div>


                <div class="my-3 row ">
                    <div class="col-md-2">
                        <label for="pincode" class=" col-form-label fw-bold text-light">PIN CODE</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="city">
                    </div>
                </div>



                <div class="my-3 row ">
                    <div class="col-md-2">
                        <label for="state" class=" col-form-label fw-bold text-light">STATE</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="state">
                    </div>
                </div>

                <div class="my-3 row ">
                    <div class="col-md-2">
                        <label for="state" class=" col-form-label fw-bold text-light">COUNTRY</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>SELECT COUNTRY</option>
                            <option value="1">INDIA</option>
                            <option value="2">ENGLAND</option>
                            <option value="3">RUSSIA</option>
                        </select>
                    </div>
                </div>


                <div class="my-3 row ">
                    <div class="col-md-2">
                        <label for="hobbies" class=" col-form-label fw-bold text-light">HOBBIES</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check ">
                            <label class="form-check-label fw-bold text-light" for="flexCheckDefault">
                                Drawing
                                <input class="" type="checkbox" id="vehicle1" name="vehicle1" value=""
                                    class="">
                            </label>
                            <label class="form-check-label fw-bold text-light" for="flexCheckDefault">
                                Singing
                                <input type="checkbox" id="vehicle1" name="vehicle1" value=""
                                    class="">
                            </label>

                            <label class="form-check-label fw-bold text-light" for="flexCheckDefault">
                                Dancing
                                <input type="checkbox" id="vehicle1" name="vehicle1" value=""
                                    class="">
                            </label>
                            <label class="form-check-label me-2 fw-bold text-light" for="">
                                Skatching
                                <input type="checkbox" id="vehicle1" name="vehicle1" value=""
                                    class="">
                            </label>
                        </div>
                    </div>
                </div>


                <div class="my-3 row text-light col-md-12">
                    <label for="qualification" class=" col-form-label fw-bold text-light">QUALIFICATION</label>

                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-12 tbl-scroll">

                    <table>
                        <thead>
                            <tr>
                                <th class="text-light">Sr. No</th>
                                <th class="text-light">Examination</th>
                                <th class="text-light">Board</th>
                                <th class="text-light">Percentage</th>
                                <th class="text-light">Year of Passing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold text-light">1</td>
                                <td class="fw-bold text-light">Class X</td>
                                <td><input type="text" class="tbl-input" name="board[]" id="input-fields" /></td>
                                <td><input type="text" class="tbl-input" name="percentage[]" id="input-fields" />
                                </td>
                                <td><input type="text" class="tbl-input" name="yearOfPassing[]"
                                        id="input-fields" /></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-light">2</td>
                                <td class="fw-bold text-light">Class XII</td>
                                <td><input type="text" class="tbl-input" name="board[]" id="input-fields" /></td>
                                <td><input type="text" class="tbl-input" name="percentage[]" id="input-fields" />
                                </td>
                                <td><input type="text" class="tbl-input" name="yearOfPassing[]"
                                        id="input-fields" /></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-light">3</td>
                                <td class="fw-bold text-light">Graduation</td>
                                <td><input type="text" class="tbl-input" name="board[]" id="input-fields" /></td>
                                <td><input type="text" class="tbl-input" name="percentage[]" id="input-fields" />
                                </td>
                                <td><input type="text" class="tbl-input" name="yearOfPassing[]"
                                        id="input-fields" /></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-light">4</td>
                                <td class="fw-bold text-light">Masters</td>
                                <td><input type="text" class="tbl-input" name="board[]" id="input-fields" /></td>
                                <td><input type="text" class="tbl-input" name="percentage[]" id="input-fields" />
                                </td>
                                <td><input type="text" class="tbl-input" name="yearOfPassing[]"
                                        id="input-fields" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- -----------------------------------------------------------   -->

                </div>

                <div class="my-3 row ">
                    <div class="col-md-2 align-self-center">
                        <label for="hobbies" class=" col-form-label fw-bold text-light">COURCES APPLIED
                            FOR</label>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <input class="form-check-input " type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label px-2 fw-bold text-light" for="flexRadioDefault1">
                            BCA
                        </label>

                        <input class="form-check-input " type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label px-2 fw-bold text-light" for="flexRadioDefault1">
                            BBA
                        </label>

                        <input class="form-check-input " type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label px-2 fw-bold text-light" for="flexRadioDefault1">
                            BSC
                        </label>

                    </div>
                </div>

                <div class="buttons d-flex align-items-center justify-content-center">
                    <button type="button" class="btn btn-secondary btn-sm fw-bold me-3 text-light">SUBMIT</button>
                    <button id="resetButton" type="reset"
                        class="btn btn-dark btn-sm fw-bold text-light">RESET</button>
                </div>

            </form>
        </div>
    </div>

    <script>
        document.getElementById('resetButton').addEventListener('click', function() {
            // Select all input fields, select dropdowns, and textarea inside the form
            var formElements = document.querySelectorAll('#myForm input, #myForm select, #myForm textarea');

            // Loop through each form element and reset its value
            formElements.forEach(function(element) {
                if (element.type === 'checkbox' || element.type === 'radio') {
                    // For checkboxes and radio buttons, uncheck them
                    element.checked = false;
                } else {
                    // For other input fields, select dropdowns, and textarea, reset their value to empty
                    element.value = '';
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>