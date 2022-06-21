<?php
session_save_path('./tmp');
session_start();
$id=$_SESSION["id"];
include("conn.php");

if(isset($_POST["submit"])){
	$name=$_POST['name'];
	$amount=$_POST['amount'];
	$balance=$_POST['balance'];

	$name=strip_tags($name);
    $name=mysqli_real_escape_string($con1,$name);

    $amount=strip_tags($amount);
    $amount=mysqli_real_escape_string($con1,$amount);

    $balance=strip_tags($balance);
    $balance=mysqli_real_escape_string($con1,$balance);
}
$sql="UPDATE astitva_sponsors set id='$id',amount='$amount',balance='$balance' where name='$name'";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Sponsor updated Successfully !');window.location.href='updatevent.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?>