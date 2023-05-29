
@extends('template')

@section('title', 'New')

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
                                    <h6 class="m-0 font-weight-bold text-primary">PROPOSAL SUBMISSION</h6>
                                </div>
                                <div class="card-body">
                                <form action="/new" method="POST">
                                        @csrf
                                    <label for="">Call for Proposals</label>
                                    <select name="callforproposals" id="callforproposals" class="form-control" >
                                    <option value="">Select</option>
                                    <option value="JRP">2023 JRP</option>
                                    <option value="YIP">Young Innovators Program (YIP)</option>
                                    <option value="PCHRD">PCHRD</option>
                                    </select>
                                    <br>
                                    <label for="">Type of Proposal</label>
                                    <select name="typeofproposal" id="typeofproposal" class="form-control" >
                                    <option value="">Select</option>
                                    <option value="R&D Project">R&D Project</option>
                                    <option value="TECHNICOM R&D Project">TECHNICOM R&D Project</option>
                                    <option value="NON R&D Project">NON R&D Project</option>
                                    </select>
                                    <br>
                                    <label for="">Proposal Classification</label>
                                    <select name="proposalclassification" id="proposalclassification" class="form-control" >
                                    <option value="">Select</option>
                                    <option value="New Proposal">New Proposal</option>
                                    <option value="Resubmitted Proposal">Resubmitted Proposal</option>
                                    <option value="Directed Proposal">Directed Proposal</option>
                                    </select>
                                    <br>
                                    <div class="form-group">
                                    <label for="comment">Project Title</label>
                                    <textarea class="form-control" rows="5" id="comment" name="projecttitle" class="form-control" ></textarea>
                                    </div>
                                    <br>
                                    <label for="date">Start Date</label>
                                    <input type="date" id="startdate" name="startdate" class="form-control" >
                                    <br>
                                    <label for="date">End Date</label>
                                    <input type="date" id="enddate" name="enddate" class="form-control" >
                                    <br>
                                    <button type="submit">Submit</button>
                                </form>
                                </div>
                            </div>

                        </div>

                 

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
