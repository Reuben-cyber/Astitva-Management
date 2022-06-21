<?php
session_save_path('./tmp');
session_start();

include("conn.php");

if(isset($_POST["submit"])){
$user=$_POST['email'];
$pass=$_POST['pass'];
$user=strip_tags($user);
$pass=strip_tags($pass);
$user=mysqli_real_escape_string($con1,$user);
$pass=mysqli_real_escape_string($con1,$pass);
}

$a=md5($pass);
$sql="SELECT * FROM astitva_users WHERE loginid='".$user."' AND password='".$a."'";
$run=mysqli_query($con1,$sql);
$row=mysqli_fetch_array($run,MYSQLI_ASSOC);

if(mysqli_num_rows($run) == 1)
{
	$_SESSION["username"] = $row["username"];
	$_SESSION["id"]=$row["id"];
	$_SESSION["usertype"]=$row["usertype"];
	$_SESSION["event"]=$row["event"];
	if($row['usertype'] == "a")
	{
		header("Location: admin.php");
	}
	elseif($row['usertype'] == "eh")
	    {
        	header("Location: eh.php");
     	}
}
    else
    {
	echo "<script>alert('Wrong username and / or password!');window.location.href='login.php';</script>";
	   }
//mysqli_free_result($con);
mysqli_close($con1);

?>	