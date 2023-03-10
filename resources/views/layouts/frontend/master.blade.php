<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Deluck - Business Agency & Corporate Template">

    <!-- ========== Page Title ========== -->
    <title>Deluck - Business Agency & Corporate Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('assets/frontend/img/favicon.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/frontend/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/frontend/css/flaticon-set.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/frontend/css/magnific-popup.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/frontend/css/owl.carousel.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/frontend/css/owl.theme.default.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/frontend/css/animate.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/frontend/css/bootsnav.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/frontend/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/responsive.css')}}" rel="stylesheet"/>
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{asset('assets/frontendend/js/html5/html5shiv.min.js')}}"></script>
      <script src="{{asset('assets/frontendend/js/html5/respond.min.js')}}"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>
@include('layouts.frontend.header')
@yield('content')
@include('layouts.frontend.footer')
@include('layouts.frontend.scripts')
@yield('scripts')
{{--@stack('scripts')--}}

</body>
</html>
