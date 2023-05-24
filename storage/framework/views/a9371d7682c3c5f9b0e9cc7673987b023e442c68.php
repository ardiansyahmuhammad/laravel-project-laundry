<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="main-wrapper">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update User</h4>
                            
                            <form method="POST" action="<?php echo e(route('update_user', $user->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" readonly
                                        value="<?php echo e($user->username); ?>" name="username" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="usertype">User Type</label>
                                    <input type="number" class="form-control" id="usertype"
                                        value="<?php echo e(old('usertype', $user->usertype)); ?>" required name="usertype">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/admin/userupdate.blade.php ENDPATH**/ ?>