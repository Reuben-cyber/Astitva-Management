<?php
session_save_path("./tmp");
session_start();
ob_start();
require('my_functions.php');
include "conn.php"; 


        $rec="SELECT name,contact_no,email_address,college_name,dot,events From astitva_registrations where YEAR(dot)=YEAR(NOW())";
        $records = mysqli_query($con1,$rec); 
            $pdf=new PDF(); 
            $pdf->AddPage(); 
             $pdf->Image('images/astitva.jpg',5,5,45,17);
            $pdf->SetFont('Arial','B',15); 
            $ab="Deccan Education Society's";
            $pdf->Cell(190,10,$ab,0,1,'C');
            $abc="Brihan Maharashtra College Of Commerce (Autonomous), Pune";
            $pdf->Cell(190,12,$abc,0,1,'C');
            $pdf->Image('images/bmcc_logo.jpg',180,3,20);
            $pdf->Ln(2); 
            $abcd="List of Participants";
            $pdf->Cell(190,30,$abcd,0,1,'C');
            $pdf->Ln(4);

            $pdf->SetFont('Arial','',15);
            $pdf->SetWidths(array(32,32,32,32,15,45)); 
            $mc_array = array('Name','Phone','Email','College','Year','Event');
            $pdf->Row($mc_array,0); 
        
        while($row = mysqli_fetch_array($records,MYSQLI_ASSOC))
        {
        	$name=$row['name'];
        	$phone=$row['contact_no'];
        	$email=$row['email_address'];
        	$college=$row['college_name'];
        	$year=$row['dot'];
        	$event=$row['events'];
            $pdf->SetFont('Arial','',13);
            $pdf->SetWidths(array(32,32,32,32,15,45)); 
            $mc_array = array($name,$phone,$email,$college,$year,$event);
            $pdf->Row($mc_array,0);
        }

mysqli_close($con1);

//Create a new PDF file

$pdf->Output();

ob_end_flush();


?>