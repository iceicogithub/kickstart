@extends('includes.admin.main')
@section('title')
    Edit Topic
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
                                            aria-hidden="true"></i>Edit Topic</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form id="myForm" action="{{ route('topic.update', $topic->id) }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-folder"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" name="topic" class="form-control"
                                                            placeholder="Topic Name" value="{{ $topic->topic }}">
                                                    </div>
                                                    @error('topic')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-star"
                                                                aria-hidden="true"></i></span>
                                                        <select id="chapterSelect" name="chapter_id"
                                                            class="form-control pro-edt-select form-control-primary">
                                                            @foreach ($chapter as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ $topic->chapter_id == $item->id ? 'selected' : '' }}>
                                                                    {{ $item->chapter }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-star"
                                                                aria-hidden="true"></i></span>
                                                        <select id="category_id" name="category_id"
                                                            class="form-control pro-edt-select form-control-primary">
                                                            <option selected disabled>Select Category</option>
                                                            @foreach ($category as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ $topic->category_id == $item->id ? 'selected' : '' }}>
                                                                    {{ $item->category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('category_id')
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
                                                                    {{ $topic->status_id == $item->id ? 'selected' : '' }}>
                                                                    {{ $item->status }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('status_id')
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $('#category_id').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        type: 'GET',
                        url: '/get-chapters/' + category_id,
                        success: function(data) {
                            $('#chapterSelect').empty();
                            $('#chapterSelect').append(
                                '<option selected disabled>Select Chapter</option>');
                            $.each(data, function(key, value) {
                                $('#chapterSelect').append('<option value="' + key +
                                    '">' + value + '</option>');
                            });
                            // Select the chapter based on the selected value from database
                            var selectedChapter = "{{ $topic->chapter_id }}";
                            $('#chapterSelect').val(selectedChapter);
                        }
                    });
                } else {
                    $('#chapterSelect').empty();
                    $('#chapterSelect').append('<option selected disabled>Select Chapter</option>');
                }
            });
        });
    </script>
@endsection
