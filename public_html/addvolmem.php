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
	<a href="printmem.php" target="_blank"><img src="images/print.jpg" style="height:3vw;width:3vw;margin-left:90vw;margin-top:3vw;"></img></a>
	<p style="color:white; margin-left:12vw;font-size:2vw; margin-top:-3vw;">Members of Heritage Collective:- </p>
	<table border="2" style="width:75vw;margin-top:2vw; margin-left:12.5vw; border:0.2vw solid #ffffff; color:white;">
	<tr>
		<td>Name</td>
		<td>Phone</td>
		<td>Stream</td>
		<td>Year</td>
		<td>Event</td>
    </tr>
  <?php
        include "conn.php";  
        $records = mysqli_query($con1,"SELECT volname,volphone,volstream,yr,volevent From astitva_volunteers where hr='yes'");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
			$ph=$data[1];
			$st=$data[2];
			$yr=$data[3];
			$ev=$data[4];
            echo"<tr>
            <td>$nm</td>
            <td>$ph</td>
            <td>$st</td>
            <td>$yr</td>
            <td>$ev</td>
            </tr>";
              ?>
              <?php
            }	
            ?>

	</table>
</body>
</html>