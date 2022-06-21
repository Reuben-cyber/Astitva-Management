<?php
session_save_path('./tmp');
session_start();
include("conn.php");

if(isset($_POST["submit"])){
$plat=$_POST['plat'];
$comm=$_POST['comm'];
$part=$_POST['part'];
$part1=$_POST['part1'];
$over=$_POST['over'];
$user=$_POST['user'];
$satis=$_POST['satis'];
$freq=$_POST['freq'];
$cap=$_POST['cap'];
$con=$_POST['con'];
$crea=$_POST['crea'];
$eng=$_POST['eng'];
$freq1=$_POST['freq1'];
$social=$_POST['social'];
$reach=$_POST['reach'];
$appeal=$_POST['appeal'];
$youtube=$_POST['youtube'];
$sugg=$_POST['sugg'];
$name=$_POST['name'];
}

$sql="INSERT INTO feedback VALUES (NULL, '$plat', $comm,'$part','$part1','$over','$user','$satis','$freq','$cap','$con','$crea','$eng','$freq1','$social','$reach','$appeal','$youtube','$sugg','$name')";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Feedback sent successfully !');window.location.href='index.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 