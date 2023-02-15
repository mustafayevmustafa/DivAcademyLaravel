<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{asset('assets/backend/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/backend/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Admins</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>About us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('blog.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Blogs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('category.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contact</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('review.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Customer reviews</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('faq.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Faq</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('intention.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Intention</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('portfolio.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Portfolio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('section.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Section</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('service.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Service</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('setting.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Setting</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('slider.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Slider</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('team.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Team</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('video')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Video</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
