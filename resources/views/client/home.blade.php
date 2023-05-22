<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.style')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        @include('client.spinner')
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <a href="home.html"><img src="home/assets/img/logo/mesin.png" alt=""></a>
                    {{-- <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Clinz Laundry</h3> --}}
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                </div>
                <div class="navbar-nav w-100 mt-14">
                    <a href="{{ url('/view_dashboard') }}" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ url('/view_order') }}" class="nav-item nav-link"><i
                            class="fa fa-solid fa-plus me-2"></i>Orders</a>
                    <a href="{{ url('/view_status') }}" class="nav-item nav-link"><i
                            class="fas fa-bell me-2"></i>Status</a>
                    <a href="{{ url('/view_history') }}" class="nav-item nav-link"><i
                            class="fas fa-history me-2"></i>History</a>
                    {{-- <a href="{{ url('/view_settings') }}" class="nav-item nav-link"><i class="fas fa-wrench me-2"></i>Settings</a> --}}
                </div>
            </nav>
        </div>


        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('client.navbar')
            <!-- Navbar End -->

            {{-- Content Dashboard --}}
            <div class="main-content">
                <h1 class="m-4 font-bold fs-3">Clean in one blink✨</h1>
                <p class="mx-4">We will use all our strength to shorten the time it takes to, <br>
                    for the laundry to take place</p>
                <div class="ml-2 mt-4 row">
                    <a href="{{ url('/view_status') }}" class="col-sm-12 col-lg-4">
                        {{-- card status --}}
                        <div class="card w-full bg-warning text-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">
                                <i class="fas fa-bell fs-1"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-white fs-3">Status</h5>
                                <p class="card-text">Cek Status Pesananmu</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/view_order') }}" class="col-sm-12 col-lg-4">
                        {{-- card order --}}
                        <div class="card w-full bg-success text-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">
                                <i class="fas fa-plus fs-1"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-white fs-3">Orders</h5>
                                <p class="card-text">Lakukan Pesanan!</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/view_history') }}" class="col-sm-12 col-lg-4">
                        {{-- card history --}}
                        <div class="card w-full bg-primary text-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">
                                <i class="fas fa-history fs-1"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-white fs-3">History</h5>
                                <p class="card-text">Cek pesanan yang sudah selesai</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <!-- Footer Start -->
            @include('client.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('client.script')
</body>

</html>
