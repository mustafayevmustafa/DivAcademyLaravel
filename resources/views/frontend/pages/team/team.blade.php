@extends('layouts.frontend.master')
@section('content')

    <!-- Site Title -->
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset('assets/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Team Members</h1>
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
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Team
    ============================================= -->
    <div class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="team-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <div class="top-img">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </div>
                                <div class="overlay">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <div class="overlay">
                                    <h4>Jessica Jones</h4>
                                </div>
                                <span>Sales & Marketing / <strong>Mc Ins.</strong></span>
                                <p>
                                    Advice branch vanity or do thirty living. Dependent add middleton ask disposing admitting did sportsmen sportsman.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <div class="top-img">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </div>
                                <div class="overlay">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <div class="overlay">
                                    <h4>Mark Henri</h4>
                                </div>
                                <span>Senior Developer / <strong>Mc Ins.</strong></span>
                                <p>
                                    Advice branch vanity or do thirty living. Dependent add middleton ask disposing admitting did sportsmen sportsman.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <div class="top-img">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </div>
                                <div class="overlay">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <div class="overlay">
                                    <h4>Natasha</h4>
                                </div>
                                <span>Data Scientist / <strong>Mc Ins.</strong></span>
                                <p>
                                    Advice branch vanity or do thirty living. Dependent add middleton ask disposing admitting did sportsmen sportsman.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->
@endsection
