<?php
session_save_path('./tmp');
session_start();
$id=$_SESSION["id"];
include("conn.php");

if(isset($_POST["submit"])){
	$name=$_POST['name'];
	$amount=$_POST['phone'];
	$balance=$_POST['email'];
  $event=$_POST['event'];

	$name=strip_tags($name);
    $name=mysqli_real_escape_string($con1,$name);

    $amount=strip_tags($amount);
    $amount=mysqli_real_escape_string($con1,$amount);

    $balance=strip_tags($balance);
    $balance=mysqli_real_escape_string($con1,$balance);

    $event=strip_tags($event);
    $event=mysqli_real_escape_string($con1,$event);
}
$sql="UPDATE astitva_judges set phone='$amount',email='$balance',event='$event' where name='$name'";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Judge updated Successfully !');window.location.href='updatejudge.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?>