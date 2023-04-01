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

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href='vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i'
        rel='stylesheet'>

    <!-- Custom styles for this template-->
    <link href='css/sb-admin-2.min.css' rel='stylesheet'>

</head>

<body class='bg-gradient-primary'>

    <div class='container'>

        <div class='card o-hidden border-0 shadow-lg my-5'>
            <div class='card-body p-0'>
                <!-- Nested Row within Card Body -->
                <div class='row'>
                    <div class='col-lg-5 d-none d-lg-block bg-register-image'></div>
                    <div class='col-lg-7'>
                        <div class='p-5'>
                            <div class='text-center'>
                                <h1 class='h4 text-gray-900 mb-4'>Create an Account!</h1>
                            </div>
                            <form class='user' action='update_user_prc.php' method='POST'>

                                <?php
                                    $user_id = $_GET[ 'user_id' ];

                                    $sql_query = "SELECT * FROM user WHERE cust_id='$user_id'";
                                    $sql_query_result = $database_connection->query( $sql_query );

                                    if ( $sql_query_result->num_rows>0 ) {

                                        $data_row = $sql_query_result->fetch_assoc();
                                        $f_name = $data_row[ 'f_name' ];
                                        $l_name = $data_row[ 'l_name' ];
                                        $address = $data_row[ 'address' ];
                                        $email = $data_row[ 'email' ];
                                        $tp_number = $data_row[ 'tp_number' ];

                                    } else {
                                        //header( 'location:Customers_list.php?msg=Can`t find data' );
                                    }

                                ?>

                             <input type="hidden" name="user_id" value="<?php echo  $user_id; ?>">

                                <div class='form-group row'>
                                    <div class='col-sm-6 mb-3 mb-sm-0'>
                                        <input type='text' class='form-control form-control-user' id='first_name'
                                            placeholder='First Name' name='first_name' value="<?php echo $f_name;?>">
                                    </div>
                                    <div class='col-sm-6'>
                                        <input type='text' class='form-control form-control-user' id='last_name'
                                            placeholder='Last Name' name='last_name' value="<?php echo $l_name;?>">
                                    </div>
                                </div>

                                <div class='form-group'>
                                    <input type='email' class='form-control form-control-user' id='email'
                                        placeholder='Email Address' name='email' value="<?php echo $email;?>">
                                </div>

                                <div class='form-group'>
                                    <input type='text' class='form-control form-control-user' id='address'
                                        placeholder='Address' name='address' value="<?php echo $address;?>">
                                </div>
                                <div class='form-group'>
                                    <input type='text' class='form-control form-control-user' id='tp_number'
                                        placeholder='Telephone number' name='tp_number' value="<?php echo  $tp_number;?>">
                                </div>

                               

                                <button type='submit' class='btn btn-primary btn-user btn-block'>Update
                                    Account</button>

                                <hr>
                                <a href='index.html' class='btn btn-google btn-user btn-block'>
                                    <i class='fab fa-google fa-fw'></i> Register with Google
                                </a>
                                <a href='index.html' class='btn btn-facebook btn-user btn-block'>
                                    <i class='fab fa-facebook-f fa-fw'></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class='text-center'>
                                <a class='small' href='forgot-password.html'>Forgot Password?</a>
                            </div>
                            <div class='text-center'>
                                <a class='small' href='login.html'>Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src='vendor/jquery/jquery.min.js'></script>
    <script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

    <!-- Core plugin JavaScript-->
    <script src='vendor/jquery-easing/jquery.easing.min.js'></script>

    <!-- Custom scripts for all pages-->
    <script src='js/sb-admin-2.min.js'></script>

</body>

</html>