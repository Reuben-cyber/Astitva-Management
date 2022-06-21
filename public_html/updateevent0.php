<?php
session_save_path('./tmp');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
	<form method="POST" action="updatevent.php"> 
		<div class="signupbox" style="height:22vw;">
			<p align="center" style="font-size: 2.5vw;">Update Event</p>
			<select name="event" id="event" style="margin-left: 7.5vw;margin-top: 1vw;width:20vw;height:2vw;">
    <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT eventname, id, type, age From astitva_events");  
        
        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
			$myevent=$nm." : ".$data[2];
			$event=$nm.":".$data[2].":".$data[1].":".$data[3];
            echo "<option id='nm' name='event' value='$event'> $myevent </option>"; 
        }	
        
    ?>  
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
</html>