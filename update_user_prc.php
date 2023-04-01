<?php

require_once( 'database_conn.php' );

$first_name = $_POST[ 'first_name' ];
$last_name = $_POST[ 'last_name' ];
$email = $_POST[ 'email' ];
$tp_number = $_POST[ 'tp_number' ];
$address = $_POST[ 'address' ];
$user_id = $_POST[ 'user_id' ];

$sql_query = "UPDATE user SET f_name='$first_name', l_name='$last_name' , email='$email' , tp_number='$tp_number' , address='$address' WHERE cust_id='$user_id'";

if ( $database_connection->query( $sql_query ) === TRUE ) {

    header( 'location:Customers_list.php?msg=Data updated' );
} else {
    header( 'location:update_user.php?msg=Data Not updated' );
}

/*

if ( $first_name == '' or $last_name == '' or $email == '' or $tp_number == '' or $address == '' or $password == '' or $repeat_password == '' ) {

    header( 'location:register.php?msg=Please Fill All Fields' );

} else {

    if ( $password != $repeat_password ) {

        header( 'location:register.php?msg=Please confirm your password' );

    } else {

        $sql_query = "INSERT INTO user (f_name,l_name,tp_number,address,email,password) VALUES('$first_name','$last_name','$tp_number','$address','$email','$encrypted_password')";

        if ( $database_connection->query( $sql_query ) === TRUE ) {

            header( 'location:Customers_list.php?msg=Data Added' );

        } else {

            header( 'location:register_admin.php?msg=Data Not Added' );

        }

    }

}

*/

?>