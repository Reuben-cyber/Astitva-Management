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
	<a href="printsummary.php" target="_blank"><img src="images/print.jpg" style="height:3vw;width:3vw;margin-left:90vw;margin-top:3vw;"></img></a>
	<p style="color:white; margin-left:12vw;font-size:2vw; margin-top:-3vw;">Summary of Transactions</p>
	<table border="2" style="width:75vw;margin-top:2vw; margin-left:12.5vw; border:0.2vw solid #ffffff; color:white;">
	<tr>
		<td>Sr.No.</td>
		<td>Type of<br>Participation</td>
		<td>Registration<br>Date</td>
	        <td>No. of Transactions</td>
                <td>Amount</td>
    </tr>
  <?php
        $j=1;
        $t="";

        include "conn.php";  
        $records = mysqli_query($con1,"SELECT dot, type, count(type) AS cnt_type, sum(amount) AS datewisesum From astitva_registrations where YEAR(dot)=YEAR(NOW()) AND amount != 0.00 GROUP BY dot, type ORDER BY dot, type");  
        if(!$records){
        	die("No records found");
        }
        $events1=array();
        while($data = mysqli_fetch_array($records,MYSQLI_NUM))
        {
			$dott=$data[0];
                        $type=$data[1];
                        $cnt_type=$data[2];
                        //$mydot=date_format($dott, 'd M Y');
                        $datewisesum=$data[3];

            echo"<tr>";
            echo "<td>$j</td>";
            if($type == "S"){$t = "Solo (Rs. 70.00)";} else {$t = "Group (Rs. 110.00)";}
            echo "<td>$t</td>";
            echo "<td>$dott</td>";
			echo "<td>$cnt_type</td>";
            echo "<td>$datewisesum</td>";
            echo "</tr>";
	    $j++;
        }	
            ?>

	</table>
</body>
</html>