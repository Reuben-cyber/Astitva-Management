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
	<form method="POST" action="addjudge1.php">
		<div class="adduser" style="height:25vw; margin-top: 5vw;">
			<p align="center" style="font-size: 2.5vw;">Add Judge</p>
<input type="text" name="name" id="name" placeholder="Enter Name"><br>
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
</div>
</form>
</body>
</html>
