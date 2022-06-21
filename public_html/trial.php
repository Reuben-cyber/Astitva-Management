<?php
require('mc_table.php');

include ("dbconnect.php");

$pdf=new PDF_MC_Table(); 
$pdf->AddPage(); 
$pdf->SetFont('Arial','B',12); 
$abcd='Trial For Astitva';
$pdf->Cell(10,10,$abcd,0);
$pdf->Ln(14);
$pdf->SetWidths(array(20,50,30)); 
$mc_array = array('Sr. No.','Name of the event','Status');
$pdf->Row($mc_array,0);
$pdf->SetFont('');
//Select the data you want to show in your PDF file
$query="SELECT eventname, status FROM astitva_events ORDER BY eventname";
$result = mysqli_query($con,$query) or die($query."<br/><br/>".mysqli_error($con));
$j=0;

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
if($row['status'] == 'S') {
	$curr_status="Selected";
} else {
	$curr_status="Not Selected";
}
$j++;
$pdf->SetWidths(array(20,50,30)); 
$mc_array = array($j,$row['eventname'],$curr_status); 
$pdf->Row($mc_array,0);
}

mysqli_close($con);

//Create a new PDF file

$pdf->Output();
?>