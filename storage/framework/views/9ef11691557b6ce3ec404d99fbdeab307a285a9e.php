<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="#"><img src="home/assets/img/logo/logofigma.jpeg" alt=""></a>
                    </div>
                    <div class="menu-wrapper d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li  class="active" ><a href="#home">Beranda</a></li>
                                    <li  class="active" ><a href="#about">Tentang Kami</a></li>
                                    <li class="active" ><a href="#services">Layanan</a></li>
                                    <li  class="active" ><a href="#map">Lokasi</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-none d-lg-block">
                    <a class="header-btn2" id="logincss" href="<?php echo e(route('login')); ?>">Mulai</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
</body>
<script src="header/active_navbar"></script>
</html>

<?php /**PATH D:\laragon\www\laundry\resources\views/home/header.blade.php ENDPATH**/ ?>