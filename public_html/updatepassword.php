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
	<form method="POST" action="updatepassword1.php"> 
		<div class="signupbox"  style="height:20vw;">
			<p align="center" style="font-size: 2.5vw;">Update Password</p>
			<input type="password" name="pass" id="pass" placeholder="Enter Password"><br>
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
</html>