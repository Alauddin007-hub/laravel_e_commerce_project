<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/spacing.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/icon-dukamarket.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/main.css">
</head>

<body>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-chevrons-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area-start -->
    @include('frontend.layouts.header')
    <!-- header-area-end -->

    @yield('content')

    <!-- footer-area-start -->
    @include('frontend.layouts.footer')
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="{{asset('')}}assets/js/jquery.js"></script>
    <script src="{{asset('')}}assets/js/waypoints.js"></script>
    <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('')}}assets/js/swiper-bundle.js"></script>
    <script src="{{asset('')}}assets/js/nice-select.js"></script>
    <script src="{{asset('')}}assets/js/slick.js"></script>
    <script src="{{asset('')}}assets/js/magnific-popup.js"></script>
    <script src="{{asset('')}}assets/js/counterup.js"></script>
    <script src="{{asset('')}}assets/js/wow.js"></script>
    <script src="{{asset('')}}assets/js/isotope-pkgd.js"></script>
    <script src="{{asset('')}}assets/js/imagesloaded-pkgd.js"></script>
    <script src="{{asset('')}}assets/js/countdown.js"></script>
    <script src="{{asset('')}}assets/js/ajax-form.js"></script>
    <script src="{{asset('')}}assets/js/parallax-effect.min.js"></script>
    <script src="{{asset('')}}assets/js/meanmenu.js"></script>
    <script src="{{asset('')}}assets/js/main.js"></script>
</body>

</html>