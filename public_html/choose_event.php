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
	<form method="POST" action="eventwiselist.php"> 
		<div class="signupbox" style="height:22vw;">
			<p align="center" style="font-size: 2.5vw;">Choose the type of event </p>
		<center> TYPE: *<input type="radio" name="mytype" value="S" required="required" id="mytype"> Solo
<input type="radio" name="mytype" value="G"  required="required" id="mytype"> Group<br><br> </center> 
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
</html>
