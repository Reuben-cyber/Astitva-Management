<?php
session_save_path('./tmp');
session_start();
$id=$_SESSION["id"];
include("conn.php");

if(isset($_POST["submit"])){
$pass=$_POST['pass'];
$pass=strip_tags($pass);
$pass=mysqli_real_escape_string($con1,$pass);
$pass=md5($pass);
}
$sql="update astitva_users set password='$pass' where id='$id' ";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Password updated Successfully !');window.location.href='admin.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 