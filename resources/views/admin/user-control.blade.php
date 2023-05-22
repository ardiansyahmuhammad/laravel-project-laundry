<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/r-2.4.0/datatables.min.css" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="main-wrapper">


                    <div class="container">
                        {{-- <h2 class="mb-4">Tabel Daftar Pengguna</h2> --}}
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
        {{-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script> --}}




        <!-- main-panel ends -->
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.js')
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
                    ajax: "{{ route('showAllUser') }}",
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
