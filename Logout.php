<?php
require_once( 'database_conn.php' );



$cookie_name = 'user_id';
$cookie_value = '';
setcookie($cookie_name, $cookie_value, time() - 3600, '/');

header('location:login.php?msg=You are logged out');




?>