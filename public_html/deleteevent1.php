<?php
include'conn.php';
session_save_path('./tmp');
session_start();

$user=$_POST['user'];

$query="delete from astitva_events where eventname='$user'";
$run=mysqli_query($con1,$query);

echo"<script>alert('You deleted the event !');window.location.href='admin.php';</script>";
?>