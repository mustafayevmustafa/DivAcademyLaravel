<!-- Start Testimonials
    ============================================= -->
<div class="testimonials-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 testimonial-box text-center">
                <div class="heading">
                    <h2>Customer Review</h2>
                </div>
                <div class="testimonial-items">
                    <div class="carousel slide" data-ride="carousel" data-interval="500000" id="testimonial-carousel">
                        <div class="carousel-inner">
                            @foreach($reviews as $review)
                                <div class="item {{$loop->first ? 'active' : ''}}">
                                    <p>{{$review->content}}</p>
                                    <h4>{{$review->fulname}}</h4>
                                    <span>{{$review->profession}}</span>
                                </div>
                            @endforeach
                        </div>
                        <!-- End Carousel Content -->

                        <!-- Carousel Indicators -->
                        <ol class="carousel-indicators">
                            @php($i=0)
                            @foreach($reviews as $review)
                                <li data-target="#testimonial-carousel" data-slide-to="{{$i}}"
                                    class="{{$loop->first ? 'active' : ''}}">
                                    <img src="{{asset('uploads/reviews/'.$review->image)}}" alt="{{$review->fulname}}">
                                </li>
                                @php($i++)
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Start Faq -->
            <div class="col-md-6 faq-area">
                <div class="heading">
                    <h2>Answer & Questions</h2>
                </div>
                <div class="acd-items acd-arrow">
                    <div class="panel-group symb" id="accordion">
                        @foreach($faqs as $faq)
                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                            {{$faq->question}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>{{$faq->answer}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End Faq -->
        </div>
    </div>
</div>
<!-- End Testimonials -->
