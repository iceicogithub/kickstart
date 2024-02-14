@extends('includes.front.main')

@section('title')
    Home
@endsection

@section('style')

@endsection

@section('content')
<div class="container">
    <div class="row mt-4">

        <div class="col-md-12 col-lg-6">
            <img src="{{'img/rotate.png'}}" class="rotate-y-image" alt="" >
            <img src="{{'img/triangle.svg'}}" class="rotate" alt="">
            <div class="text-box">
                <p class="display-5 main-text" style="color: #6084a4">Unlock Your Potential With <span class="main-text-sapn text-dark fw-semibold">'Bharat Intern'</span></p>
                <p class="text text-capitalize fw-light">Our goal is to empower the next generation of tech leaders. Our internship program offers hands-on experience in different fields.</p>
                <button class="btn-part btn mt-3 mx-3 py-2 px-4">GET STARTED</button>
            </div>
        </div>

        <div class="col-md-12 col-lg-6 ">
            <img src="{{asset('img/cross.svg')}}" class="cross-img" alt="">
            <img src="{{ asset('img/firsttop.png') }}" alt="" class="img-fluid">
        </div>

    </div>
</div>
@endsection

@section('script')
@endsection
