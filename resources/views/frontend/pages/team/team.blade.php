@extends('layouts.frontend.master')
@section('content')

    <!-- Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
         style="background-image: url({{asset('assets/frontend/img/2440x1578.png')}});">
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
                        <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Team
    ============================================= -->
    <div class="team-area carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="team-items team-carousel owl-carousel owl-theme text-center">
                        @foreach($teams as $team)
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <div class="top-img">
                                        <a href="{{route('front.team.detail',$team->slug)}}">
                                            <img src="{{asset('uploads/team/image/'.$team->image)}}"
                                                 alt="{{$team->name.' '.$team->surname}}"  height="300">
                                        </a>
                                    </div>
                                    <div class="overlay">
                                        <ul>
                                            <li class="facebook">
                                                <a href="{{$team->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="{{$team->twitter}}"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="{{$team->twitter}}"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="{{$team->email}}"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="overlay">
                                        <h4>{{$team->name.' '.$team->surname}}</h4>
                                    </div>
                                    <span><strong>{{$team->profession}}</strong></span>
                                    <p>{{$team->description}}</p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->
@endsection
