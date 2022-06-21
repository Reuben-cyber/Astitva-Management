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
	<form method="POST" action="deletejudge1.php">
		<div class="signupbox" style="height:20vw; margin-top:5vw;">
			<p align="center" style="font-size: 2.5vw;">Delete Judge</p>
 <select name="user" id="user" style="margin-left: 7.5vw;margin-top: 1vw;width:20vw;height:2vw;">
    <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT name From astitva_judges");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
            echo "<option value='$nm' id='nm' name='$nm'> $nm </option>"; 
        }	
    ?>  
  </select><br>
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
</html>