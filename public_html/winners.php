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
	<form method="POST" action="addwinners1.php">
		<div class="signupbox" style="height:33vw; margin-top: 5vw;">
			<p align="center" style="font-size: 2.5vw;">Add Winner</p>
 <select name="name" id="name">
  <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT name From astitva_registrations order by name");  
        echo "<option value='blank' id='blank' name='name'>Select Participants</option>";
        while($data = mysqli_fetch_array($records))
        {
      $nm=$data[0];

            echo "<option value='$nm' id='nm' name='name'> $nm </option>"; 
        } 
    ?>  
  </select><br>

  <select name="college" id="college">
  <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT college_name From astitva_registrations order by college_name");  
        echo "<option value='blank' id='blank' name='college'>Select college</option>";
        while($data = mysqli_fetch_array($records))
        {
      $nm1=$data[0];

            echo "<option value='$nm1' id='nm1' name='college'> $nm1 </option>"; 
        } 
    ?>  
  </select><br>

    <select name="event" id="event">
  <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT eventname From astitva_events order by eventname");  
        echo "<option value='blank' id='blank' name='eventname'>Select Event</option>";
        while($data = mysqli_fetch_array($records))
        {
      $nm2=$data[0];

            echo "<option value='$nm2' id='nm2' name='eventname'> $nm2 </option>"; 
        } 
    ?>  
  </select><br>

   <select name="position" id="position">
  <option value="First">First</option>
    <option value="Second">Second</option>
    <option value="Third">Third</option>
    <option value="Joint First">Joint First</option>
    <option value="Joint Second">Joint Second</option>
    <option value="Joint Third">Joint Third</option>
    <option value="Consolation">Consolation</option>
  </select><br>

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
