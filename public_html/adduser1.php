<?php
session_save_path('./tmp');
session_start();
include("conn.php");

if(isset($_POST["submit"])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$password=$_POST['pass'];
$email=$_POST['email'];
$stream=$_POST['stream'];
$yr=$_POST['yr'];
$userty=$_POST['userty'];
$event=$_POST['event'];
$status='1';

$name=strip_tags($name);
$phone=strip_tags($phone);
$password=strip_tags($password);
$email=strip_tags($email);
$stream=strip_tags($stream);
$yr=strip_tags($yr);
$userty=strip_tags($userty);
$event=strip_tags($event);

$name=mysqli_real_escape_string($con1,$name);
$phone=mysqli_real_escape_string($con1,$phone);
$password=mysqli_real_escape_string($con1,$password);
$email=mysqli_real_escape_string($con1,$email);
$stream=mysqli_real_escape_string($con1,$stream);
$yr=mysqli_real_escape_string($con1,$yr);
$userty=mysqli_real_escape_string($con1,$userty);
$event=mysqli_real_escape_string($con1,$event);
}
$sql="INSERT INTO astitva_users VALUES (NULL, '$name','$email',md5('$password'), $phone,'$stream','$yr','$event','$userty','$status')";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Sign Up Successfull !');window.location.href='admin.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 