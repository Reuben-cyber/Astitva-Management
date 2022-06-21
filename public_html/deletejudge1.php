<?php
include'conn.php';
session_save_path('./tmp');
session_start();

$user=$_POST['user'];

$query="delete from astitva_judges where name='$user'";
$run=mysqli_query($con1,$query);

echo"<script>alert('You deleted the judge !');window.location.href='deletejudge.php';</script>";
?>