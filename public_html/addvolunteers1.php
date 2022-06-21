<?php
session_save_path('./tmp');
session_start();
include("conn.php");

if(isset($_POST["submit"])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$stream=$_POST['stream'];
$yr=$_POST['yr'];
$hr=$_POST['hr'];
$event=$_POST['event'];
$status='1';

$name=strip_tags($name);
$phone=strip_tags($phone);
$stream=strip_tags($stream);
$yr=strip_tags($yr);
$hr=strip_tags($hr);
$event=strip_tags($event);

$name=mysqli_real_escape_string($con1,$name);
$name=ucwords($name);
$phone=mysqli_real_escape_string($con1,$phone);;
$stream=mysqli_real_escape_string($con1,$stream);
$stream=strtoupper($stream);
$yr=mysqli_real_escape_string($con1,$yr);
$yr=strtoupper($yr);
$hr=mysqli_real_escape_string($con1,$hr);
$hr=strtoupper($hr);
$event=mysqli_real_escape_string($con1,$event);
}
$sql="INSERT INTO astitva_volunteers VALUES (NULL, '$name', $phone,'$stream','$yr','$hr','$event')";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Added volunteer successfully !');window.location.href='admin.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 