<?php
session_save_path('./tmp');
session_start();
include("conn.php");

if(isset($_POST["submit"])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$event=$_POST['event'];

$name=strip_tags($name);
$phone=strip_tags($phone);
$email=strip_tags($email);
$event=strip_tags($event);

$name=mysqli_real_escape_string($con1,$name);
$phone=mysqli_real_escape_string($con1,$phone);
$email=mysqli_real_escape_string($con1,$email);
$event=mysqli_real_escape_string($con1,$event);
}
$sql="INSERT INTO astitva_judges VALUES (NULL, '$name', $phone,'$email','$event')";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Judge Added Successfully !');window.location.href='admin.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 