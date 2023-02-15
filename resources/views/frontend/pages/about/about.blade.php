@extends('layouts.frontend.master')
@section('content')
    <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
         style="background-image: url({{asset('assets/img/2440x1578.png')}});">
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

    <!-- Start Work Process
    ============================================= -->
    <div class="work-process-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Work Process</h2>
                        <span class="devider"></span>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                            examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="process-items text-center">
                    <div class="col-md-4 col-sm-4 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-newspaper"></i>
                                <h4>Discuss</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-chart-line"></i>
                                <h4>Analysis</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="fas fa-check-double"></i>
                                <h4>Launch</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Process -->

    <!-- Start Services
    ============================================= -->
    <div class="services-area thumb-less default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>What we offer</h2>
                        <span class="devider"></span>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                            examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-items">
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <h4>Financial Planning</h4>
                            <p>
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end
                                literature. Gay direction neglected but supported yet her.
                            </p>
                            <div class="icon">
                                <i class="flaticon-document"></i> <span>01</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <h4>Investment Planning</h4>
                            <p>
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end
                                literature. Gay direction neglected but supported yet her.
                            </p>
                            <div class="icon">
                                <i class="flaticon-plan"></i> <span>02</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <h4>Mutual Funds</h4>
                            <p>
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end
                                literature. Gay direction neglected but supported yet her.
                            </p>
                            <div class="icon">
                                <i class="flaticon-piggy-bank"></i> <span>03</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <h4>Saving & Investments</h4>
                            <p>
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end
                                literature. Gay direction neglected but supported yet her.
                            </p>
                            <div class="icon">
                                <i class="flaticon-investment-1"></i> <span>04</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <h4>Markets Research</h4>
                            <p>
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end
                                literature. Gay direction neglected but supported yet her.
                            </p>
                            <div class="icon">
                                <i class="flaticon-stadistics"></i> <span>05</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <h4>Report Analysis</h4>
                            <p>
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end
                                literature. Gay direction neglected but supported yet her.
                            </p>
                            <div class="icon">
                                <i class="flaticon-analysis-1"></i> <span>06</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Team
    ============================================= -->
    @include('frontend.pages.home.team')
    <!-- End Team -->
@endsection
