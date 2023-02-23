@extends('layouts.frontend.master')
@section('content')
    <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
         style="background-image: url({{asset('assets/frontend/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Site Title -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
    ============================================= -->
    @include('frontend.pages.home.about')
    <!-- End About -->

    <!-- Start Services
    ============================================= -->
    @include('frontend.pages.service.services')
    <!-- End Services -->

    <!-- Start Team
    ============================================= -->
    @include('frontend.pages.home.team')
    <!-- End Team -->
@endsection
