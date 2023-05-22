<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <a href="home.html"><img src="{{ asset('home/assets/img/logo/mesin.png') }}" alt=""></a>
            {{-- <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Clinz Laundry</h3> --}}
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
        </div>
        <div class="navbar-nav w-100 mt-14">
            <a href="{{ url('/view_dashboard') }}" class="nav-item nav-link "><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ url('/view_order') }}" class="nav-item nav-link"><i
                    class="fa fa-solid fa-plus me-2"></i>Orders</a>
            <a href="{{ url('/view_status') }}" class="nav-item nav-link"><i class="fas fa-bell me-2"></i>Status</a>
            <a href="{{ url('/view_history') }}" class="nav-item nav-link"><i
                    class="fas fa-history me-2"></i>History</a>
        </div>
    </nav>
</div>
