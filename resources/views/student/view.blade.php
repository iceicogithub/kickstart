@extends('includes.admin.main')
@section('title')
    Students View
@endsection
@section('style')
    <style>
        #myTab3 {
            display: flex;
            justify-content: space-between;
        }
    </style>
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
                                            aria-hidden="true"></i>Student Details</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form id="myForm" action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Profile :</label>
                                                        @php
                                                            $profileImagePath = public_path('admin/upload/profile/' . $studentDetail->profile_image);
                                                        @endphp

                                                        @if (file_exists($profileImagePath))
                                                            <img src="{{ asset('admin/upload/profile/' . $studentDetail->profile_image) }}"
                                                                alt="">
                                                        @else
                                                            <img src="{{ asset('admin/img/user.png') }}" alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Name : </label>
                                                        <span>{{ $studentDetail->name ?: 'N/A'}}</span>
                                                    </div>
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Email : </label>
                                                        <span>{{ $studentDetail->email ?: 'N/A'}}</span>
                                                    </div>
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Address :</label>
                                                        <span>{{ $studentDetail->address ?: 'N/A'}}</span>
                                                    </div>
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Github :</label>
                                                        <span>{{ $studentDetail->github ?: 'N/A'}}</span>
                                                    </div>
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Instagram :</label>
                                                        <span>{{ $studentDetail->instagram ?: 'N/A'}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Profession :</label>
                                                        <span>{{ $studentDetail->profession ?: 'N/A'}}</span>
                                                    </div>
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Phone :</label>
                                                        <span>{{ $studentDetail->phone ?: 'N/A'}}</span>
                                                    </div>
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Website :</label>
                                                        <span>{{ $studentDetail->website ?: 'N/A'}}</span>
                                                    </div>
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Twitter :</label>
                                                        <span>{{ $studentDetail->twitter ?: 'N/A'}}</span>
                                                    </div>
                                                    <div class="mg-b-pro-edt" style="color: white;font-size: 20px;">
                                                        <label>Facebook :</label>
                                                        <span>{{ $studentDetail->facebook ?: 'N/A'}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="custom-pro-edt-ds" style="padding-left: 15px;">
                                                    <button type="button"
                                                        class="btn btn-ctl-bt waves-effect waves-light"><a
                                                            href="{{ Route('student.list') }}"
                                                            style="color: white;">Back</a>
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
