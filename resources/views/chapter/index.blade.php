@extends('includes.admin.main')
@section('title')
    Create Chapter
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div id="successAlert" class="alert alert-success container text-capitalize">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Success!</strong> {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="errorAlert" class="alert alert-danger container text-capitalize">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Error!</strong> {{ session('error') }}
        </div>
    @endif

    @if (session('delete'))
        <div id="errorAlert" class="alert alert-danger container text-capitalize">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Error!</strong> {{ session('delete') }}
        </div>
    @endif

    <div class="single-product-tab-area mg-b-30">
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="icon nalika-edit"
                                            aria-hidden="true"></i>Create Chapter</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form id="myForm" action="{{ route('chapter.store') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-folder"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" name="chapter" class="form-control"
                                                            placeholder="Chapter Name" value="{{ old('chapter') }}">
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
                                                                <option value="{{ $item->id }}">{{ $item->status }}
                                                                </option>
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
                                                                <option value="{{ $item->id }}">
                                                                    {{ $item->category }}
                                                                </option>
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

    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Chapter List</h4>
                        <table id="datatable">
                            <tbody>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Chapter Name</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($chapter as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->chapter }}</td>
                                        <td>{{ $item->category->category ?? 'N/A' }}</td>
                                        <td>{{ $item->status->status ?? 'N/A' }}</td>
                                        <td>
                                            <button class="pd-setting-ed">
                                                <a href="{{ route('chapter.edit', ['id' => $item->id]) }}"
                                                    class="pd-setting-ed view-details-btn" data-toggle="tooltip"
                                                    title="Edit Details" data-original-title="Edit Details">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </a>
                                            </button>
                                            <button class="pd-setting-ed">
                                                <a href="{{ route('chapter.destroy', ['id' => $item->id]) }}"
                                                    class="pd-setting-ed view-details-btn" data-toggle="tooltip"
                                                    title="Trash" data-original-title="Trash"
                                                    onclick="return confirm('Are you sure you want to delete this chapter?');">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
