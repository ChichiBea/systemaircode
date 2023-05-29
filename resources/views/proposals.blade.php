
@extends('template')

@section('title', 'Call for Proposals')

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
        <h6 class="m-0 font-weight-bold text-primary">CALL FOR PROPOSALS</h6>
    </div>
    <div class="card-body">
    <form action="/proposals" method="POST">
            @csrf 
            <label for="inputText">Call for Proposals</label>
                                    <input type="text" class="form-control" id="callforproposals" name="callforproposals" placeholder="Enter Call for Proposals">
                                    <br>
                                    <label for="date">Start Date</label>
                                    <input type="date" class="form-control" id="startdate" name="startdate">
                                    <br>
                                    <label for="date">End Date</label>
                                    <input type="date" class="form-control" id="enddate" name="enddate">
                                    <br>
                                    <label for="year">Year to be Funded</label>
                                    <input type="text" class="form-control" placeholder="Enter Year" id="yeartobefunded" name="yeartobefunded">
                                    <br>
                                    <label for="inputText">Funding Agency</label>
                                    <input type="text" class="form-control"  id="fundingagency" name="fundingagency"  placeholder="Funding Agency">
                                    <br>
                                    <label for="inputText">Status</label>
                                    <input type="text" class="form-control"  id="status" name="status"  placeholder="Status">
                                    <br>
                                    <label for="inputText">Remarks</label>
                                    <input type="text" class="form-control"  id="remarks" name="remarks"  placeholder="Remarks">
                                    <br>
                                    <button type="submit">Submit</button>
                                </form>
    </div>
</div>

</div>


<!-- -------------------------------------------------------------------------- -->

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
