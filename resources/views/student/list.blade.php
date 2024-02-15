@extends('includes.admin.main')
@section('title')
    Students List
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
    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Students List</h4>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Profile</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Profession</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($student as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @php
                                                $profileImagePath = public_path('admin/upload/profile/' . $item->profile_image);
                                            @endphp

                                            @if (file_exists($profileImagePath))
                                                <img src="{{ asset('admin/upload/profile/' . $item->profile_image) }}"
                                                    alt="">
                                            @else
                                                <img src="{{ asset('admin/img/user.png') }}" alt="">
                                            @endif
                                        </td>
                                        <td>{{ $item->studentDetail->fullname ?: 'N/A' }}</td>
                                        <td>{{ $item->email ?: 'N/A' }}</td>
                                        <td>{{ $item->phone ?: 'N/A' }}</td>
                                        <td>{{ $item->profession ?: 'N/A' }}</td>
                                        <td>
                                            <button class="pd-setting-ed">
                                                <a href="{{ route('student.view', ['id' => $item->id]) }}"
                                                    class="pd-setting-ed view-details-btn" data-toggle="tooltip"
                                                    title="View All Details" data-original-title="View All Details">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
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
