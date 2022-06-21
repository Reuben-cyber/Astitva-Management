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
	<table border="2" style="width:75vw;margin-top:8vw; margin-left:0vw; border:0.2vw solid #ffffff; color:white;">
	<tr>
		<td>Sr No.</td>
		<td>Date</td>
		<td>Title</td>
		<td>Money Spent</td>
		<td>Money Received</td>
		<td>Event</td>
		<td>Photo (File size limit upto 4MB)</td>
		<td>Add</td>
    </tr>
    <?php
        include "conn.php";  
        $records = mysqli_query($con1,"SELECT sr,date,title,spent,received,event,photo From accounts");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0]; //sr
			$st=$data[1];//date
			$yr=$data[2];//title
			$ev=$data[3];//money spent
			$stat=$data[4];//money received
			$stat1=$data[5];//event
			$stat2=$data[6];//photo
            echo"<tr>
            <td style='margin-left: 1vw;'>$nm</td>
            <td style='margin-left: 1vw;'>$st</td>
            <td style='margin-left: 1vw;'>$yr</td>
            <td style='margin-left: 1vw;'>$ev</td>
            <td style='margin-left: 1vw;'>$stat</td>
            <td style='margin-left: 1vw;'>$stat1</td>
            <td style='margin-left: 1vw;'>$stat2</td>
            </tr>";
              ?>
              <?php
            }	
            ?>
            <tr>
<form action="accounts1.php" method="POST" enctype="multipart/form-data">
            	<td><input type="text" name="id" id="id" style="margin-left: 1vw;width:10vw;margin-right:1vw;"></td>
            	<td><input type="text" name="date" id="date" style="margin-left: 1vw; width:10vw;margin-right:1vw;"></td>
            	<td><input type="text" name="title" id="title" style="margin-left: 1vw;width:10vw;margin-right:1vw;"></td>
            	<td><input type="text" name="price" id="price" style="margin-left: 1vw;width:10vw;margin-right:1vw;"></td>
            	<td><input type="text" name="received" id="received" style="margin-left: 1vw;width:10vw;margin-right:1vw;"></td>
            	<td><select name="event" id="event" style="width:10vw;margin-left: 1vw;margin-right:1vw;margin-top: 0vw; height:1.5vw;">
    <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT eventname From astitva_events");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
            echo "<option value='$nm' id='nm' name='$nm'> $nm </option>"; 
        }	
    ?>  
</select>
</td>
            	<td><input type="file" name="file1" id="file1" style="margin-left: 1vw;"></td>
            	<td><input type="submit" name="submit" id="submit"></td>
            </form>
</tr>
	</table>
</body>
</html>
