<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 17:17:48 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('user/images/favicon/1.png')}}" type="image/x-icon">
    <title>@yield("title")</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap')}}"
        rel="stylesheet">
    <link
        href="{{asset('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap')}}"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('user/css/vendors/bootstrap.css')}}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{asset('user/css/animate.min.css')}}" />

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/vendors/font-awesome.css')}}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/vendors/feather-icon.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/vendors/slick/slick-theme.css')}}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/bulk-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/vendors/animate.css')}}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('user/css/style.css')}}">
</head>

<body class="bg-effect">

    <!-- Loader Start -->
    <!-- <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div> -->
    <!-- Loader End -->


        @include("user.layout.header");

        @yield("content");

        @include("user.layout.footer");








        <!-- latest jquery-->
        <script src="{{asset('user/js/jquery-3.6.0.min.js')}}"></script>

<!-- jquery ui-->
<script src="{{asset('user/js/jquery-ui.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('user/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('user/js/bootstrap/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('user/js/bootstrap/popper.min.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('user/js/feather/feather.min.js')}}"></script>
<script src="{{asset('user/js/feather/feather-icon.js')}}"></script>

<!-- Lazyload Js -->
<script src="{{asset('user/js/lazysizes.min.js')}}"></script>

<!-- Slick js-->
<script src="{{asset('user/js/slick/slick.js')}}"></script>
<script src="{{asset('user/js/slick/slick-animation.min.js')}}"></script>
<script src="{{asset('user/js/slick/custom_slick.js')}}"></script>

<!-- Auto Height Js -->
<script src="{{asset('user/js/auto-height.js')}}"></script>

<!-- Timer Js -->
<script src="{{asset('user/js/timer1.js')}}"></script>

<!-- Fly Cart Js -->
<script src="{{asset('user/js/fly-cart.js')}}"></script>

<!-- Quantity js -->
<script src="{{asset('user/js/quantity-2.js')}}"></script>

<!-- WOW js -->
<script src="{{asset('user/js/wow.min.js')}}"></script>
<script src="{{asset('user/js/custom-wow.js')}}"></script>

<!-- script js -->
<script src="{{asset('user/js/script.js')}}"></script>

<!-- thme setting js -->
<script src="{{asset('user/js/theme-setting.js')}}"></script>
</body>



</html>