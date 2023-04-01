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
                    <form action="Quotations_prc.php" method="POST">
                        <!-- Brand start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="Brand">Brand</label>

                                <select id="Brand" class="form-control" name="Brand">
                                    <option value="" selected>Choose...</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Porsche">Porsche</option>
                                    <option value="Tesla">Tesla </option>
                                    <option value="Kia">Kia </option>
                                    <option value="Peugeot">Peugeot </option>
                                    <option value="Honda">Honda </option>
                                    <option value="Volvo">Volvo</option>

                                </select>
                            </div>
                            <!-- Brand End -->

                            <!-- Model Start -->

                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="Model">Model</label>

                                <select id="Model" class="form-control" name="Model">

                                    <option value="" selected>Choose...</option>
                                    <option value="Cayman GT4">Cayman GT4</option>
                                    <option value="718 Spyder">718 Spyder</option>
                                    <option value="Model S">Model S</option>
                                    <option value="Model 3">Model 3</option>
                                    <option value="X7">X7</option>
                                    <option value="BMW i3">BMW i3</option>

                                </select>
                            </div>
                        </div>
                        <!-- Model End -->

                        <!-- Market value Start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="vehicle_number">Market Value</label>
                                <input type="text" class="form-control" id="Market_Value" placeholder="Market Value"
                                    name="Market_value">
                            </div>
                            <!-- Market Vlaue End -->

                            <!-- YOM Start -->
                            <div class="form-group col-md-6">
                                <label for="YOM">Year of Made</label>
                                <input type="number" class="form-control" id="YOM" placeholder="YOM" name="YOM">
                            </div>
                        </div>
                        <!-- YOM End -->

                        <!-- Vehicle number Start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="vehicle_number">Vehicle number</label>
                                <input type="text" class="form-control" id="vehicle_number" placeholder="Vehicle number"
                                    name="Vehicle_number">
                            </div>
                            <!-- Vehicle number End -->

                            <!-- Third Party Start -->
                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="tpty">Third party property damage</label>

                                <select id="tpty" class="form-control" name="tpty">

                                    <option value="" selected>Choose...</option>
                                    <option value=100000>100,000</option>
                                    <option value=300000>300,000</option>
                                    <option value=500000>500,000</option>
                                    <option value=1000000>1,000,000</option>
                                    <option value=2000000>2,000,000</option>


                                </select>
                            </div>
                        </div>

                        <!-- Third Party End -->

                        <!-- Covers Start -->
                        <div class="form-row">
                            <div class="form-group col-md-3">

                                <div class="form-group">

                                    <label class="form-check-label">Covers :</label>
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Natural Perils"
                                            id="covers1" name="covers[]">
                                        <label class="form-check-label" for="covers1">
                                            Natural Perils
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Theft of Part"
                                            id="covers2" name="covers[]">
                                        <label class="form-check-label" for="covers2">
                                            Theft of part
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Terrorism" id="covers3"
                                            name="covers[]">
                                        <label class="form-check-label" for="covers3">
                                            Terrorism
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Towing" id="covers4"
                                            name="covers[]">
                                        <label class="form-check-label" for="covers4">
                                            Towing
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <!-- Covers End -->

                            <!-- Usage Start -->
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    <label class="form-check-label">Usage :</label>
                                </div>

                                <div class="col-sm-10">
                                    <div class="form-check col-sm-2">
                                        <input class="form-check-input" type="radio" name="usage" id="private"
                                            value="Private" checked>
                                        <label class="form-check-label" for="private">
                                            Private
                                        </label>
                                    </div>
                                    <div class="form-check col-sm-2">
                                        <input class="form-check-input" type="radio" name="usage" id="hiring"
                                            value="Hiring">
                                        <label class="form-check-label" for="hiring">
                                            Hiring
                                        </label>
                                    </div>
                                    <div class="form-check col-sm-2">
                                        <input class="form-check-input" type="radio" name="usage" id="rent"
                                            value="Rent">
                                        <label class="form-check-label" for="rent">
                                            Rent
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="form-group">

                                    <div class="card text-center" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Final Premium</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="#"><button type="submit" name="confirm" class="btn btn-primary" >Confirm</button></a>

                                            
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- Usage End -->

                        <!-- Submit button start -->
                        <div class="form-row">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Confirm & Proceed</button>
                            </div>
                        </div>
                        <!-- Submit button End -->
                    </form>


                    <!-- Form End -->


                    <!-- Covers Cards Start -->

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Motor Quotations</h5>
                            <p class="card-text">Car insurance quotes are an estimate of how much you'll pay for an
                                insurance policy based on the coverage types, limits and deductibles you choose.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <img src="https://img.freepik.com/premium-photo/documents-vehicle-insurance-car-insurance-policy-auto-insurance-policy-forms-registration-insurance-contract_494741-41112.jpg?w=2000"
                            class="card-img-top" alt="...">
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