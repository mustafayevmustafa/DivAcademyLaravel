<!-- Start About
    ============================================= -->
<div class="about-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 thumb">
                <img src="{{asset('assets/frontend/img/800x800.png')}}" alt="Thumb">
            </div>
            <div class="col-md-8 tabs-items">
                <div class="row">

                    <div class="tab-navs col-md-4">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            @php($i=1)
                            @foreach($abouts as $about)
                                <li class="{{$loop->first ? 'active' : ''}}">
                                    <a data-toggle="tab" href="#tab{{$i}}" aria-expanded="true">
                                        <img src="{{asset('uploads/about/'.$about->icon)}}" width="50px"
                                             height="50"><br> {{$about->icon_title}}
                                    </a>
                                </li>
                                @php($i++)
                            @endforeach
                        </ul>
                        <!-- End Tab Nav -->
                    </div>

                    <div class="tab-content-box col-md-8">
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">

                            @php($i=1)
                            @foreach($abouts as $about)
                                <!-- Single Item -->
                                <div id="tab{{$i}}" class="tab-pane fade {{$loop->first ? 'active' : ''}} in">
                                    <div class="info title">
                                        <h2>{{$about->title}}</h2>
                                        <p>{{$about->description}}</p>
                                        <a class="btn btn-theme border btn-md" href="{{route('front.about.detail', $about->slug)}}">Read More</a>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                @php($i++)
                            @endforeach

                        </div>
                        <!-- End Tab Content -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->
