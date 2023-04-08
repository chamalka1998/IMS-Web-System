<?php require_once( 'database_conn.php' );
?>

<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>Project IMS</title>

    <!-- Custom fonts for this template-->
    <link href='vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i'
        rel='stylesheet'>

    <!-- Custom styles for this template-->
    <link href='css/sb-admin-2.min.css' rel='stylesheet'>

</head>

<body id='page-top'>

    <!-- Page Wrapper -->
    <div id='wrapper'>

        <?php require_once( 'Sidebar.php' );?>

        <!-- Content Wrapper -->
        <div id='content-wrapper' class='d-flex flex-column'>

            <!-- Main Content -->
            <div id='content'>

                <?php require_once( 'Topbar.php' );?>

                <!-- Begin Page Content -->
                <div class='container-fluid'>

                    <!-- Page Heading -->
                    <div class='d-sm-flex align-items-center justify-content-between mb-4'>
                        <h1 class='h3 mb-0 text-gray-800'>Covers</h1>

                    </div>

                    <div> <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Cover name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Cover name">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-9">

                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Cover description"></textarea>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlFile1">Cover picture input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>

                        <div class="form-row">
                            <button type="submit" class="btn btn-primary">Create new</button>
                        </div>
                    </form></div>

                </div>

            </div>
            <!-- End of Main Content -->

            <?php require_once( 'Footer.php' );
?>

            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class='scroll-to-top rounded' href='#page-top'>
            <i class='fas fa-angle-up'></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src='vendor/jquery/jquery.min.js'></script>
        <script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

        <!-- Core plugin JavaScript-->
        <script src='vendor/jquery-easing/jquery.easing.min.js'></script>

        <!-- Custom scripts for all pages-->
        <script src='js/sb-admin-2.min.js'></script>

        <!-- Page level plugins -->
        <script src='vendor/chart.js/Chart.min.js'></script>

        <!-- Page level custom scripts -->
        <script src='js/demo/chart-area-demo.js'></script>
        <script src='js/demo/chart-pie-demo.js'></script>

</body>

</html>