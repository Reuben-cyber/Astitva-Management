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
	 <div class="centered">
		<h3>Add New Sponsor</h3>
		<br />
		<form action="addsponsor1.php" method="post" enctype="multipart/form-data">
			<div class="addsponsor" style="margin-top: 1vw;">
			<p align="center" style="font-size: 2.5vw;">Add Sponsor</p>
			<input type="text" name="nsponsor" placeholder="Name of Sponsor" required/><br>
			<input type="text" name="namount" placeholder="Amount" required/><br>
			<input type="text" name="nbalance" placeholder="Balance (if any)" /><br></br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add Logo:<input type="file" name="file1" required/><br>
			<input type="submit" name="submit" value="Add Sponsor">
		</div>
		</form>
</body>
</html>