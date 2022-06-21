<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/astitva.css" />
	</head>
<body>
	<?php
	include('header.php');
	?>
	<form method="POST" action="check.php">
		<div class="loginbox">
			<p align="center" style="font-size: 2.5vw;">Login Details</p>
<input type="text" name="email" id="email" placeholder="Enter Loginid"><br>
<input type="password" name="pass" id="pass" placeholder="Enter Password"><br>
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
</html>
