<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
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
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update User</h4>
                            {{-- <p class="card-description"></p> --}}
                            <form method="POST" action="{{ route('update_user', $user->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" readonly
                                        value="{{ $user->username }}" name="username" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="usertype">User Type</label>
                                    <input type="number" class="form-control" id="usertype"
                                        value="{{ old('usertype', $user->usertype) }}" required name="usertype">
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
    @include('admin.js')
    <!-- End custom js for this page -->
</body>

</html>
