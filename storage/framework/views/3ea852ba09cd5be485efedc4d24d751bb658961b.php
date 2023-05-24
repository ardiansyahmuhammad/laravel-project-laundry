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

                        <form method="POST" action="<?php echo e(route('updateOrder', $order->id)); ?>">
                            <?php echo csrf_field(); ?>

                            <h1 class="fs-5 my-4 font-bold">Pengiriman</h1>
                            <div class="row mb-3">
                                <label for="regionId" class="col-sm-2 col-form-label">Daerah</label>
                                <div class="col-sm-10">
                                    <?php if($order->status == 2): ?>
                                        <select class="form-select" name="regionId" disabled
                                            aria-label="Default select example">
                                            <option value="-1" <?php if(old('regionId', $order->regionId) == -1): ?> selected <?php endif; ?>>
                                                Pilih
                                                daerah</option>
                                            <?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($region->id == old('regionId')): ?>
                                                    <option value="<?php echo e($region->id); ?>" selected>
                                                        <?php echo e($region->nama); ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </select>
                                    <?php elseif($order->status == 1): ?>
                                        <select class="form-select" name="regionId" aria-label="Default select example">
                                            <option value="-1" <?php if(old('regionId', $order->regionId) == -1): ?> selected <?php endif; ?>>
                                                Pilih
                                                daerah</option>
                                            <?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <option value="<?php echo e($region->id); ?>">
                                                    <?php echo e($region->nama); ?></option>
                                                
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </select>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" id="alamat" value="<?php echo e(old('alamat', $order->alamat)); ?>"
                                        style="height: 150px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="totalBayar" class="col-sm-2 col-form-label">Total Bayar</label>
                                <div class="col-sm-10">

                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" value="<?php echo e($order->totalBayar); ?>" readonly
                                            class="form-control">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Metode Pembayaran</legend>
                                <div class="col-sm-10">
                                    <?php if($order->status == 1): ?>
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
                                    <?php elseif($order->status == 2): ?>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" disabled
                                                <?php if(old('regionId', $order->payment_id) == 1): ?> checked <?php endif; ?> name="payment_id"
                                                id="bayar1" value="1">
                                            <label class="form-check-label" for="bayar1">
                                                OVO
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" disabled
                                                <?php if(old('regionId', $order->payment_id) == 2): ?> checked <?php endif; ?> name="payment_id"
                                                id="bayar2" value="2">
                                            <label class="form-check-label" for="bayar2">
                                                ShopeePay
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" disabled
                                                <?php if(old('regionId', $order->payment_id) == 3): ?> checked <?php endif; ?> name="payment_id"
                                                id="bayar3" value="3">
                                            <label class="form-check-label" for="bayar3">
                                                DANA
                                            </label>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </fieldset>

                            <button type="submit" class="btn btn-primary col-sm-2">Bayar</button>

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
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/client/pengiriman.blade.php ENDPATH**/ ?>