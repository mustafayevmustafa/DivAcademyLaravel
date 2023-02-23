@extends('layouts.frontend.master')
@section('content')
        <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset('assets/frontend/img/2440x1578.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Services Details</h1>
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
                        <li class="active">Service Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services Single
    ============================================= -->
    <div class="services-single-area default-padding">
        <div class="container">
            <div class="row">
                <div class="services-info col-md-8">
                    <img src="{{asset('uploads/services/image/'.$service->image)}}" alt="{{$service->title}}"
                    style="max-height: 500px">
                    <h2>{{$service->title}}</h2>
                    <p>{{$service->content}}</p>
                    <a href="{{asset('uploads/services/pdf/'.$service->pdf_file)}}" class="btn btn-theme border btn-md"><i class="fas fa-file-pdf"></i> Download PDF</a>
                </div>
                <div class="sidebar col-md-4">
                    <!-- Single Item -->
                    <div class="sidebar-item link">
                        <div class="title">
                            <h4>Services</h4>
                        </div>
                        <ul>
                            @foreach($services as $service)
                                <li><a href="{{route('front.service.detail',$service->id)}}">{{$service->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="sidebar-item address">
                        <div class="title">
                            <h4>Need Help?</h4>
                        </div>
                        <ul>
                            <li>
                                <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                                <span>{!! settings('location') ?? '' !!}}</span>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <span>{!! settings('phone') ?? '' !!}</span>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                <span>{!! settings('phone') ?? '' !!}</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
{{--                    <div class="sidebar-item project">--}}
{{--                        <div class="title">--}}
{{--                            <h4>Services Details</h4>--}}
{{--                        </div>--}}
{{--                        <ul>--}}
{{--                            <li><span>Clients Name:</span> Jonathom Mark</li>--}}
{{--                            <li><span>Location:</span> 22 Baker Street</li>--}}
{{--                            <li><span>Completion dates:</span> 16 Dec, 2019</li>--}}
{{--                            <li><span>Advisor:</span> Mark Henri</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Single -->
@endsection
