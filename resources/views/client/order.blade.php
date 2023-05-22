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
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <a href="home.html"><img src="{{ asset('home/assets/img/logo/mesin.png') }}" alt=""></a>
                    {{-- <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Clinz Laundry</h3> --}}
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                </div>
                <div class="navbar-nav w-100 mt-14">
                    <a href="{{ url('/view_dashboard') }}" class="nav-item nav-link"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ url('/view_order') }}" class="nav-item nav-link active"><i
                            class="fa fa-solid fa-plus me-2"></i>Orders</a>
                    <a href="{{ url('/view_status') }}" class="nav-item nav-link"><i
                            class="fas fa-bell me-2"></i>Status</a>
                    <a href="{{ url('/view_history') }}" class="nav-item nav-link"><i
                            class="fas fa-history me-2"></i>History</a>
                    {{-- <a href="{{ url('/view_settings') }}" class="nav-item nav-link"><i
                            class="fas fa-wrench me-2"></i>Settings</a> --}}
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
                <div class="col-sm-12 col-xl-12">
                    <div class="rounded h-100 p-4">
                        <h1 class="fs-3 font-bold mb-4">Masukkan Pesanan</h1>
                        <form method="POST" action="{{ route('orderStore') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="jumlahAtasan" class="col-sm-2 col-form-label">Jumlah Atasan</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="jumlahAtasan" placeholder="0"
                                        name="jumlahAtasan">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jumlahBawahan" class="col-sm-2 col-form-label">Jumlah Bawahan</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="jumlahBawahan" placeholder="0"
                                        name="jumlahBawahan">
                                </div>
                            </div>
                          
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Paket Pewangi</legend>
                                <div class="col-sm-10">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="paketPewangi"
                                            id="paketPewangi1" value="1">
                                        <label class="form-check-label" for="paketPewangi1">
                                            Paket Biasa
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="paketPewangi"
                                            id="paketPewangi2" value="2">
                                        <label class="form-check-label" for="paketPewangi2">
                                            Parfum ++ ( + Rp.300/pcs)
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="paketPewangi"
                                            id="paketPewangi3" value="3">
                                        <label class="form-check-label" for="paketPewangi3">
                                            Parfum ++ Ekspres ( + Rp.500/pcs)
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            {{-- <button type="submit" class="btn btn-primary col-sm-2">Selanjutnya</button> --}}
                            <x-primary-button>{{ __('Submit') }}</x-primary-button>
                        </form>
                    </div>
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
