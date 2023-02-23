        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <div class="widget">
                <h4 class="title">About Us</h4>
                <p>
                    {{ settings('about') ?? '' }}
                </p>
            </div>
            <div class="widget address">
                <h4 class="title">Office Location</h4>
                <ul>
                    <li>
                        <i class="fas fa-phone"></i>
                        {{ settings('phone') ?? '' }}
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        {{ settings('location') ?? '' }}
                    </li>
                    <li>
                        <i class="fas fa-envelope-open"></i>
                        {{ settings('email') ?? '' }}
                    </li>
                </ul>
            </div>
            <div class="widget opening-hours">
                <h4>Opening Hours</h4>
                <ul>
                    <li>
                        {{ settings('weekdays') ?? '' }} <span>{{ settings('weekday hours') ?? '' }}</span>
                    </li>
                    <li>
                        {{ settings('weekend weekdays') ?? '' }} <span>{{ settings('weekend weekday hours') ?? '' }}</span>
                    </li>
                </ul>
            </div>
            <div class="widget social">
                <h4 class="title">Connect With Us</h4>
                <ul class="link">
                    <li class="facebook"><a href="//{!! settings('facebook') ?? ''!!}"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter"><a href="//{!! settings('twitter') ?? ''!!}"><i class="fab fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="//{!! settings('pinterest') ?? ''!!}"><i class="fab fa-pinterest"></i></a></li>
                    <li class="dribbble"><a href="//{!! settings('dribbble') ?? ''!!}"><i class="fab fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->
