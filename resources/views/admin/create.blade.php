@extends('includes.admin.main')
@section('title')
    Create Admin
@endsection
@section('style')
@endsection
@section('content')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="icon nalika-home"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Admin</h2>
                                        <p>Welcome to Kick-Start <span class="bread-ntd">Dashboard</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-report">
                                    {{-- <button data-toggle="tooltip" data-placement="left" title="Download Report"
                                        class="btn"><i class="icon nalika-download"></i></button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-tab-area mg-b-30">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="icon nalika-edit"
                                            aria-hidden="true"></i>Create Admin</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form id="myForm" action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="First Name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Product Title">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Regular Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Tax">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Quantity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Last Name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i
                                                                class="icon nalika-favorites-button"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Product Description">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Sale Price">
                                                    </div>  
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Category">
                                                    </div>
                                                    <select name="select"
                                                        class="form-control pro-edt-select form-control-primary">
                                                        <option selected>Select One Value Only</option>
                                                        <option value="opt2">2</option>
                                                        <option value="opt3">3</option>
                                                        <option value="opt4">4</option>
                                                        <option value="opt5">5</option>
                                                        <option value="opt6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="button"
                                                        class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                    </button>
                                                    <button id="resetButton" type="button"
                                                        class="btn btn-ctl-bt waves-effect waves-light">Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
