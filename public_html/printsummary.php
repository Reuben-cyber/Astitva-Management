<?php
session_save_path("./tmp");
session_start();
ob_start();
require('my_functions.php');
include "conn.php"; 


        $rec="SELECT dot, type, count(type) AS cnt_type, sum(amount) AS datewisesum From astitva_registrations where YEAR(dot)=YEAR(NOW()) AND amount != 0.00 GROUP BY dot, type ORDER BY dot, type";
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
            $abcd="Summary of Transactions";
            $pdf->Cell(190,30,$abcd,0,1,'C');
            $pdf->Ln(4);

			$a=NULL;
            $pdf->SetFont('Arial','',15);
            $pdf->SetWidths(array(15,45,32,42,42)); 
            $mc_array = array('Sr.No.','Type of Participation','Registration Date','Number of Transactions','Amount for Date');
            $pdf->Row($mc_array,0); 
        $j=1; $t=NULL;
        while($row = mysqli_fetch_array($records,MYSQLI_ASSOC))
        {
						$dott=$row['dot'];
                        $type=$row['type'];
                        $cnt_type=$row['cnt_type'];
                        //$mydot=date_format($dott, 'd M Y');
                        $datewisesum=$row['datewisesum'];
            if($type == "S"){$t = "Solo (Rs. 70.00)";} else {$t = "Group (Rs. 110.00)";}
            $pdf->SetFont('Arial','',13);
            $pdf->SetWidths(array(15,45,32,42,42)); 
            $mc_array = array($j,$t,$dott,$cnt_type,$datewisesum);
            $pdf->Row($mc_array,0);
			$j++;
        }

mysqli_close($con1);

//Create a new PDF file

$pdf->Output();

ob_end_flush();


?>