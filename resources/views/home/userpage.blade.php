<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clinz Laundry</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="home/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="home/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/assets/css/slicknav.css">
    <link rel="stylesheet" href="home/assets/css/flaticon.css">
    <link rel="stylesheet" href="home/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="home/assets/css/gijgo.css">
    <link rel="stylesheet" href="home/assets/css/animate.min.css">
    <link rel="stylesheet" href="home/assets/css/animated-headline.css">
    <link rel="stylesheet" href="home/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="home/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="home/assets/css/themify-icons.css">
    <link rel="stylesheet" href="home/assets/css/slick.css">
    <link rel="stylesheet" href="home/assets/css/nice-select.css">
    <link rel="stylesheet" href="home/assets/css/style.css">
</head>

<body>
    <!-- ? Preloader Start -->
    @include('home.preloader')
    <!-- Preloader Start -->
    {{-- header start --}}
    @include('home.header')
    {{-- header end --}}
    <main>
        <!--? slider Area Start-->
        @include('home.slider')
        <!-- slider Area End-->
        <!--? Services Area Start -->
        @include('home.services')
        <!-- Services End -->
        <!--? Offer-services Start  -->
        @include('home.offer-services')
        <!-- Offer-services End  -->
        <!--? Want To work -->
        {{-- @include('home.work-offer'); --}}
        <!-- Want To work End -->
        <!-- Testimonials_start -->
        @include('home.testimonial')
        {{-- @include('home.testimonial') --}}
        <!-- Testimonials_end -->
        <!--? Company achievement Start -->
        {{-- @include('home.achievement'); --}}
        <!-- Company achievement End -->
        <!--? About Area  -->
        @include('home.about')
        <!-- About Area End -->
        <!--?  Map Area start  -->
        @include('home.map')
        <!-- Map Area End -->
    </main>
    <footer>
        <!-- Footer Start-->
        @include('home.footer-start')
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="home/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="home/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="home/assets/js/popper.min.js"></script>
    <script src="home/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="home/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="home/assets/js/owl.carousel.min.js"></script>
    <script src="home/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="home/assets/js/wow.min.js"></script>
    <script src="home/assets/js/animated.headline.js"></script>
    <script src="home/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="home/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="home/assets/js/jquery.nice-select.min.js"></script>
    <script src="home/assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="home/assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="home/assets/js/jquery.counterup.min.js"></script>
    <script src="home/assets/js/waypoints.min.js"></script>
    <script src="home/assets/js/jquery.countdown.min.js"></script>
    <script src="home/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="home/assets/js/contact.js"></script>
    <script src="home/assets/js/jquery.form.js"></script>
    <script src="home/assets/js/jquery.validate.min.js"></script>
    <script src="home/assets/js/mail-script.js"></script>
    <script src="home/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="home/assets/js/plugins.js"></script>
    <script src="home/assets/js/main.js"></script>

    {{-- active navbar --}}

</body>

</html>
