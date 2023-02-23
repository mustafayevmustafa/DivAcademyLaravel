<!-- Start Services
    ============================================= -->
<div class="services-area carousel-shadow half-bg inc-thumb default-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Our Services</h2>
                    <span class="devider"></span>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                        examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="services-items services-carousel owl-carousel owl-theme text-center">
                    @foreach($services as $service)
                        <!-- Single Item -->
                        <div class="item" style="height: 777px">
                            <div class="thumb">
                                <img src="{{asset('uploads/services/image/'.$service->image)}}" alt="Thumb" height="400px">
                                <div class="overlay">
                                    <a href="{{route('front.service.detail',$service->slug)}}">Read More</a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="icon">
                                    <i><img src="{{asset('uploads/services/logo/'.$service->logo)}}" alt="{{$service->title}}" style="width: 77px; height: 77px"></i>
                                </div>
                                <h4>
                                    <a href="{{route('front.service.detail',$service->slug)}}">{{$service->title}}</a>
                                </h4>
                                <p>
                                    {{$service->description}}
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->
