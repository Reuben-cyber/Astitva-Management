<?php
include'conn.php';
session_save_path('./tmp');
session_start();

$user=$_POST['user'];

$query="delete from astitva_sponsors where name='$user'";
$run=mysqli_query($con1,$query);

echo"<script>alert('You deleted the sponsor!');window.location.href='admin.php';</script>";
?>