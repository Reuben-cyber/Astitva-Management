<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$contents = (array) json_decode(file_get_contents("php://input"),true);

$mynewid1 = $contents['myid1'];  // age
$mynewid2 = $contents['myid2'];  // type
echo"<script>alert($mynewid1);</script>";
include("conn.php");

$myquery="SELECT eventname FROM astitva_events WHERE age='$mynewid1' AND type='$mynewid2' AND scope='0'";
$myresult=mysqli_query($con1,$myquery);
if(!$myresult) {
die('records do not exist');
}

while($rm = mysqli_fetch_array($myresult,MYSQLI_ASSOC)) {
$outp = '{"myevents":"'.$rm["eventname"].'"}';
}

mysqli_free_result($myresult);

mysqli_close($con1);

echo ($outp);

?>