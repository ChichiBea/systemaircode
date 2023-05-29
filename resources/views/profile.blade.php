
@extends('template')

@section('title', 'Profile')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    @include('sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-4 text-gray-800">Dashboard</h1> -->

                </div>
                <!-- /.container-fluid -->
<!-- -------------------------------------------------------------------------- -->
<div class="col-lg-12">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 text-center">
                                    <h6 class="m-0 font-weight-bold text-primary">PERSONAL INFORMATION</h6>
                                </div>
                                <div class="card-body">
                                <form action="/profile" method="POST">
                                        @csrf 
                                    <label for="">Firstname</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                    <br>
                                    <label for="">Middlename</label>
                                    <input type="text" class="form-control" id="middlename" name="middlename">
                                    <br>
                                    <label for="">Lastname</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname">
                                    <br>
                                    <label for="">Sex</label>
                                    <select name="sex" id="sex">
                                    <option value="">Select</option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    </select>
                                    <br>
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                    <br>
                                    <label for="">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber">
                                    <br>
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                    <br>
                                    <label for="">Primary Institution</label>
                                    <input type="text" class="form-control" id="primaryinstitution" name="primaryinstitution">
                                    <br>
                                    <label for="">Position</label>
                                    <select name="position" id="position">
                                    <option value="">Select</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                    </select>
                                    <br>
                                    <br>
                                    <button type="submit">Submit</button>
                                </form>
                                </div>
                            </div>

                        </div>
<!-- ----------------------------------------------------- -->

 <!-- --------------------------------------------------------------------------  -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
