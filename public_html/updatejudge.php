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
	<form method="POST" action="updatejudge1.php"> 
		<div class="signupbox" style="margin-top:5vw; margin-top: 5vw;">
			<p align="center" style="font-size: 2.5vw;">Update Judge</p>
<select name="name" id="name">
  <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT name From astitva_judges");  

        while($data = mysqli_fetch_array($records))
        {
      $nm1=$data[0];
            echo "<option value='$nm1' id='nm1' name='$nm1'> $nm1 </option>"; 
        } 
    ?>  
  </select><br>

<input type="text" name="phone" id="phone" placeholder="Enter Phone"><br>
<input type="text" name="email" id="email" placeholder="Enter Email"><br>
<select name="event" id="event">
  <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT eventname From astitva_events");  

        while($data = mysqli_fetch_array($records))
        {
      $nm=$data[0];
            echo "<option value='$nm' id='nm' name='$nm'> $nm </option>"; 
        } 
    ?>  
  </select>

    <input type="submit" name="submit" id="submit">
  </select><br>
</div>
</form>
</body>
</html>