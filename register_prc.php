<?php

require_once( 'database_conn.php' );

$first_name = $_POST[ 'first_name' ];
$last_name = $_POST[ 'last_name' ];
$email = $_POST[ 'email' ];
$tp_number = $_POST[ 'tp_number' ];
$address = $_POST[ 'address' ];
$password = $_POST[ 'password' ];
$repeat_password = $_POST[ 'repeat_password' ];
$encrypted_password = md5( $password );

if ( $first_name == '' or $last_name == '' or $email == '' or $tp_number == '' or $address == '' or $password == '' or $repeat_password == '' ) {

    header( 'location:register.php?msg=Please Fill All Fields' );

} else {

    if ( $password != $repeat_password ) {

        header( 'location:register.php?msg=Please confirm your password' );

    } else {

        $sql_query = "INSERT INTO user (f_name,l_name,tp_number,address,email,password) VALUES('$first_name','$last_name','$tp_number','$address','$email','$encrypted_password')";

        if ( $database_connection->query( $sql_query ) === TRUE ) {

            header( 'location:login.php?msg=Data Added' );

        } else {

            header( 'location:register.php?msg=Data Not Added' );

        }

    }

}

?>