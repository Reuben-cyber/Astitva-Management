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
	<a href="printwinners.php" target="_blank"><img src="images/print.jpg" style="height:3vw;width:3vw;margin-left:90vw;margin-top:3vw;"></img></a>
	<p style="color:white; margin-left:12vw;font-size:2vw; margin-top:-3vw;">List of Winners:-</p>
	<table border="2" style="width:75vw;margin-top:2vw; margin-left:12.5vw; border:0.2vw solid #ffffff; color:white;">
	<tr>
		<td>Name</td>
		<td>College</td>
		<td>Event</td>
		<td>Position</td>
    </tr>
  <?php
        include "conn.php";  
        $records = mysqli_query($con1,"SELECT name,college,event,position From astitva_winners");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
			$ph=$data[1];
			$st=$data[2];
			$rt=$data[3];
            echo"<tr>
            <td>$nm</td>
            <td>$ph</td>
            <td>$st</td>
            <td>$rt</td>
            </tr>";
              ?>
              <?php
            }	
            ?>

	</table>
</body>
</html>