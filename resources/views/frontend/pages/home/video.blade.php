    <!-- Start Video Area
    ============================================= -->
    <div class="video-area default-padding text-center half-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="heading">
                        <h2>
                            We offer <span>product design, manufacturing</span> and engineering management services.
                        </h2>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="thumb wow fadeInUp">
{{--                        <img src="{{asset('uploads/offer/image/'.$offer->image)}}" alt="Thumb">--}}
{{--                        <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">--}}
{{--                            <i class="fa fa-play"></i>--}}
{{--                        </a>--}}
                        @if($offer)
                                <video  height="500" controls autoplay="0" loop class="mt-3"
                                       poster="{{asset('uploads/offer/image/'.$offer->image)}}">
                                    <source src="{{asset('uploads/offer/video/'.$offer->video)}}">
                                    Your browser does not support the video tag.
                                </video><br>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Area -->
