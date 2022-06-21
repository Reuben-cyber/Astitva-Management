<?php
session_save_path("./tmp");
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
	<br/>
	<h2>ADMINISTRATION PANEL</h2>
	<div class="centered">
		<h3>Add New Event</h3>
		<br />
		<form action="neweventadd.php" method="post">
			<div class="signupbox" style="height:23vw; margin-top:-4vw;">
			<p align="center" style="font-size: 2.5vw;">Add Event</p>
			<input type="text" name="nevent" placeholder="Name of the New Event" /><br>
			<input type="text" name="price" placeholder="Fee of the Event" /><br>
			<center>Age Group:-<input type="radio" name="age" value="0" placeholder="Age"> Below 26  <input type="radio" name="age" value="1"> Above 26<br>
			Type of Event:-<input type="radio" name="type" value="S" placeholder="Type"> Solo <input type="radio" name="type" value="G" > Group<br>
			Scope of Event:-<input type="radio" name="scope" value="0" placeholder="Type"> Indian <input type="radio" name="scope" value="1" >International<br></center>
			<input type="submit" name="submit" value="Add Event">
		</div>
		</form>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
	include('footer.php');
	?>
</html>