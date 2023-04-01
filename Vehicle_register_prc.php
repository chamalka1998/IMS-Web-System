<?php

require_once('database_conn.php');

$Vehicle_number=$_POST["vehicle_number"];
$Province=$_POST["province"];
$Chassis_number=$_POST["chassis_number"];
$Engine_number=$_POST["engine_number"];
$YOM=$_POST["YOM"];





$sql_query="INSERT INTO vehicle (vehicle_number,province,chassis_number,engine_number,YOM) VALUES('$Vehicle_number','$Province','$Chassis_number','$Engine_number','$YOM')";

if($database_connection->query($sql_query)===TRUE){
    
    header("location:vehicle_register.php?msg=Data Added");
    
}else{
    
           header("location:vehicle_register.php?msg=Data Not Added");
    
}


?>