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
	<a href="printtransact.php" target="_blank"><img src="images/print.jpg" style="height:3vw;width:3vw;margin-left:90vw;margin-top:3vw;"></img></a>
	<p style="color:white; margin-left:12vw;font-size:2vw; margin-top:-3vw;">List of Transactions</p>
	<table border="2" style="width:75vw;margin-top:2vw; margin-left:12.5vw; border:0.2vw solid #ffffff; color:white;">
	<tr>
		<td>Sr.No.</td>
		<td>Name</td>
		<td>Phone</td>
		<td>Email</td>
		<td>Type of<br>Participation</td>
		<td>Registration<br>Date</td>
	        <td>Transaction<br>ID</td>
		<td>Events</td>
                <td>Amount</td>
    </tr>
  <?php
        $j=1;
        $t="";

        include "conn.php";  
        $records = mysqli_query($con1,"SELECT name,contact_no,email_address,dot,events, receipt, type, transaction_id, amount From astitva_registrations where YEAR(dot)=YEAR(NOW()) AND amount != 0.00 AND verified = 1 ORDER BY dot, type, name");  
        if(!$records){
        	die("No records found");
        }
        $events1=array();
        while($data = mysqli_fetch_array($records,MYSQLI_NUM))
        {
			$nm=$data[0];
			$contact=$data[1];
			$email=$data[2];
			$dott=$data[3];
			$events=$data[4];
			$events1=explode("|",$events);
                        $receipt=$data[5];
                        $type=$data[6];
                        $partid=$data[8]."|".$nm;
                        $tid=$data[7];
                        //$mydot=date_format($dott, 'd M Y');
                        $amount=$data[8];

            echo"<tr>";
            echo "<td>$j</td>";
            echo "<td>$nm</td>";
            echo "<td>$contact</td>";
            echo "<td>$email</td>";
            if($type == "S"){$t = "Solo";} else {$t = "Group";}
            echo "<td>$t</td>";
            echo "<td>$dott</td>";
            echo "<td>$tid</td>";
            echo "<td>";
            for($i=0; $i<count($events1); $i++)
                    {
                     echo $events1[$i]."<br>";   
                    }
            echo "</td>";
            echo "<td>$amount</td>";
            echo "</tr>";
	    $j++;
        }	
            ?>

	</table>
</body>
</html>