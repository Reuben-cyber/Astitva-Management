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
if (isset($_SESSION['usertype'])=='a') {
include'headeradmin.php';
}else{
    include'headerhead.php';
}
?>
	<table border="2" style="width:75vw;margin-top:8vw; margin-left:12.5vw; border:0.2vw solid #ffffff; color:white;">
	<tr>
		<td>Name</td>
		<td>Stream</td>
		<td>Year</td>
		<td>Event</td>
		<td>Status</td>
		<td>Activate/Deactivate</td>
    </tr>
    	<?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT username,stream,year,event,userstatus From astitva_users");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
			$st=$data[1];
			$yr=$data[2];
			$ev=$data[3];
			$stat=$data[4];
			if($stat=='nb'){
				$stast="Not Blocked";
			}elseif($stat=='b'){
				$stast="Blocked";
			}
            echo"<tr>
            <td>$nm</td>
            <form method='POST' action='blockuser1.php'>
            <input type='hidden' name='user' id='user' value=$nm>
            <td>$st</td>
            <td>$yr</td>
            <td>$ev</td>
            <td>$stast</td>";
              ?>
            <td>&nbsp&nbsp&nbsp<input type="submit" name="submit" id="submit" value="Change Status">&nbsp&nbsp&nbsp</td>
            </tr>
              </form>
            <?php
            }	
            ?>

	</table>
</body>
</html>



