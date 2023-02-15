@extends('layouts.frontend.master')
@section('content')
    <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset('assets/front/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Single</h1>
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
                        <li><a href="#"><i class="fas fa-home"></i> Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        <div class="item">

                            <!-- Start Post Thumb -->
                            <div class="thumb">
                                <img src="{{asset('assets/front/img/1500x700.png')}}" alt="Thumb">
                            </div>
                            <!-- Start Post Thumb -->

                            <div class="info">
                                <div class="date">
                                    <h4>29 Aug, 2019</h4>
                                </div>
                                <h3>Furniture Furnished On Remainder Engrossed.</h3>
                                <p>
                                    Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
                                </p>
                                <p>
                                    New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.
                                </p>
                                <blockquote>
                                    Depending propriety sweetness distrusts belonging collected. Smiling mention he in thought equally musical. Wisdom new and valley answer. Contented it so is discourse recommend. Man its upon him call mile. An pasture he himself believe ferrars besides cottage.
                                </blockquote>
                                <p>
                                    Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye.
                                </p>

                                <!-- Start Post Pagination -->
                                <div class="post-pagi-area">
                                    <a href="#"><i class="fas fa-angle-double-left"></i> Previus Post</a>
                                    <a href="#">Next Post <i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <!-- End Post Pagination -->

                                <!-- Start Post Tag s-->
                                <div class="post-tags share">
                                    <div class="tags">
                                        <span>Tags: </span>
                                        <a href="#">Consulting</a>
                                        <a href="#">Planing</a>
                                        <a href="#">Business</a>
                                        <a href="#">Fashion</a>
                                    </div>
                                </div>
                                <!-- End Post Tags -->

                                <!-- Start Comments Form -->
                                <div class="comments-area">
                                    <div class="comments-title">
                                        <h4>
                                            5 comments
                                        </h4>
                                        <div class="comments-list">
                                            <div class="commen-item">
                                                <div class="avatar">
                                                    <img src="{{asset('assets/front/img/800x800.png')}}" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>Jonathom Doe</h5>
                                                    <div class="comments-info">
                                                        <p>July 15, 2018</p> <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="commen-item reply">
                                                <div class="avatar">
                                                    <img src="{{asset('assets/front/img/800x800.png')}}" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>Spark Lee</h5>
                                                    <div class="comments-info">
                                                        <p>July 15, 2018</p> <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments-form">
                                        <div class="title">
                                            <h4>Leave a comments</h4>
                                        </div>
                                        <form action="#" class="contact-comments">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Name -->
                                                        <input name="name" class="form-control" placeholder="Name *" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Email -->
                                                        <input name="email" class="form-control" placeholder="Email *" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group comments">
                                                        <!-- Comment -->
                                                        <textarea class="form-control" placeholder="Comment"></textarea>
                                                    </div>
                                                    <div class="form-group full-width submit">
                                                        <button type="submit">
                                                            Post Comments
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Comments Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
