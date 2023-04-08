<?php
require_once( 'database_conn.php' );



$user_id = $_GET[ 'user_id' ];

$sql_query = "DELETE FROM user WHERE cust_id='$user_id';";

if ( $database_connection->query( $sql_query ) === TRUE ) {

    header( 'location:Customers_list.php?msg=Data Deleted' );
} else {
    header( 'location:update_user.php?msg=Data Not Deleted' );
}


?>