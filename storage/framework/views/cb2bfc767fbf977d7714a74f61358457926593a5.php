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
                <div class="content-wrapper">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Daerah</h4>
                            
                            <form method="POST" action="<?php echo e(route('storeLocation')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="daerah">Nama Daerah</label>
                                    <input type="text" class="form-control" id="daerah" required name="daerah"
                                        placeholder="Daerah">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="card">
                            <table class="table table-bordered myTable ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
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
                        ajax: "<?php echo e(route('getAllDaerah')); ?>",
                        columns: [{
                                data: 'id',
                                name: 'id'
                            },
                            {
                                data: 'nama',
                                name: 'nama'
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
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/admin/location.blade.php ENDPATH**/ ?>