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
	<form method="POST" action="updatesponsor1.php"> 
		<div class="signupbox">
			<p align="center" style="font-size: 2.5vw;">Choose Sponsor</p>
 <select name="name" id="name" style="margin-left: 7.5vw;margin-top: 1vw;width:20vw;height:2vw;">
    <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT name From astitva_sponsors");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
            echo "<option value='$nm' id='nm' name='$nm'> $nm </option>"; 
        }	
    ?>  
    <input type="text" name="amount" id="amount" placeholder="Amount"><br>
    <input type="text" name="balance" id="balance" placeholder="Balance"><br>
    <input type="submit" name="submit" id="submit">
  </select><br>
</div>
</form>
</body>
</html>