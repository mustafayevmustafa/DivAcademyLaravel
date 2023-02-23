<!-- Start Services
    ============================================= -->
<div class="services-area thumb-less default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>What we offer</h2>
                    <span class="devider"></span>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                        examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="services-items">
                @php($i=1)
                @foreach($services as $service)
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <a href="{{route('front.service.detail',$service->slug)}}">
                            <div class="item">
                                <h4>{{$service->title}}</h4>
                                <p>{{$service->description}}</p>
                                <div class="icon">
                                    <img src="{{asset('uploads/services/logo/'.$service->logo)}}"
                                         alt="{{$service->title}}" height="50px"> <span>{{$i}}</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- End Single Item -->
                    @php($i++)
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Services -->
