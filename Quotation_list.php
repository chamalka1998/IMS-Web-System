<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Customer List</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once('Sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once('Topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List of issued quotations</h1>
                    <p class="mb-4">A vehicle insurance quotation is a document that provides an estimated cost of an insurance policy for a vehicle. It outlines the coverage options available and the premium costs associated with each option. A vehicle insurance quotation typically includes information such as the make and model of the vehicle, the level of coverage being requested, the driver's history, and any other relevant information that could impact the cost of the policy. This quotation is an important tool for individuals and businesses to compare different insurance options and make an informed decision about which policy best meets their needs and budget.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Quotation table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Quotation number</th>
                                            <th>Vehicle number</th>
                                            <th>Brand</th>
                                            <th>YOM</th>
                                            <th>Issued date</th>
                                            <th>User</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Quotation number</th>
                                            <th>Vehicle number</th>
                                            <th>Brand</th>
                                            <th>YOM</th>
                                            <th>Issued date</th>
                                            <th>User</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


                                        <?php
                                    
                                    $sql_query="SELECT * FROM quotations";
                                    $sql_query_result=$database_connection->query($sql_query);

                                    if ($sql_query_result->num_rows>0) {
                                        
                                        while ($data_row=$sql_query_result->fetch_assoc()) {
                                            ?>
                                        <tr>
                                            <td><?php echo $data_row['quotation_number']; ?></td>
                                            <td><?php echo $data_row['vehicle_number']; ?></td>
                                            <td><?php echo $data_row['brand']; ?></td>
                                            <td><?php echo $data_row['YOM']; ?></td>
                                            <td><?php echo $data_row['date']; ?></td>
                                            <td><?php echo $data_row['User']; ?></td>
                                            

                                            <td>

                                                <a href="Print_previous_quotation.php?quotation_number=<?php echo $data_row['quotation_number'];?>"><button
                                                        type="button" class="btn btn-success" data-toggle="button"
                                                        aria-pressed="false" autocomplete="off">
                                                      Print
                                                    </button></a>

                                            </td>
                                        </tr>
                                        <?php
                                        }
                                    }else {
                                        header( 'location:Quotation_list.php?msg=Can`t find data' );
                                    }
                                    
                                    ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example End -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require_once('Footer.php'); ?>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>