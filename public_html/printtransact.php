<?php
session_save_path("./tmp");
session_start();
ob_start();
require('my_functions.php');
include "conn.php"; 


        $rec="SELECT name,contact_no,email_address,college_name,dot,events, type, transaction_id, amount, age From astitva_registrations where YEAR(dot)=YEAR(NOW()) AND amount != 0.00 ORDER BY dot, type, name";
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
            $abcd="List of Transactions";
            $pdf->Cell(190,30,$abcd,0,1,'C');
            $pdf->Ln(4);

			$a=NULL;
            $pdf->SetFont('Arial','',15);
            $pdf->SetWidths(array(12,32,35,28,32,15,42)); 
            $mc_array = array('Sr.No.','Name','Transaction ID','Amount','Age/Type','Date','Event');
            $pdf->Row($mc_array,0); 
        $j=1;
		$amt=0.00;
        while($row = mysqli_fetch_array($records,MYSQLI_ASSOC))
        {
        	$name=$row['name'];
        	$phone=$row['contact_no'];
        	$email=$row['email_address'];
			//$b=$phone."/".$email;
        	$college=$row['college_name'];
        	$year=$row['dot'];
			$tid=$row['transaction_id'];
			$amt="Rs. ".$row['amount'];
        	$event=$row['events'];
			$myevents=array();
			$mynewevents=NULL;
			$myevents=explode("|",$event);
			for($i=0; $i<count($myevents); $i++){
				$mynewevents.=$myevents[$i]."\r\n";
			}
			$age=$row['age'];
			$type=$row['type'];
			if($type == 'S'){
				$a='Solo';
			} else {
				$a='Group';
			}
			if($age == '0'){
				$a .= " / 15-26 yrs";
			} else {
				$a .= "/ Above 26 yrs";
			}
            $pdf->SetFont('Arial','',13);
            $pdf->SetWidths(array(12,32,35,28,32,15,42)); 
            $mc_array = array($j,$name,$tid,$amt,$a,$year,$mynewevents);
            $pdf->Row($mc_array,0);
			$j++;
        }

mysqli_close($con1);

//Create a new PDF file

$pdf->Output();

ob_end_flush();


?>