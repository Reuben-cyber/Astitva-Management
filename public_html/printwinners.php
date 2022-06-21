<?php
session_save_path("./tmp");
session_start();
ob_start();
require('my_functions.php');
include "conn.php"; 

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
            $abcd="List of Winners";
            $pdf->Cell(190,30,$abcd,0,1,'C');
            $pdf->Ln(4);

            $pdf->SetFont('Arial','',15);
            $pdf->SetWidths(array(50,50,50,40)); 
            $mc_array = array('Name','College','Event','Position');
            $pdf->Row($mc_array,0);

            $records = mysqli_query($con1,"SELECT name,college,event,position From astitva_winners");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
			$ph=$data[1];
			$st=$data[2];
            $rt=$data[3];

			$pdf->SetFont('Arial','',13);
            $pdf->SetWidths(array(50,50,50,40)); 
            $mc_array = array($nm,$ph,$st,$rt);
            $pdf->Row($mc_array,0);
        }

mysqli_close($con1);

//Create a new PDF file

$pdf->Output();

ob_end_flush();


?>