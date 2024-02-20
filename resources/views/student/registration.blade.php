<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <style>
*
{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  border: none;
}
      .form-bg
      {
        background-color: #686bed;
      }
       




      table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .tbl-input {
            width: 100%;
        }

        @media screen and (max-width: 600px) {
            /* Adjust styling for smaller screens */
            th, td {
                /* display: flex; */
                width: 100%;
                box-sizing: border-box;
                /* overflow: scroll; */
            }

            inputs {
                width: calc(100% - 16px); /* Adjust input width with padding */
            }


            .tbl-scroll
{
  overflow: scroll;
}
        }

    </style>
</head>
<body>
    <div class="container-fluid ">
        <p class="h1 text-center">Student Registration Form</p>

        <div class="container-fluid form-bg p-5">
            <form  method="POST" class="form-bg" >

                <!-- <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label fw-bold text-light">FIRST NAME</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="Fname">
                    </div>
                  </div> -->
                  <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label fw-bold text-light">FIRST NAME</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="Fname">
                    </div>
                  </div>
<!-- --------------------------------------------------------------------------------------------------------   -->
                  <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label fw-bold text-light">LAST NAME</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="Lname">
                    </div>
                  </div>
<!-- ---------------------------------------------------------------------------------------------   -->
                  <div class="mb-3 row">
                    <label for="date" class="col-sm-2 col-form-label fw-bold text-light">Date of Birth:</label>
                    <div class="col-md-6">
                      <!-- <input type="text" class="form-control" id="Lname"> -->
                      <input type="date"
                         value="">
                    </div>
                  </div>

               <!-- -----------------------------------------------------------------------------       -->
                  

               <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label fw-bold text-light">EMAIL ID</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="email">
                </div>
              </div>

              <!-- --------------------------------------------------------------------------   -->
            
              <div class="mb-3 row">
                <label for="phone" class="col-sm-2 col-form-label fw-bold text-light">MOBILE NUMBER</label>
                <div class="col-md-6">
                  <input type="number" class="form-control" id="phone">
                </div>
              </div>

              <!-- ---------------------------------------------------------------------   -->

              <div class="mb-3 row">
                <label for="gende" class="col-sm-2 col-form-label fw-bold text-light">GENDER</label>
                <div class="col-md-6 mt-2 ">
                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label px-2 text-light" for="flexRadioDefault1">
                        Male
                      </label>
                    <input class="form-check-input ms-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label px-2 text-light" for="flexRadioDefault1">
                        Female
                      </label>
                </div>
              </div>


              <div class="my-3 row ">
                <label for="address" class="col-sm-2 col-form-label fw-bold text-light">ADDRESS</label>
                <div class="col-md-6">
                    <textarea class="form-control" placeholder="WRITE A ADDRESS" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
              </div>


              <div class="my-3 row ">
                <label for="city" class="col-sm-2 col-form-label fw-bold text-light">CITY</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="city">
                </div>
              </div>


              <div class="my-3 row ">
                <label for="pincode" class="col-sm-2 col-form-label fw-bold text-light">PIN CODE</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="city">
                </div>
              </div>



              <div class="my-3 row ">
                <label for="state" class="col-sm-2 col-form-label fw-bold text-light">STATE</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="state">
                </div>
              </div>
              



              <div class="my-3 row ">
                <label for="state" class="col-sm-2 col-form-label fw-bold text-light">COUNTRY</label>
                <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example">
                        <!-- <option selected>SELECT COUNTRY</option> -->
                        <option value="1">INDIA</option>
                        <option value="2">ENGLAND</option>
                        <option value="3">RUSSIA</option>
                      </select>
                   </div>
              </div>


              <div class="my-3 row ">
                <label for="hobbies" class="col-sm-2 col-form-label fw-bold text-light">HOBBIES</label>
                <div class="col-md-6">
                    <div class="form-check ">
                        <label class="form-check-label fw-bold text-light" for="flexCheckDefault">
                            Drawing
                            <input class="" type="checkbox" id="vehicle1" name="vehicle1" value="" class="">
                          </label>
                         

                        <!-- <input class="form-check-input" type="checkbox" value="" id=""> -->
                        
                        <!-- <div class="form-check"> -->
                            <label class="form-check-label fw-bold text-light" for="flexCheckDefault">
                                Singing
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="" class="">
                              </label>
                            
                          <!-- </div> -->
                          <!-- <div class="form-check"> -->
                            <label class="form-check-label fw-bold text-light" for="flexCheckDefault">
                                Dancing
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="" class="">
                              </label>
                            
                          <!-- </div> -->
                          <!-- <div class="form-check"> -->
                            <label class="form-check-label me-2 fw-bold text-light" for="">
                                Skatching
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="" class="">
                              </label>
                          <!-- </div> -->
                      </div>
                </div>
              </div>


              <div class="my-3 row text-light col-md-12">
                <label for="qualification" class="col-sm-2 col-form-label fw-bold text-light">QUALIFICATION</label>
                
              </div>
              <div class="col-md-12 col-lg-12 col-sm-12 col-12 tbl-scroll">
                <!-- <input type="text" class="form-control" id="city"> -->
                <!-- <table style="" class="col-sm-12 col-12 col-md-12">
                    <tr class="">
                      <td class="text-center">Sr.No</td>
                      <td class="text-center">Examination</td>
                      <td class="text-center">Board</td>
                      <td class="text-center">Percentage</td>
                      <td class="text-center">Year Of Passing</td>
                    </tr>
                    <tr class="" >
                        <td class="text-center">1</td>
                        <td class="text-center">Class X</td>
                        <td><input type="text" class="" id="input-fields"></td>
                        <td><input type="text" class="" id="input-fields"></td>
                        <td><input type="text" class="" id="input-fields"></td>

                    </tr>
                  </table> -->



                 <!-- -----------------------------------------------------   -->
                 <!-- /* <table class=" ">
                    <thead>
                        <tr>
                            <th>Sr. No</th>
                           
                            <th>Examination</th>
                            <th>Board</th>
                            <th>Percentage</th>
                            <th>Year of Passing</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td>1</td>
                            
                            <td>Class X</td>
                            <td><input type="text" name="board[]" id="input-fields"/></td>
                            <td><input type="text" name="percentage[]" id="input-fields" /></td>
                            <td><input type="text" name="yearOfPassing[]" id="input-fields" /></td>
                        </tr>
                        
                    </tbody>
                </table>  */ -->
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
                          <td><input type="text" class="tbl-input" name="board[]" id="input-fields"/></td>
                          <td><input type="text" class="tbl-input" name="percentage[]" id="input-fields" /></td>
                          <td><input type="text" class="tbl-input" name="yearOfPassing[]" id="input-fields" /></td>
                      </tr>
                      <tr>   
                        <td class="fw-bold text-light">2</td>
                        <td class="fw-bold text-light">Class XII</td>
                        <td><input type="text" class="tbl-input" name="board[]" id="input-fields"/></td>
                        <td><input type="text" class="tbl-input" name="percentage[]" id="input-fields" /></td>
                        <td><input type="text" class="tbl-input" name="yearOfPassing[]" id="input-fields" /></td>
                    </tr>
                    <tr>   
                      <td class="fw-bold text-light">3</td>
                      <td class="fw-bold text-light">Graduation</td>
                      <td><input type="text" class="tbl-input" name="board[]" id="input-fields"/></td>
                      <td><input type="text" class="tbl-input" name="percentage[]" id="input-fields" /></td>
                      <td><input type="text" class="tbl-input" name="yearOfPassing[]" id="input-fields" /></td>
                  </tr>
                  <tr>   
                    <td class="fw-bold text-light">4</td>
                    <td class="fw-bold text-light">Masters</td>
                    <td><input type="text" class="tbl-input" name="board[]" id="input-fields"/></td>
                    <td><input type="text" class="tbl-input" name="percentage[]" id="input-fields" /></td>
                    <td><input type="text" class="tbl-input" name="yearOfPassing[]" id="input-fields" /></td>
                </tr>
                  </tbody>
              </table>
<!-- -----------------------------------------------------------   -->
                
            </div>
              <!-- <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Default radio
                </label>
              </div> -->





              <div class="my-3 row ">
                <label for="hobbies" class="col-sm-2 col-form-label fw-bold text-light">COURCES APPLIED FOR</label>
                <div class="col-md-6 mt-3">
                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label px-2 fw-bold text-light" for="flexRadioDefault1">
                        BCA
                      </label>

                      <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label px-2 fw-bold text-light" for="flexRadioDefault1">
                        BBA
                      </label>

                      <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label px-2 fw-bold text-light" for="flexRadioDefault1">
                        BSC
                      </label>
                      
                </div>
              </div>

<div class="buttons d-flex align-items-center justify-content-center">
  <button type="button" class="btn btn-success btn-sm fw-bold text-light">SUBMIT</button>
  <button type="button" class="btn btn-info btn-sm fw-bold text-light">RESET</button>

</div>

            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>