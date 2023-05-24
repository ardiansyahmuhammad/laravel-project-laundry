<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/r-2.4.0/datatables.min.css" />
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


                    <div class="container">
                        
                        <table class="table table-bordered myTable ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                            </tbody>
                        </table>
                    </div>

                    
                </div>
            </div>
        </div>
        




        <!-- main-panel ends -->
        <!-- container-scroller -->
        <!-- plugins:js -->
        <?php echo $__env->make('admin.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/r-2.4.0/datatables.min.js">
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.myTable').DataTable({
                    processing: true,
                    serverSide: false,
                    fixedHeader: true,
                    deferRender: true,
                    type: 'GET',
                    destroy: true,
                    paging: true,
                    ajax: "<?php echo e(route('showAllUser')); ?>",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'username',
                            name: 'username'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'usertype',
                            name: 'usertype'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ]
                })
            })
        </script>
        <!-- End custom js for this page -->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/admin/user-control.blade.php ENDPATH**/ ?>