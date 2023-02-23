<!-- Start Our Goal
    ============================================= -->
<div class="our-goal-area default-padding top-border">
    <div class="container">
        <div class="row">
            <div class="goal-items goal-carousel owl-carousel owl-theme">
                @foreach($goals as $goal)
                    <!-- Single Item -->
                    <div class="item">
                        <div class="col-md-6 thumb">
                            <img src="{{asset('uploads/intentions/'.$goal->image)}}" alt="{{$goal->title}}"
                                 height="500px" >
                        </div>
                        <div class="col-md-6 info">
                            <h2>{{$goal->title}}</h2>
                            <p>{{$goal->content}}</p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Our Goal -->
