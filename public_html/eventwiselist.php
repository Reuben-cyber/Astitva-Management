<?php
session_save_path('./tmp');
session_start();
include ("conn.php");
$eventname=$_SESSION["event"];

if(isset($_POST["submit"])){
	$t=$_POST["mytype"];
}
$t=strip_tags($t);
$t=mysqli_real_escape_string($con1, $t);
if($t=='G'){$sql="SELECT * FROM astitva_registrations WHERE type='G'";}
elseif($t=='S'){$sql="SELECT * FROM astitva_registrations WHERE type='S'";}
$result=mysqli_query($con1, $sql);
if(!$result){
	die("data not found ".mysqli_error($con1));
}
$myevent=array();
$curr_tid=NULL;
$curr_eve=NULL;
$j=1;
echo "<table>";
echo "<tr><td>Sr. No.</td><td>Name of the participant</td><td>Transaction ID</td></tr>";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo "<tr>";
	$a=$row['events'];
	$b=$row['type'];
	$myevent = explode("|",$a);
	for($i=0; $i<count($myevent); $i++){
		if($myevent[$i] == $eventname){
			if($myevent[$i] != $curr_eve){
				$curr_eve = $myevent[$i];
				echo "Event: ".$curr_eve."<br>";
			}
			/* if($row["transaction_id"] != $curr_tid){
				$curr_tid = $row["transaction_id"];
				echo "TID: ".$curr_tid."<br>";
			} */
			echo "<td>$j</td><td>$row[name]</td><td>$row[transaction_id]</td>";
			$j++;
		}
	}
echo "</tr>";
}
echo "</table>";
?>