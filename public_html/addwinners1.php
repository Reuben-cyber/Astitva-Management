<?php
session_save_path('./tmp');
session_start();
include("conn.php");

if(isset($_POST["submit"])){
$name=$_POST['name'];
$college=$_POST['college'];
$position=$_POST['position'];
$event=$_POST['event'];

$name=strip_tags($name);
$college=strip_tags($college);
$position=strip_tags($position);
$event=strip_tags($event);

$name=mysqli_real_escape_string($con1,$name);
$college=mysqli_real_escape_string($con1,$college);;
$position=mysqli_real_escape_string($con1,$position);
$event=mysqli_real_escape_string($con1,$event);
}
$sql="INSERT INTO astitva_winners VALUES (NULL, '$name', '$college','$event','$position')";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Added winner successfully !');window.location.href='admin.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 