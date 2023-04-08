<?php

require_once('database_conn.php');

$cover=$_POST['covers']; 
$policy_type=$_POST['policy_type'];
$vehicle_number=$_POST['vehicle_number'];
$third_pty=$_POST['third_pty'];
$usage=$_POST['usage'];
$cover_value=implode(",",$cover);


$Date= date("Y/m/d");

#foreach ($cover as $covers){ 
#    echo $covers."<br />";
#}
$sql_query="INSERT INTO policy (policy_type,tpty,vehicle_number,covers,usage_purpose,issued_date) VALUES('$policy_type','$third_pty','$vehicle_number','$cover_value','$usage','$Date')";

if($database_connection->query($sql_query)===TRUE){
    
    header("location:Coverages.php?msg=Data Added");
    
}else{
    
           header("location:Coverages.php?msg=Data Not Added");
    
}




?>