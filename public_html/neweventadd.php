<?php
session_save_path("./tmp");
session_start();

if(isset($_POST["submit"])){
	$nevent = $_POST["nevent"];
	$price=$_POST['price'];
	$price = strip_tags($price);
	$nevent = strip_tags($nevent);
	$nevent = trim($nevent);
	$nevent = strtoupper($nevent);
	$age=$_POST["age"];
	$type=$_POST["type"];
	$scope=$_POST["scope"];
	include("conn.php");
	
	$sql = "INSERT INTO astitva_events (id, eventname, price,type,age,scope) VALUES (NULL, '$nevent', '$price','$type','$age','$scope')";
	if(mysqli_query($con1,$sql)){
		echo"<script>alert('Event added Sucessfully !');window.location.href='admin.php';</script>";
	} else {
		echo"<script>alert('Event Not Added !');window.location.href='admin.php';</script>";
	}
} else {
echo "You are not logged in to perform this function. Please login first before trying this.";	
}
mysqli_close($con1);
?>