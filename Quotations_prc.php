<?php

require_once( 'database_conn.php' );

$cover = $_POST[ 'covers' ];

$Market_value = $_POST[ 'Market_value' ];

$Vehicle_number = $_POST[ 'Vehicle_number' ];

$Brand = $_POST[ 'Brand' ];
$Model = $_POST[ 'Model' ];
$YOM = $_POST[ 'YOM' ];
$tpty = $_POST[ 'tpty' ];
$usage = $_POST[ 'usage' ];
$cover_value = implode( ',', $cover );
$count = count( $cover );

$Year_cal;
$Market_value_cal;
$Usage_cal;
$tpty_cal;
$_Covers_cal;

#Market Value
$Market_value_cal = $Market_value/100;

#Year calculation
if ( $YOM >= 2010 && $YOM <= 2020 ) {
    $Year_cal = 1.01;
} elseif ( $YOM >= 2000 && $YOM <= 2009 ) {
    $Year_cal = 1.05;
} elseif ( $YOM >= 1990 && $YOM <= 1999 ) {
    $Year_cal = 1.08;
} elseif ( $YOM >= 1980 && $YOM <= 1989 ) {
    $Year_cal = 1.2;
} else {
    $Year_cal = 1.7;
}

#Usage calculation
if ( $usage == 'Private' ) {
    $Usage_cal = 1.2;
} elseif ( $usage == 'Hiring' ) {
    $Usage_cal = 1.5;
} else {
    $Usage_cal = 1.9;
}

#Rhird party calculation
if ( $tpty == 100000 ) {
    $tpty_cal = 150;
} elseif ( $tpty == 300000 ) {
    $tpty_cal = 250;
} elseif ( $tpty == 500000 ) {
    $tpty_cal = 450;
} elseif ( $tpty == 1000000 ) {
    $tpty_cal = 650;
} elseif ( $tpty == 2000000 ) {
    $tpty_cal = 950;
}

#Covers calculation
$_Covers_cal = $count*0.2;

#Final Premium
$F_premium = ( $Market_value_cal*$Year_cal*$Usage_cal*$_Covers_cal )+$tpty_cal;



if ($cover == ''or $Market_value == ''or $Vehicle_number == ''or $Brand == ''or $Model == ''or $YOM == ''or $tpty == ''or $usage == '' ) {

    header( 'location:Quotations.php?msg=Please Fill All Fields' );

} else {

    $sql_query = "INSERT INTO quotations (brand,model,market_value,YOM,vehicle_number,tpty,covers,usage_purpose,f_premium) VALUES('$Brand','$Model','$Market_value','$YOM','$Vehicle_number','$tpty','$cover_value','$usage','$F_premium')";

    if ( $database_connection->query( $sql_query ) === TRUE ) {

        header( 'location:Quotations.php?msg=Data Added' );

    } else {

        header( 'location:Quotations.php?msg=Data Not Added' );

    }

}

?>