<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('client.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <?php echo $__env->make('client.spinner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <a href="home.html"><img src="<?php echo e(asset('home/assets/img/logo/mesin.png')); ?>" alt=""></a>
                    
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                </div>
                <div class="navbar-nav w-100 mt-14">
                    <a href="<?php echo e(url('/view_dashboard')); ?>" class="nav-item nav-link"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="<?php echo e(url('/view_order')); ?>" class="nav-item nav-link active"><i
                            class="fa fa-solid fa-plus me-2"></i>Orders</a>
                    <a href="<?php echo e(url('/view_status')); ?>" class="nav-item nav-link"><i
                            class="fas fa-bell me-2"></i>Status</a>
                    <a href="<?php echo e(url('/view_history')); ?>" class="nav-item nav-link"><i
                            class="fas fa-history me-2"></i>History</a>
                    
                </div>
            </nav>
        </div>

        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php echo $__env->make('client.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Navbar End -->

            
            <div class="main-content">
                <div class="col-sm-12 col-xl-12">
                    <div class="rounded h-100 p-4">
                        <h1 class="fs-3 font-bold mb-4">Masukkan Pesanan</h1>
                        <form method="POST" action="<?php echo e(route('orderStore')); ?>">
                            <?php echo csrf_field(); ?>
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
                            
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('Submit')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Footer Start -->
            <?php echo $__env->make('client.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php echo $__env->make('client.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/client/order.blade.php ENDPATH**/ ?>