@extends('layouts.frontend.master')
@section('content')
    <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
         style="background-image: url({{asset('assets/frontend/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blogs</h1>
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
                        <li class="active">Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        @foreach($blogs as $blog)
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{route('front.blog.detail', $blog->slug)}}"><img
                                                src="{{asset('uploads/blogs/'.$blog->image)}}" alt="{{$blog->title}}"></a>
                                    </div>
                                    <div class="info">
                                        <div class="date">
                                            <h4>{{$blog->created_at->format('d M, Y')}}</h4>
                                        </div>
                                        <h4>
                                            <a href="{{route('front.blog.detail', $blog->slug)}}">{{$blog->title}}</a>
                                        </h4>
                                        <p>{{$blog->description}}</p>
                                        <a class="btn btn-theme border btn-md"
                                           href="{{route('front.blog.detail', $blog->slug)}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        @endforeach
                        <!-- Pagination -->
                        <div class="row">
                            <div class="d-flex justify-content-center">{!! $blogs->links() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Blog -->
@endsection
