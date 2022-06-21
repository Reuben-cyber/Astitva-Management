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
	<table border="2" style="width:75vw;margin-top:8vw; margin-left:12.5vw; border:0.2vw solid #ffffff; color:white;">
	<tr>
		<td>Name</td>
		<td>Stream</td>
		<td>Year</td>
		<td>Event</td>
		<td>New Event</td>
		<td>Assign</td>
    </tr>
    	<?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT volname,volstream,yr,volevent From astitva_volunteers");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
			$st=$data[1];
			$yr=$data[2];
			$ev=$data[3];
            echo"<tr>
            <td>$nm</td>
            <form method='POST' action='assignvol1.php'>
            <input type='hidden' name='user' id='user' value=$nm>
            <td>$st</td>
            <td>$yr</td>
            <td>$ev</td>";
              ?>
            <td style="width:20vw;"><select name="event" id="event" style="margin-left:0vw;margin-top:0vw;margin-right:0vw;width:15vw;height:2vw;">
    <?php
        //include "conn.php";  
        $records1 = mysqli_query($con1, "SELECT eventname From astitva_events");  

        while($data = mysqli_fetch_array($records1))
        {
			$nm=$data[0];
            echo "<option value='$nm' id='nm' name='$nm'> $nm </option>"; 
        }	
    ?>  
  </select><br>
</td>
<td><input type="submit" name="submit" id="submit"></td>
           </tr>
              </form>
            <?php
            }	
            ?>

	</table>
</body>
</html>



