@extends('includes.admin.main')
@section('title')
    Edit Chpater
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
                                            aria-hidden="true"></i>Edit Chapter</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form id="myForm" action="{{ route('chapter.update', $chapter->id) }}"
                                        method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-folder"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" name="chapter" class="form-control"
                                                            placeholder="Chapter Name" value="{{ $chapter->chapter }}">
                                                    </div>
                                                    @error('chapter')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-star"
                                                                aria-hidden="true"></i></span>
                                                        <select name="status_id"
                                                            class="form-control pro-edt-select form-control-primary">
                                                            <option selected disabled>Select Status</option>
                                                            @foreach ($status as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ $chapter->status_id == $item->id ? 'selected' : '' }}>
                                                                    {{ $item->status }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('status_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-star"
                                                                aria-hidden="true"></i></span>
                                                        <select name="category_id"
                                                            class="form-control pro-edt-select form-control-primary">
                                                            <option selected disabled>Select Category</option>
                                                            @foreach ($category as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ $chapter->category_id == $item->id ? 'selected' : '' }}>
                                                                    {{ $item->category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('category_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit"
                                                        class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save</button>
                                                    <button id="resetButton" type="reset"
                                                        class="btn btn-ctl-bt waves-effect waves-light">Reset</button>
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
