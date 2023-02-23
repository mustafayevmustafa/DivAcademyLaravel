@extends('layouts.frontend.master')
@section('content')
    <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
         style="background-image: url({{asset('assets/frontend/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Team Member</h1>
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
                        <li class="active">Team Member</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Team
    ============================================= -->
    <div class="team-single-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="thumb">
                        <img src="{{asset('uploads/team/image/'.$team->image)}}" alt="{{$team->name.' '.$team->surname}}">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="info">
                        <h2>Hi, I'm {{$team->name.' '.$team->surname}}</h2>
                        <span>{{$team->profession}}</span>
                        <p>{{$team->about}}</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td><i class="fas fa-envelope-open"></i> Email</td>
                                    <td>{{$team->email}}</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-phone"></i> Phone</td>
                                    <td>{{$team->phone}}</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-at"></i> PO Box</td>
                                    <td>{{$team->po_box}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{asset('uploads/team/pdf/'.$team->pdf_file)}}" class="btn btn-theme border btn-md"><i class="fas fa-file-pdf"></i> Download
                            Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->
@endsection
