<?php

require_once( 'database_conn.php' );
require_once( 'C:\xampp\htdocs\FindX project\TCPDF-main\TCPDF-main\tcpdf.php' );


$quotation_number = $_GET[ 'quotation_number' ];

$sql_query = "SELECT * FROM quotations WHERE quotation_number='$quotation_number'";
$sql_query_result = $database_connection->query( $sql_query );

if ( $sql_query_result->num_rows>0 ) {

    $data_row = $sql_query_result->fetch_assoc();

    $Vehicle_number = $data_row[ 'vehicle_number' ];
    $Brand = $data_row[ 'brand' ];
    $Model = $data_row[ 'model' ];
    $YOM = $data_row[ 'YOM' ];
    $Market_value = $data_row[ 'market_value' ];
    $tpty = $data_row[ 'tpty' ];
    $usage = $data_row[ 'usage_purpose' ];
    $cover_value = $data_row[ 'covers' ];
    $F_premium = $data_row[ 'f_premium' ];

       // Create new PDF document
       $pdf = new TCPDF( PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false );

       // Set document metadata
       $pdf->SetCreator( 'IMS' );
       $pdf->SetAuthor( 'IMS' );
       $pdf->SetTitle( 'Quotation' );

       // Add a page to the document
       $pdf->AddPage();

       // Set font styles and sizes
       $pdf->SetFont( 'helvetica', 'B', 16 );
       $pdf->SetTextColor( 0, 0, 0 );

       // Add title to the document
       $pdf->Cell( 0, 10, 'Quotation', 0, 1, 'C' );

       // Set font styles and sizes
       $pdf->SetFont( 'helvetica', '', 12 );

       // Create an array of data for the table
       $data = array(
           array( 'Vehicle Number', $Vehicle_number ),
           array( 'Brand', $Brand ),
           array( 'Model', $Model ),
           array( 'Year of Manufacture', $YOM ),
           array( 'Market Value', $Market_value ),
           array( 'Third Party Liability', $tpty ),
           array( 'Usage', $usage ),
           array( 'Covers', $cover_value ),
           array( 'Premium', $F_premium )
           
       );

       // Set table column widths
       $w = array( 60, 90 );

       // Create table
       foreach ( $data as $row ) {
           $pdf->Cell( $w[ 0 ], 7, $row[ 0 ], 0 );
           $pdf->Cell( $w[ 1 ], 7, $row[ 1 ], 0, 1 );
       }

       // Output the PDF file
       $pdf->Output( 'quotation.pdf', 'D' );

} else {
    header( 'location:Quotation_list.php?msg=Can`t find quotation' );
}

?>