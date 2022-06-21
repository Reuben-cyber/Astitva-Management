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
	<a href="printevent.php" target="_blank"><img src="images/print.jpg" style="height:3vw;width:3vw;margin-left:90vw;margin-top:3vw;"></img></a>
	<p style="color:white; margin-left:12vw;font-size:2vw; margin-top:-3vw;">Master List of Events:-</p>
	<table border="2" style="width:75vw;margin-top:2vw; margin-left:12.5vw; border:0.2vw solid #ffffff; color:white;">
	<tr>
		<td>Event name</td>
		<td>Type</td>
		<td>Age</td>
		<td>Price</td>
    </tr>
  <?php
        include "conn.php";  
        $records = mysqli_query($con1,"SELECT eventname,price,type,age From astitva_events order by eventname");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
			$ph=$data[1];
			$ty=$data[2];
			$age=$data[3];
            echo"<tr>
            <td>$nm</td>";
            if($ty=="S"){
            echo"<td>Solo</td>";
            }else{
               echo" <td>Group</td>";
            }
            if($age==0){
           echo" <td>15-26 yrs</td>";
            }else{
               echo" <td>Above 26 yrs</td>";
            }
           echo" <td>$ph</td>
            </tr>";
              ?>
              <?php
            }	
            ?>

	</table>
</body>
</html>