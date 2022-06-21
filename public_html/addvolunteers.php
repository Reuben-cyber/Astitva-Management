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
	<form method="POST" action="addvolunteers1.php">
		<div class="signupbox" style="height:33vw; margin-top: 5vw;">
			<p align="center" style="font-size: 2.5vw;">Add Volunteers</p>
<input type="text" name="name" id="name" placeholder="Enter Name"><br>
<input type="text" name="phone" id="phone" placeholder="Enter Phone"><br>
 <select name="stream" id="stream">
 	<option value="mcom">MCOM</option>
    <option value="bcom">BCOM</option>
    <option value="bba">BBA</option>
    <option value="bba-ib">BBA-IB</option>
    <option value="bca">BCA</option>
         <option value="jc">Junior College</option>
  </select><br>
  <select name="yr" id="yr">
  	 <option value="fy">FY</option>
    <option value="sy">SY</option>
    <option value="ty">TY</option>
    </select><br>
<center>Member of Heritage collective?</center>
    <select name="hr" id="hr">
  	 <option value="yes">Yes</option>
    <option value="no">No</option>
    </select><br>

    <select name="event" id="event">
  <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT DISTINCT eventname From astitva_events order by eventname");  
        echo "<option value='blank' id='blank' name='eventname'>Select Event</option>";
        while($data = mysqli_fetch_array($records))
        {
      $nm=$data[0];

            echo "<option value='$nm' id='nm' name='eventname'> $nm </option>"; 
        } 
    ?>  
  </select>
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
<div style="margin-top: 45vw;">
  <?php
  include('footer.php');
  ?>
    
  </div>
</html>
