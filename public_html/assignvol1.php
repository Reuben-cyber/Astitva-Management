<?php
session_save_path('./tmp');
session_start();
include("conn.php");

if(isset($_POST["submit"])){
	$name=$_POST['user'];
	$event=$_POST['event'];
	$event=strip_tags($event);
	$event=mysqli_real_escape_string($con1,$event);
}
$sql="update astitva_volunteers set volevent='$event' where volname='$name'";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Assigned Successfull !');window.location.href='assignvol.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 