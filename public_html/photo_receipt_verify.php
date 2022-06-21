<?php
include("conn.php");
if(isset($_POST["submit"])){
	$verify=$_POST["mycheck"];
}
for($i=0; $i<count($verify); $i++){
	$verify[$i]=strip_tags($verify[$i]);
	$verify[$i]=mysqli_real_escape_string($con1,$verify[$i]);
}
$verifyid=array();
$result=array();
for($i=0; $i<count($verify); $i++){
	$verifyid=explode("|",$verify[$i]);

$sql1="UPDATE astitva_registrations SET verified = '1' WHERE id='$verifyid[0]' AND name='$verifyid[1]'";
$result[$i]=mysqli_query($con1, $sql1);
if(!$result[$i]){
   echo "<script>alert('Oops!! Something went wrong!!');window.location.href='listofpart.php';</script>";
} 
}
echo "<script>alert('Participant(s) Verified Successfully !');window.location.href='listofpart.php';</script>";
mysqli_close($con1);
?>