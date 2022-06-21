<?php
session_save_path("./tmp");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		tr{
			height:3vw;
		}
	</style>
	<meta charset = "UTF-8">
	<title>Astitva Management System</title>
	<link rel="stylesheet" type="text/css" href="css/astitva.css" />
</head>
<body>
	<?php
	include('header.php');
	?>
	<br>
  <?php
if (isset($_SESSION['usertype'])&&($_SESSION['usertype'])=='a') {
include'headeradmin.php';
}else{
    include'headerhead.php';
}
?>
	<a href="printallevents.php" target="_blank"><img src="images/print.jpg" style="height:3vw;width:3vw;margin-left:90vw;margin-top:3vw;"></img></a>
	<p style="color:white; margin-left:12vw;font-size:2vw; margin-top:-3vw;">Eventwise Participants</p>

	<table border="2" style="width:90vw;margin-top:2vw; margin-left:5vw; border:0.2vw solid #ffffff; color:white;">
	<tr>
		<td>Sr.No.</td>
		<td>Name</td>
		<td>Phone</td>
		<td>Email</td>
		<td>College</td>
		<td>Registration<br>Date</td>
	    <td>Transaction<br>ID</td>
		<td>Events</td>
    </tr>
  <?php
        $j=1;
        include "conn.php";  
        $records = mysqli_query($con1,"SELECT name,contact_no,email_address,college_name,dot,events, receipt, photo_id, id, transaction_id, verified From astitva_registrations where YEAR(dot)=YEAR(NOW())");  
        if(!$records){
        	die("No records found");
        }
        $events1=array();
		$curr_eve = NULL;
        while($data = mysqli_fetch_array($records,MYSQLI_NUM))
        {
			$nm=$data[0];
			$contact=$data[1];
			$email=$data[2];
			$college=$data[3];
			$dott=$data[4];
			$events=$data[5];
			$events1=explode("|",$events);
                        $receipt=$data[6];
                        $photo_id=$data[7];
                        $partid=$data[8]."|".$nm;
                        $tid=$data[9];
			$ver=$data[10];
                        //$mydot=date_format($dott, 'd M Y');
			for($i=0; $i<count($events1); $i++)
                    {
						if($events1[$i] != $curr_eve){
							$curr_eve = $events1[$i];
						echo $events1[$i]."<br>";
						}
            echo"<tr>";
            echo "<td>$j</td>";
            echo "<td>$nm</td>";
            echo "<td>$contact</td>";
            echo "<td>$email</td>";
            echo "<td>$college</td>";
            echo "<td>$dott</td>";
            echo "<td>$tid</td>";
            echo "<td>";
            echo "</td>";
            echo "</tr>";
	    $j++;
					}		
        }	
        
           ?>
      
	</table>
</body>
</html>