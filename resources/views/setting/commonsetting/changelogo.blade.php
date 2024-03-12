@extends('includes.admin.main')
@section('title')
    Home
@endsection
@section('style')
    <style>
        .footer-copyright-area {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px 0;
            text-align: center;
        }

        .btn-color {
            background-color: #152036;
            color: #fff;
        }
    </style>
@endsection
@section('content')
    <div class="section-admin container-fluid">
        <div class="breadcome-area">
            <div class="container-fluid" style="padding:0;">
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row admin ">
            <div class="col-md-12">
                <div class="review-tab-pro-inner">
                    <ul id="myTab3" class="tab-review-design">
                        <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i>Select
                                Logo</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <form id="myForm" action="{{url('/change/logo')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon">
                                                    <input type="file" name="image " class="form-control"
                                                        placeholder="Select Logo" value=""></span>
                                            </div>
                                        </div>

                                        <div class="text-center custom-pro-edt-ds">
                                            <button type="submit"
                                                class="btn btn-ctl-bt waves-effect waves-light">Submit</button>
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
@endsection
@section('script')
@endsection
