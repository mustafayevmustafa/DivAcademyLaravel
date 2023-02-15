@extends('layouts.frontend.master')
@section('content')
    <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset('assets/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Gallery Grid Colum</h1>
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
                        <li class="active">Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".development">Development</button>
                            <button data-filter=".consulting">Consulting</button>
                            <button data-filter=".finance">Finance</button>
                            <button data-filter=".branding">Branding</button>
                            <button data-filter=".capital">Capital</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-3">
                                <!-- Single Item -->
                                <div class="pf-item development capital">
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                            <div class="item-inner">
                                                <h4>Startup Funding</h4>
                                                <p>Finance, Assets</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                            <div class="item-inner">
                                                <h4>Merger & Acquisition</h4>
                                                <p>Benefits, Business</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting finance">
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                            <div class="item-inner">
                                                <h4>Assets for technolodgy</h4>
                                                <p>Invest, Earning</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item finance">
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                            <div class="item-inner">
                                                <h4>Startup Funding</h4>
                                                <p>Source, Business</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item capital development">
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                            <div class="item-inner">
                                                <h4>Business Matching</h4>
                                                <p>Profit, Earning</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                            <div class="item-inner">
                                                <h4>Startup Funding</h4>
                                                <p>Finance, Assets</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
@endsection
