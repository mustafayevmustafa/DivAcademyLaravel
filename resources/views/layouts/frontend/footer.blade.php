<!-- Start Footer
============================================= -->
<footer class="bg-dark text-light">
    <div class="container">
        <div class="row">

            <div class="f-items default-padding">

                <!-- Single Item -->
                <div class="col-md-4 item">
                    <div class="f-item about">
                        <img src="{{asset('assets/frontend/img/logo-light.png')}}" alt="Logo">
                        <p>
                            {!! settings('address') !!}
                        </p>
                        <ul>
                            <li>
                                <span>Office Hours: </span> {!! settings('Office Hours') !!}
                            </li>
                            <li>
                                <span>Email: </span> <a
                                    href="mailto:support@validtheme.com">{!! settings('email') !!}</a>
                            </li>
                        </ul>
                        <h2><i class="fas fa-phone"></i> {!! settings('phone') !!}</h2>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 item">
                    <div class="f-item link">
                        <h4>Services</h4>
                        <ul>
                            @foreach($services as $service)
                                <li><a href="{{route('front.service.detail',$service->id)}}">{{$service->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 item">
                    <div class="f-item recent-post">
                        <h4>Recent Posts</h4>
                        <ul>
                             @foreach($comments as $comment)
                                <li>
                                    <div class="info">
                                        <a href="#">{{$comment->comment}}</a>
                                        <div class="meta-title">
                                            <span class="post-date">{{$comment->created_at->format('d M, Y')}}</span> - By <a href="#">{{$comment->name}}</a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
