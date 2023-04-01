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
                    <form action="Coverages_prc.php" method="POST">
                        <!-- Policy type start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="policy_type">Policy type</label>

                                <select id="policy_type" class="form-control" name="policy_type">

                                    <option selected>Choose...</option>
                                    <option value="Comprehensive Policy">Comprehensive Policy</option>
                                    <option value="Third Party Policy">Third Party Policy</option>

                                </select>
                            </div>
                            <!-- Policy type end -->

                            <!-- Vehicle number Start -->

                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="vehicle_number">Vehicle number</label>

                                <select id="vehicle_number" class="form-control" name="vehicle_number">

                                    <option selected>Choose...</option>
                                    <option value="NW AAA-3333">NW AAA-3333</option>
                                    <option value="NW BBB-2222">NW BBB-2222</option>
                                    <option value="NW CCC-1111">NW CCC-1111</option>
                                
                                </select>
                            </div>
                        </div>
                        <!-- Vehicle number End -->

                        <!-- Third party property damage Start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="third_pty">Third party cover</label>

                                <select id="third_pty" class="form-control" name="third_pty">

                                    <option selected>Choose...</option>
                                    <option value="100000">100,000</option>
                                    <option value="300000">300,000</option>
                                    <option value="500000">500,000</option>
                                    <option value="1000000<">1,000,000</option>
                                    <option value="2000000">2,000,000</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">

                            </div>
                        </div>
                        <!-- Third party property damage End -->

                        <!-- Covers Start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group">

                                    <label class="form-check-label" for="defaultCheck1">Covers :</label>
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="covers" name="covers[]" value="Natural perils">
                                        <label class="form-check-label" for="natural_perils">
                                            Natural Perils
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="covers" name="covers[]" value="Theft of part">
                                        <label class="form-check-label" for="theft_part">
                                            Theft of part
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="covers" name="covers[]" value="Terrorism">
                                        <label class="form-check-label" for="terrorism">
                                            Terrorism
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="covers" name="covers[]" value="Towing">
                                        <label class="form-check-label" for="towing">
                                            Towing
                                        </label>
                                    </div>

                                </div>

                            </div>

                            <!-- Covers end -->

                            <!-- Usage Start -->
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="defaultCheck1">Usage :</label>
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


                        </div>

                        <!-- Usage End -->




                        <!-- Submit button start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">Create new</button>
                            </div>
                        </div>
                        <!-- Submit button End -->
                    </form>


                    <!-- Form End -->

                    <!-- Covers Cards Start -->

                    <div class="card-deck">
                        <div class="card">
                            <img src="https://i1.wp.com/bjak.my/blog/wp-content/uploads/2021/10/A7_-Insurans-Kereta-_-Perlindungan-Tambahan-Bencana-Alam-1.jpg?resize=854%2C540&ssl=1"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Natural Perils</h5>
                                <p class="card-text">Theft, fire, and natural disasters like hail, earthquakes,
                                    and flooding are events or hazards that may be declared on a named perils
                                    insurance policy. When a person purchases an all risks policy, it covers all
                                    perils except those expressly excluded from the list.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw47GpScEvckKpOjD3AwOqGtCk0sAjZxQNvbdWgF6Sf-cecSZlXCqiSRkx3McViVCS5zc&usqp=CAU"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Theft of part</h5>
                                <p class="card-text">Does car insurance cover stolen car parts? Comprehensive
                                    coverage helps pay to replace stolen car parts and helps pay to repair
                                    damage done to your car by thieves, up to your coverage limit and minus your
                                    deductible</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKi71_iGVXWXahLgPM3jvrK-hGiz0iyXcXsA&usqp=CAU"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Terrorism</h5>
                                <p class="card-text">Terrorism insurance is insurance purchased by property
                                    owners to cover their potential losses and liabilities that might occur due
                                    to terrorist activities</p>

                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://s33855.pcdn.co/wp-content/uploads/2021/03/Damaged-vehicle-being-towed.-Towing-insurance-will-cover-damage-to-the-vehicles-that-you-hold-on-your-premises.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Towing</h5>
                                <p class="card-text">Roadside assistance coverage can pay for a tow, up to a
                                    certain distance specified on your policy, if your vehicle is disabled. Your
                                    insurer might also cover the cost of towing if your vehicle is involved in a
                                    collision and you're unable to drive it.</p>

                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
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