<?php
include'conn.php';
session_save_path('./tmp');
session_start();

if(isset($_POST["submit"])){
$name=$_POST['user'];
}

$sql="SELECT * FROM astitva_users WHERE username='$name'";
$run=mysqli_query($con1,$sql);
$row=mysqli_fetch_array($run,MYSQLI_ASSOC);

if(mysqli_num_rows($run) == 1){

	if($row['userstatus'] == "b"){

$query="update astitva_users set userstatus='nb' where username='$name'";
$run=mysqli_query($con1,$query);
echo"<script>alert('You unblocked the user !');window.location.href='active.php';</script>";
}
else
{
$query="update astitva_users set userstatus='b' where username='$name'";
$run=mysqli_query($con1,$query);

echo"<script>alert('You blocked the user !');window.location.href='active.php';</script>";
}
}
?>