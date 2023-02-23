@extends('layouts.frontend.master')
@section('content')

    <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
         style="background-image: url({{asset('assets/frontend/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
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
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Comment List
    ============================================= -->
    <div class="contact-list-area text-center">
        <div class="container">
            <div class="row">
                <!-- Start Comment Info -->
                <div class="contact-info">
                    <div class="col-md-4 col-sm-4 single">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="info">
                                <h4>Call Us</h4>
                                <span>{!! settings('phone') !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 single">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <h4>Address</h4>
                                <span>{!! settings('address') !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 single">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info">
                                <h4>Email Us</h4>
                                <span>{!! settings('email') !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Comment Info -->
            </div>
        </div>
    </div>
    <!-- End Comment List -->

    <!-- Start Comment
    ============================================= -->
    <div class="contact-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-5 contact-form">
                    <div class="info">
                        <h2>Let's lalk about your idea</h2>
                        <p>
                            Our next drew much you with rank. Tore many held age hold rose than our. She is literature
                            sentiments any contrasted. Set aware joy sense young now tears china shy.
                        </p>
                        <form action="{{route('comment.store')}}" method="POST" class="contact-form">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                               type="text">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                               type="email">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                               type="tel">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comment"
                                                  placeholder="Tell Us About Project *"></textarea>
                                        @error('comment')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Comment -->
@endsection
@section('scripts')
@include('layouts.frontend.homescripts')
@endsection
