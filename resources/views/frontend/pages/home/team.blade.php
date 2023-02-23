<!-- Start Team
    ============================================= -->
<div class="team-area bg-gray default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Meet Our Teams</h2>
                    <span class="devider"></span>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                        examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-items text-center">
                @foreach($teams as $team)
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">

                                    <div class="top-img">
                                        <a href="{{route('front.team.detail',$team->slug)}}">
                                        <img src="{{asset('uploads/team/image/'.$team->image)}}"
                                             alt="{{$team->name.' '.$team->surname}}" height="300">
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
                                                <a href="{{$team->linkedin}}"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="{{$team->email}}"><i class="fa fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="info">
                                <div class="overlay">
                                    <h4>{{$team->name.' '.$team->surname}}</h4>
                                </div>
                                <span>{{$team->profession}}</span>
                                <p>{{$team->description}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Team -->
