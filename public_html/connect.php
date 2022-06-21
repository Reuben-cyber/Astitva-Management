<?php
session_save_path('./tmp');
session_start();
?>
<html>
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
<center>
<div class="signupbox" style="margin-top:8vw;">
	<form action="revert.php" method="POST" class="main" enctype="multipart/form-data">
		<div class="connect">
		<h1>Send Mail!</h1><br>
			<input type="text" name="email" id="email" style="width:30vw;height:4vw; margin-top:0vw; margin-left:1vw;" placeholder="Enter your Email-ID">
		<input type="text" name="subject" id="subject" style="width:30vw;height:4vw;margin-left:1vw;" placeholder="Enter the subject"><br>
		<input type="textarea" name="message" style="width:30vw;height:5vw; margin-top:1vw;margin-left:1vw;"placeholder="Enter the body of the message"><br>
		<br><input type="file" name="upload" style="margin-left:-12vw;"><br>
		<input type="submit" name="submit" id="submit" style="margin-left:1vw;">
		</div>
	</form>

</div>
</center>
</body>
</center>
</html>