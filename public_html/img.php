<?php
session_save_path('./tmp');
session_start();
?>
<html>
<head>
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
	<form method="POST" action="img1.php" enctype="multipart/form-data">
		<div class="adduser" style="height:20vw;">
			<p align="center" style="font-size: 2.5vw;">Homepage Images</p>
			<p align="center">
<input type="file" name="file1" id="file1" required>
<input type="file" name="file2" id="file2"  required><br>
<input type="file" name="file3" id="file3"  required>
<input type="file" name="file4" id="file4"  required><br>
<input type="file" name="file5" id="file5"  required><br>
</p>
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
</html>
