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
    <?php echo $__env->make('home.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Preloader Start -->
    
    <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <main>
        <!--? slider Area Start-->
        <?php echo $__env->make('home.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- slider Area End-->
        <!--? Services Area Start -->
        <?php echo $__env->make('home.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Services End -->
        <!--? Offer-services Start  -->
        <?php echo $__env->make('home.offer-services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Offer-services End  -->
        <!--? Want To work -->
        
        <!-- Want To work End -->
        <!-- Testimonials_start -->
        <?php echo $__env->make('home.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <!-- Testimonials_end -->
        <!--? Company achievement Start -->
        
        <!-- Company achievement End -->
        <!--? About Area  -->
        <?php echo $__env->make('home.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- About Area End -->
        <!--?  Map Area start  -->
        <?php echo $__env->make('home.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Map Area End -->
    </main>
    <footer>
        <!-- Footer Start-->
        <?php echo $__env->make('home.footer-start', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

    

</body>

</html>
<?php /**PATH D:\laragon\www\laundry\resources\views/home/userpage.blade.php ENDPATH**/ ?>