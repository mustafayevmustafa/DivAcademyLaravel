@extends('layouts.frontend.master')
@section('content')

        <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset('assets/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Services</h1>
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
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services
    ============================================= -->
    <div class="services-area thumb-less default-padding">
        <div class="container">
            <div class="row">
                <div class="services-items">
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <h4>Financial Planning</h4>
                            <p>
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
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
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
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
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
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
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
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
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
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
                                Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
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

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 testimonial-box text-center">
                    <div class="heading">
                        <h2>Customer Review</h2>
                    </div>
                    <div class="testimonial-items">
                        <div class="carousel slide" data-ride="carousel" data-interval="500000" id="testimonial-carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Junl Sarukh</h4>
                                    <span>CEO of Deluck</span>
                                </div>
                                <div class="item">
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Anil Spia</h4>
                                    <span>Director of Deluck</span>
                                </div>
                                <div class="item">
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Paul Munni</h4>
                                    <span>Developer of Deluck</span>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                    <img src="assets/img/100x100.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="1">
                                    <img src="assets/img/100x100.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="2">
                                    <img src="assets/img/100x100.png" alt="Thumb">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Start Faq -->
                <div class="col-md-6 faq-area">
                    <div class="heading">
                        <h2>Answer & Questions</h2>
                    </div>
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                            Do I need a business plan?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                            How long should a business plan be?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                            What goes into a business plan?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                            Where do I start?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                        </div>
                    </div>
                </div>
                <!-- End Faq -->
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

@endsection
