<?php
session_save_path('./tmp');
session_start();
include("conn.php");

if(isset($_POST["submit"])){
	$event=$_POST["ename"];
	$price=$_POST["price"];
	$age=$_POST["age"];
	$type=$_POST["type"];
	$scope=$_POST["scope"];
	$myid=$_POST["myid"];
	$mytype=$_POST["mytype"];
	$myage=$_POST["myage"];
	$event=strip_tags($event);
	$price=strip_tags($price);
	$price=floatval($price);
	$type=strip_tags($type);
	$scope=strip_tags($scope);
	$age=strip_tags($age);
	$myid=strip_tags($myid);
	$mytype=strip_tags($mytype);
	$myage=strip_tags($myage);
  $event=mysqli_real_escape_string($con1,$event);
  $price=mysqli_real_escape_string($con1,$price);
  $age=mysqli_real_escape_string($con1,$age);
  $type=mysqli_real_escape_string($con1,$type);
  $scope=mysqli_real_escape_string($con1,$scope);
  $myid=mysqli_real_escape_string($con1,$myid);
  $mytype=mysqli_real_escape_string($con1,$mytype);
  $myage=mysqli_real_escape_string($con1,$myage);
}
$sql="UPDATE astitva_events SET price='$price', type='$type', age='$age', scope='$scope' where eventname='$event' AND  id='$myid' AND eventname='$event' AND age='$myage' AND type='$mytype'";
$result=mysqli_query($con1, $sql);
if ($result) 
     {
      echo "<script>alert('Event updated Successfully !');window.location.href='updateevent0.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?>
