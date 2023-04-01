<?php
require_once( 'database_conn.php' );


$email = $_POST[ 'email' ];
$password = $_POST[ 'password' ];
$encrypted_password = md5( $password );

if ( $email == '' or $password == '' ) {
    header( 'location:login.php?msg=Please fill all fields' );
} else {
    $sql_query = "SELECT * FROM user WHERE email='$email' AND password='$encrypted_password'";
    $result = $database_connection->query( $sql_query );

    if ( $result->num_rows>0 ) {

        $row = $result->fetch_assoc();
        $user_id = $row[ 'cust_id' ];

        $cookie_name = 'user_id';
        $cookie_value = $user_id;
        setcookie( $cookie_name, $cookie_value, time()+( 3600*24 ), "/" );

         header( 'location:index2.php?msg=Login Successfully' );

    } else {
         header('location:login.php?msg=Login Not Successfully');
    }

}

?>