@extends('layouts.frontend.master')
@section('content')
<!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset('assets/frontend/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Detail</h1>
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
                        <li><a href="#"><i class="fas fa-home"></i> HOME</a></li>
                        <li><a href="{{route('front.blogs')}}">BLOGS</a></li>
                        <li class="active">BLOG DETAIL</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        <div class="item">

                            <!-- Start Post Thumb -->
                            <div class="thumb">
                                <img src="{{asset('uploads/blogs/'.$blog->image)}}" alt="{{$blog->title}}">
                            </div>
                            <!-- Start Post Thumb -->

                            <div class="info">
                                <div class="date">
                                    <h4>{{$blog->created_at->format('d M, Y')}}</h4>
                                </div>
                                <h3>{{$blog->title}}</h3>
                                <p>{{$blog->content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
