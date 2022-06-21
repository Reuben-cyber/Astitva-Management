<?php
session_save_path("./tmp");
session_start();
ob_start();
require('my_functions.php');
include "conn.php";

/*class PDF extends FPDF
{
    
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}*/

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
            $abcd="List of Events";
            $pdf->Cell(190,30,$abcd,0,1,'C');
            $pdf->Ln(2);

            $pdf->SetFont('Arial','',15);
            $pdf->SetWidths(array(80,30,30,30)); 
            $mc_array = array('Event Name','Type','Age Group','Price');
            $pdf->Row($mc_array,0);

            $records = mysqli_query($con1,"SELECT eventname,price,type,age From astitva_events order by eventname");  

         while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
			$pr=$data[1];
			$ty=$data[2];
			$age=$data[3];
			
			if($ty==S){
			    $type="Solo";
			}else{
			    $type="Group";
			}
			
			if($age==0){
			    $ageg="15-26 yrs";
			}else{
			    $ageg="Above 26 yrs";
			}

			$pdf->SetFont('Arial','',13);
            $pdf->SetWidths(array(80,30,30,30)); 
            $mc_array = array($nm,$type,$ageg,$pr);
            $pdf->Row($mc_array,0);
        }

mysqli_close($con1);

//Create a new PDF file

$pdf->Output();

ob_end_flush();


?>