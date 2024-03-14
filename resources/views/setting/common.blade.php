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

        i {
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
                                            <h2>Common Settings</h2>
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
        <div class="row admin text-center">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="{{ Route('select.logo') }}">
                            <div class="admin-content analysis-progrebar-ctn text-center res-mg-t-15">
                                <i class="fa-solid fa-pen fa-3x"></i>
                                <h4 class="text-uppercase "><b>Change Logo</b></h4>
                            </div>
                        </a>
                    </div>

                    {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn text-center res-mg-t-15">
                            <h4 class="text-uppercase "><b>Change Logo</b></h4>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    @endsection
    @section('script')
    @endsection
