<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    {{-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
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
                <div class="content-wrapper">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Daerah</h4>
                            {{-- <p class="card-description"></p> --}}
                            <form method="POST" action="{{ route('storeLocation') }}">
                                @csrf
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
            @include('admin.js')


            <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/r-2.4.0/datatables.min.js">
            </script>


            {{-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script> --}}

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
                        ajax: "{{ route('getAllDaerah') }}",
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
