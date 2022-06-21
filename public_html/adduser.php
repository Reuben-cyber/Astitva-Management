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
if (isset($_SESSION['usertype'])=='a') {
include'headeradmin.php';
}else{
    include'headerhead.php';
}
?>
	<form method="POST" action="adduser1.php">
		<div class="adduser" style="margin-top:5vw;">
			<p align="center" style="font-size: 2.5vw;">Add User</p>
<input type="text" name="name" id="name" placeholder="Enter Name"><br>
<input type="text" name="phone" id="phone" placeholder="Enter Phone"><br>
<input type="text" name="email" id="email" placeholder="Enter Email"><br>
<input type="password" name="pass" id="pass" placeholder="Enter Password"><br>
 <select name="stream" id="stream">
 	<option value="MCOM">MCOM</option>
    <option value="BCOM">BCOM</option>
    <option value="BBA">BBA</option>
    <option value="BBA-IB">BBA-IB</option>
    <option value="BBA-CA">BBA-CA</option>
    <option value="TEACHER">TEACHER</option>
  </select><br>
  <select name="yr" id="yr">
  	 <option value="FY">FY</option>
    <option value="SY">SY</option>
    <option value="TY">TY</option>
    <option value="TEACHER">TEACHER</option>
    </select><br>
    <select name="userty" id="userty">
  	 <option value="a">Admin</option>
    <option value="eh">Event Head</option>
    </select><br>
<select name="event" id="event">
  <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT DISTINCT eventname From astitva_events");  
        $all= "<option value='ALL' name='nm'>ALL</option>";
        while($data = mysqli_fetch_array($records))
        {
      $nm=$data[0];
            $all .= "<option value='$nm' id='nm' name='nm'> $nm </option>"; 
        } 
        echo $all;
    ?>  
  </select>
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
</html>
