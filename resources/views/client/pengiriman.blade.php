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

                        <form method="POST" action="{{ route('updateOrder', $order->id) }}">
                            @csrf

                            <h1 class="fs-5 my-4 font-bold">Pengiriman</h1>
                            <div class="row mb-3">
                                <label for="regionId" class="col-sm-2 col-form-label">Daerah</label>
                                <div class="col-sm-10">
                                    @if ($order->status == 2)
                                        <select class="form-select" name="regionId" disabled
                                            aria-label="Default select example">
                                            <option value="-1" @if (old('regionId', $order->regionId) == -1) selected @endif>
                                                Pilih
                                                daerah</option>
                                            @foreach ($region as $region)
                                                @if ($region->id == old('regionId'))
                                                    <option value="{{ $region->id }}" selected>
                                                        {{ $region->nama }}</option>
                                                @endif
                                            @endforeach
                                            {{-- <option value="1" @if (old('regionId', $order->regionId) == 1) selected @endif>
                                                Cipagalo</option>
                                            <option value="2" @if (old('regionId', $order->regionId) == 2) selected @endif>
                                                Bojongsoang</option>
                                            <option value="3" @if (old('regionId', $order->regionId) == 3) selected @endif>
                                                Buah
                                                Batu</option>
                                            <option value="4" @if (old('regionId', $order->regionId) == 4) selected @endif>
                                                Bojongloa</option>
                                            <option value="5" @if (old('regionId', $order->regionId) == 5) selected @endif>
                                                Ciwastra</option> --}}
                                        </select>
                                    @elseif($order->status == 1)
                                        <select class="form-select" name="regionId" aria-label="Default select example">
                                            <option value="-1" @if (old('regionId', $order->regionId) == -1) selected @endif>
                                                Pilih
                                                daerah</option>
                                            @foreach ($region as $region)
                                                {{-- @if ($region->id == old('regionId')) --}}
                                                <option value="{{ $region->id }}">
                                                    {{ $region->nama }}</option>
                                                {{-- @endif --}}
                                            @endforeach
                                            {{-- <option value="1" @if (old('regionId', $order->regionId) == 1) selected @endif>
                                                Cipagalo</option>
                                            <option value="2" @if (old('regionId', $order->regionId) == 2) selected @endif>
                                                Bojongsoang</option>
                                            <option value="3" @if (old('regionId', $order->regionId) == 3) selected @endif>
                                                Buah
                                                Batu</option>
                                            <option value="4" @if (old('regionId', $order->regionId) == 4) selected @endif>
                                                Bojongloa</option>
                                            <option value="5" @if (old('regionId', $order->regionId) == 5) selected @endif>
                                                Ciwastra</option> --}}
                                        </select>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" id="alamat" value="{{ old('alamat', $order->alamat) }}"
                                        style="height: 150px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="totalBayar" class="col-sm-2 col-form-label">Total Bayar</label>
                                <div class="col-sm-10">

                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" value="{{ $order->totalBayar }}" readonly
                                            class="form-control">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Metode Pembayaran</legend>
                                <div class="col-sm-10">
                                    @if ($order->status == 1)
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="payment_id"
                                                id="bayar1" value="1">
                                            <label class="form-check-label" for="bayar1">
                                                OVO
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="payment_id"
                                                id="bayar2" value="2">
                                            <label class="form-check-label" for="bayar2">
                                                ShopeePay
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="payment_id"
                                                id="bayar3" value="3">
                                            <label class="form-check-label" for="bayar3">
                                                DANA
                                            </label>
                                        </div>
                                    @elseif ($order->status == 2)
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" disabled
                                                @if (old('regionId', $order->payment_id) == 1) checked @endif name="payment_id"
                                                id="bayar1" value="1">
                                            <label class="form-check-label" for="bayar1">
                                                OVO
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" disabled
                                                @if (old('regionId', $order->payment_id) == 2) checked @endif name="payment_id"
                                                id="bayar2" value="2">
                                            <label class="form-check-label" for="bayar2">
                                                ShopeePay
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" disabled
                                                @if (old('regionId', $order->payment_id) == 3) checked @endif name="payment_id"
                                                id="bayar3" value="3">
                                            <label class="form-check-label" for="bayar3">
                                                DANA
                                            </label>
                                        </div>
                                    @endif
                                </div>
                            </fieldset>

                            <button type="submit" class="btn btn-primary col-sm-2">Bayar</button>

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
