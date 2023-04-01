<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project IMS</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar Start -->
        <?php require_once('Sidebar.php'); ?>
        <!-- Sidebar End -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar Start -->
                <?php require_once('Topbar.php'); ?>
                <!-- Topbar End -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                    </div>

                    <!-- Form Start -->
                    <form>
                        <!-- Province start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="province">Province</label>

                                <select id="province" class="form-control">

                                    <option selected>Choose...</option>
                                    <option>North West</option>
                                    <option>Central Provice</option>
                                    <option>Uva Province</option>
                                    <option>Western Province</option>
                                    <option>Eastern Province</option>
                                    <option>Sabaragamu Province</option>
                                    <option>South province</option>
                                    <option>North Province</option>
                                </select>
                            </div>
                            <!-- Province close -->

                            <!-- Vehicle number Start -->

                            <div class="form-group col-md-6">
                                <label for="vehicle_number">Vehicle number</label>
                                <input type="text" class="form-control" id="vehicle_number"
                                    placeholder="Vehicle number">
                            </div>
                        </div>
                        <!-- Vehicle number End -->

                        <!-- Chassis number Start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="chassis_number">Chassis number</label>
                                <input type="text" class="form-control" id="chassis_number"
                                    placeholder="Chassis number">
                            </div>
                            <!-- Chassis number End -->

                            <!-- Engine number Start -->
                            <div class="form-group col-md-6">
                                <label for="engine_number">Engine number</label>
                                <input type="text" class="form-control" id="engine_number" placeholder="Engine number">
                            </div>
                        </div>
                        <!-- Engine number End -->

                        <!-- YOM Start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="YOM">Year of Made</label>
                                <input type="number" class="form-control" id="YOM" placeholder="YOM">
                            </div>
                        </div>
                        <!-- YOM End -->




                        <!-- Submit button start -->
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Confirm & Proceed</button>
                            </div>
                        </div>
                        </div>
                        <!-- Submit button End -->





                    </form>


                    <!-- Form End -->

                    <!-- Covers Cards Start -->

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Third-party insurance</h5>
                            <p class="card-text">Third-party insurance covers an individual or firm against a loss caused by some third party. An example is automobile insurance that will indemnify the insured if another driver causes damage to the insured's car. The two main categories of third-party insurance are liability coverage and property damage coverage.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <img src="https://static.imoney.my/articles/wp-content/uploads/2018/03/Allianz_image.jpg" class="card-img-top" alt="...">
                    </div>

                    <!-- Covers Cards End -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer Start -->
                <?php require_once('Footer.php'); ?>
                <!-- Footer End -->

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

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>