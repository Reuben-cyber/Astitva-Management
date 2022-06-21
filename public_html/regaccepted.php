<?php
include("conn.php");
if(isset($_POST["submit"])){
	$fname=$_POST["fname"];
	if(isset($_POST["mname"])){
	    $mname=$_POST["mname"];
	} else {
	    $mname = NULL;
	}
	$lname=$_POST["lname"];
	$phone=$_POST["phone"];
	$pemail=$_POST["pemail"];
	$pcountry=$_POST["country"];
	$pcollege=$_POST["pcollege"];
	if(isset($_POST["pfname1"])){
		$pfname1 =$_POST["pfname1"];
		$pfname1 = trim($pfname1);
	    $pfname1 = strip_tags($pfname1);
		$pfname1 = mysqli_real_escape_string($con1, $pfname1);
	} else {
		$pfname1 = NULL;
	}
	if(isset($_POST["pfname2"])){
		$pfname2=$_POST["pfname2"];
		$pfname2 = trim($pfname2);
	    $pfname2 = strip_tags($pfname2);
		$pfname2 = mysqli_real_escape_string($con1, $pfname2);
	} else {
		$pfname2 = NULL;
	}
	if(isset($_POST["pfname3"])){
		$pfname3 = $_POST["pfname3"];
		$pfname3 = trim($pfname3);
	    $pfname3 = strip_tags($pfname3);
		$pfname3 = mysqli_real_escape_string($con1, $pfname3);
	} else {
		$pfname3 = NULL;
	}
	if(isset($_POST["pmname1"])){
		$pmname1=$_POST["pmname1"];
		$pmname1 = trim($pmname1);
	    $pmname1 = strip_tags($pmname1);
		$pmname1 = mysqli_real_escape_string($con1, $pmname1);
	} else {
		$pmname1 = NULL;
	}
	if(isset($_POST["pmname1"])){
		$pmname2=$_POST["pmname2"];
		$pmname2 = trim($pmname2);
	    $pmname2 = strip_tags($pmname2);
		$pmname2 = mysqli_real_escape_string($con1, $pmname2);
	} else {
		$pmname2 = NULL;
	}
	if(isset($_POST["pmname3"])){
		$pmname3=$_POST["pmname3"];
		$pmname3 = trim($pmname3);
	    $pmname3 = strip_tags($pmname3);
		$pmname3 = mysqli_real_escape_string($con1, $pmname3);
	} else {
		$pmname3 = NULL;
	}
	if(isset($_POST["plname1"])){
		$plname1=$_POST["plname1"];
		$plname1 = trim($plname1);
	    $plname1 = strip_tags($plname1);
		$plname1 = mysqli_real_escape_string($con1, $plname1);
	} else {
		$plname1 = NULL;
	}
	if(isset($_POST["plname2"])){
		$plname2=$_POST["plname2"];
		$plname2 = trim($plname2);
	    $plname2 = strip_tags($plname2);
		$plname2 = mysqli_real_escape_string($con1, $plname2);
	} else {
		$plname2 = NULL;
	}
	if(isset($_POST["plname3"])){
		$plname3=$_POST["plname3"];
		$plname3 = trim($plname3);
	    $plname3 = strip_tags($plname3);
		$plname3 = mysqli_real_escape_string($con1, $plname3);
	} else {
		$plname3 = NULL;
	}
	if(isset($_POST["pphone1"])){
		$pphone1=$_POST["pphone1"];
		$pphone1 = trim($pphone1);
	    $pphone1 = strip_tags($pphone1);
		$pphone1 = mysqli_real_escape_string($con1, $pphone1);
	} else {
		$pphone1 = NULL;
	}
	if(isset($_POST["pphone2"])){
		$pphone2=$_POST["pphone2"];
		$pphone2 = trim($pphone2);
	    $pphone2 = strip_tags($pphone2);
		$pphone2 = mysqli_real_escape_string($con1, $pphone2);
	} else {
		$pphone2 = NULL;
	}
	if(isset($_POST["pphone3"])){
		$pphone3=$_POST["pphone3"];
		$pphone3 = trim($pphone3);
	    $pphone3 = strip_tags($pphone3);
		$pphone3 = mysqli_real_escape_string($con1, $pphone3);
	} else {
		$pphone3 = NULL;
	}
	if(isset($_POST["ppemail1"])){
		$ppemail1=$_POST["ppemail1"];
		$ppemail1 = trim($ppemail1);
	    $ppemail1 = strip_tags($ppemail1);
		$ppemail1 = mysqli_real_escape_string($con1, $ppemail1);
	} else {
		$ppemail1 = NULL;
	}
	if(isset($_POST["ppemail2"])){
		$ppemail2=$_POST["ppemail2"];
		$ppemail2 = trim($ppemail2);
	    $ppemail2 = strip_tags($ppemail2);
		$ppemail2 = mysqli_real_escape_string($con1, $ppemail2);
	} else {
		$ppemail2 = NULL;
	}
	if(isset($_POST["ppemail3"])){
		$ppemail3=$_POST["ppemail3"];
		$ppemail3 = trim($ppemail3);
	    $ppemail3 = strip_tags($ppemail3);
		$ppemail3 = mysqli_real_escape_string($con1, $ppemail3);
	} else {
		$ppemail3 = NULL;
	}
	$pcountry=$_POST["country"];
	$pcollege=$_POST["pcollege"];
	if(isset($_POST["ppcollege1"])){
		$ppcollege1=$_POST["ppcollege1"];
		$ppcollege1 = trim($ppcollege1);
	    $ppcollege1 = strip_tags($ppcollege1);
		$ppcollege1 = mysqli_real_escape_string($con1, $ppcollege1);
		$ppcollege1 = strtoupper($ppcollege1);
	} else {
		$ppcollege1 = NULL;
	}
	if(isset($_POST["ppcollege2"])){
		$ppcollege2=$_POST["ppcollege2"];
		$ppcollege2 = trim($ppcollege2);
	    $ppcollege2 = strip_tags($ppcollege2);
		$ppcollege2 = mysqli_real_escape_string($con1, $ppcollege2);
		$ppcollege2 = strtoupper($ppcollege2);
	} else {
		$ppcollege2 = NULL;
	}
	if(isset($_POST["ppcollege3"])){
		$ppcollege3=$_POST["ppcollege3"];
		$ppcollege3 = trim($ppcollege3);
	    $ppcollege3 = strip_tags($ppcollege3);
		$ppcollege3 = mysqli_real_escape_string($con1, $ppcollege3);
		$ppcollege3 = strtoupper($ppcollege3);
	} else {
		$ppcollege3 = NULL;
	}
	if(isset($_POST["pstate1"])){
		$pstate1=$_POST["pstate1"];
		$pstate1 = trim($pstate1);
	    $pstate1 = strip_tags($pstate1);
		$pstate1 = mysqli_real_escape_string($con1, $pstate1);
	} else {
		$pstate1 = NULL;
	}
	if(isset($_POST["pstate2"])){
		$pstate2=$_POST["pstate2"];
		$pstate2 = trim($pstate2);
	    $pstate2 = strip_tags($pstate2);
		$pstate2 = mysqli_real_escape_string($con1, $pstate2);
	} else {
		$pstate2 = NULL;
	}
	if(isset($_POST["pstate3"])){
		$pstate3=$_POST["pstate3"];
		$pstate3 = trim($pstate3);
	    $pstate3 = strip_tags($pstate3);
		$pstate3 = mysqli_real_escape_string($con1, $pstate3);
	} else {
		$pstate3 = NULL;
	}
	if(isset($_POST["pcountry1"])){
		$pcountry1=$_POST["pcountry1"];
		$pcountry1 = trim($pcountry1);
	    $pcountry1 = strip_tags($pcountry1);
		$pcountry1 = mysqli_real_escape_string($con1, $pcountry1);
	} else {
		$pcountry1 = NULL;
	}
	if(isset($_POST["pcountry2"])){
		$pcountry2=$_POST["pcountry2"];
		$pcountry2 = trim($pcountry2);
	    $pcountry2 = strip_tags($pcountry2);
		$pcountry2 = mysqli_real_escape_string($con1, $pcountry2);
	} else {
		$pcountry2 = NULL;
	}
	if(isset($_POST["pcountry3"])){
	    	$pcountry3=$_POST["pcountry3"];
		$pcountry3 = trim($pcountry3);
	    $pcountry3 = strip_tags($pcountry3);
		$pcountry3 = mysqli_real_escape_string($con1, $pcountry3);
	} else {
		$pcountry3 = NULL;
	}
	
	$age=$_POST["age"];
	$type=$_POST["type"];
	$selevents=$_POST["selevents"];
	$photoid=$_POST["photoid"];
	$pphotoid1=$_POST["pphotoid1"];
	$pphotoid2=$_POST["pphotoid2"];
	$pphotoid3=$_POST["pphotoid3"];
	$totprice=$_POST["totprice"];
	$tid=$_POST["tid"];
	if ($country=="India"){
	 	$state=$_POST["state"];   
	}else{$state=NULL;}
	$paccept=$_POST["paccept"];
  //$preceipt=$_POST['preceipt'];
}

	//Logic for file upload
	$msg1="";
$allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["preceipt"]["name"]);
$extension = end($parts);
if ((($_FILES["preceipt"]["type"] == "image/gif")
|| ($_FILES["preceipt"]["type"] == "image/jpeg")
|| ($_FILES["preceipt"]["type"] == "image/png")
|| ($_FILES["preceipt"]["type"] == "image/jpg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["preceipt"]["error"] > 0)
    {
    $msg1="Return Code: " . $_FILES["preceipt"]["error"] . "<br />";
    }
  else
    {
   /* $msg1="Upload: " . $_FILES["preceipt"]["name"] . "<br />";
    $msg1=$msg1."Type: " . $_FILES["preceipt"]["type"] . "<br />";
    $msg1=$msg1."Size: " . ($_FILES["preceipt"]["size"] / 1024) . " Kb<br />";
    $msg1=$msg1."Temp file: " . $_FILES["preceipt"]["tmp_name"] . "<br />";*/

    if (file_exists("uploads/receipts/". $_FILES["preceipt"]["name"]))
      {
      $msg1=$msg1."Since the files already exists rename the file on your comp and upload.";
      }
      else {
      move_uploaded_file($_FILES["preceipt"]["tmp_name"], "uploads/receipts/". $_FILES["preceipt"]["name"]);
      $name=$_FILES["preceipt"]["name"];
      $msg1=$name;
      }
    }
  }
else
  {
    //exchanged it with the top code instead of the error msg.
  move_uploaded_file($_FILES["preceipt"]["tmp_name"], "uploads/preceipts/". $_FILES["preceipt"]["name"]);
       $name=$_FILES["preceipt"]["name"];
      $msg1=$name;
  }
 $name=$_FILES["preceipt"]["name"];

//Logic for file upload endend

$preceipt=$_FILES["preceipt"]["name"];

$fname=trim($fname);
$mname=trim($mname);
$lname=trim($lname);
$phone=trim($phone);
$pemail=trim($pemail);
$state=trim($state);
$pcountry=trim($pcountry);
$pcollege=trim($pcollege);
$tid=trim($tid);
$age=trim($age);
$type=trim($type);
$photoid=trim($photoid);
$pphotoid1=trim($pphotoid1);
$pphotoid2=trim($pphotoid2);
$pphotoid3=trim($pphotoid3);
$fname=strip_tags($fname);
$mname=strip_tags($mname);
$lname=strip_tags($lname);
$state=strip_tags($state);
$phone=strip_tags($phone);
$photoid=strip_tags($photoid);
$pphotoid1=strip_tags($pphotoid1);
$pphotoid2=strip_tags($pphotoid2);
$pphotoid3=strip_tags($pphotoid3);
$pemail=strip_tags($pemail);
$pcountry=strip_tags($pcountry);
$pcollege=strip_tags($pcollege);
$tid=strip_tags($tid);
$age=strip_tags($age);
$type=strip_tags($type);
$paccept=strip_tags($paccept);
$totprice=strip_tags($totprice);
$totprice=floatval($totprice);

$myevents="";
for($i=0; $i<count($selevents); $i++){
		$selevents[$i] = strip_tags($selevents[$i]);
		$selevents[$i] = mysqli_real_escape_string($con1, $selevents[$i]);
		$events = explode("|",$selevents[$i]);
		$myevents .= $events[1]."|";
}
$myevents = substr($myevents, 0, -1);
if($_POST["type"] == "G"){
		$pnames1 = $pfname1." ".$pmname1." ".$plname1;
		$pnames2 = $pfname2." ".$pmname2." ".$plname2;
		$pnames3 = $pfname3." ".$pmname3." ".$plname3;
		$pnames1 = ucwords($pnames1);
		$pnames2 = ucwords($pnames2);
		$pnames3 = ucwords($pnames3);
		$pnames1 = mysqli_real_escape_string($con1, $pnames1);
		$pnames2 = mysqli_real_escape_string($con1, $pnames2);
		$pnames3 = mysqli_real_escape_string($con1, $pnames3);
}

$fname=mysqli_real_escape_string($con1, $fname);
$fname=ucwords($fname);
$mname=mysqli_real_escape_string($con1, $mname);
$mname=ucwords($mname);
$lname=mysqli_real_escape_string($con1, $lname);
$lname=ucwords($lname);
$phone=mysqli_real_escape_string($con1, $phone);
$pemail=mysqli_real_escape_string($con1, $pemail);
$state=mysqli_real_escape_string($con1, $state);
$pcollege=mysqli_real_escape_string($con1, $pcollege);
$pcollege=strtoupper($pcollege);
$pcountry=mysqli_real_escape_string($con1, $pcountry);
$tid=mysqli_real_escape_string($con1, $tid);
$photoid=mysqli_real_escape_string($con1, $photoid);
$paccept=mysqli_real_escape_string($con1, $paccept);
if($paccept == "Y"){$paccept=1;}else{$paccept=0;}
$totprice=mysqli_real_escape_string($con1, $totprice);
$yr=date("Y-m-d");
$pname=$fname." ".$mname." ".$lname;

$sql="INSERT INTO astitva_registrations (id, dot, country, name, contact_no, email_address, photo_id, college_name, events, amount, transaction_id, receipt, agree, age, type, state, verified) VALUES (NULL, '$yr', '$pcountry', '$pname', '$phone', '$pemail', '$photoid', '$pcollege', '$myevents', $totprice, '$tid', '$preceipt', '$paccept', '$age', '$type', '$state', '0')";
$re = mysqli_query($con1, $sql);

if($pcountry == "India"){
if($_POST["type"] == "G" && $pfname1 != NULL){
$sql1="INSERT INTO astitva_registrations (id, dot, country, name, contact_no, email_address, photo_id, college_name, events, amount, transaction_id, receipt, agree, age, type, state, verified) VALUES (NULL, '$yr', '$pcountry', '$pnames1', '$pphone1', '$ppemail1', '$pphotoid1', '$ppcollege1', '$myevents', '0.00', '$tid', '$preceipt', '$paccept', '$age', '$type', '$pstate1', '0')";
$re1 = mysqli_query($con1, $sql1);
}
} else {
if($_POST["type"] == "G" && $pfname1 != NULL){
$sql1="INSERT INTO astitva_registrations (id, dot, country, name, contact_no, email_address, photo_id, college_name, events, amount, transaction_id, receipt, agree, age, type, state, verified) VALUES (NULL, '$yr', '$pcountry1', '$pnames1', '$pphone1', '$ppemail1', '$pphotoid1', '$ppcollege1', '$myevents', '0.00', '$tid', '$preceipt', '$paccept', '$age', '$type', '$pstate1', '0')";
$re1 = mysqli_query($con1, $sql1);
}
}
if($pcountry == "India"){
if($_POST["type"] == "G" && $pfname2 != NULL){
$sql2="INSERT INTO astitva_registrations (id, dot, country, name, contact_no, email_address, photo_id, college_name, events, amount, transaction_id, receipt, agree, age, type, state, verified) VALUES (NULL, '$yr', '$pcountry', '$pnames2', '$pphone2', '$ppemail2', '$pphotoid2', '$ppcollege2', '$myevents', '0.00', '$tid', '$preceipt', '$paccept', '$age', '$type', '$pstate2', '0')";
$re2 = mysqli_query($con1, $sql2);
}
} else {
if($_POST["type"] == "G" && $pfname2 != NULL){
$sql2="INSERT INTO astitva_registrations (id, dot, country, name, contact_no, email_address, photo_id, college_name, events, amount, transaction_id, receipt, agree, age, type, state, verified) VALUES (NULL, '$yr', '$pcountry2', '$pnames2', '$pphone2', '$ppemail2', '$pphotoid2', '$ppcollege2', '$myevents', '0.00', '$tid', '$preceipt', '$paccept', '$age', '$type', '$pstate2', '0')";
$re2 = mysqli_query($con1, $sql2);
}
}
if($pcountry == "India"){
if($_POST["type"] == "G" && $pfname3 != NULL){
$sql3="INSERT INTO astitva_registrations (id, dot, country, name, contact_no, email_address, photo_id, college_name, events, amount, transaction_id, receipt, agree, age, type, state, verified) VALUES (NULL, '$yr', '$pcountry', '$pnames3', '$pphone3', '$ppemail3', '$pphotoid3', '$ppcollege3', '$myevents', '0.00', '$tid', '$preceipt', '$paccept', '$age', '$type', '$pstate3', '0')";
$re3 = mysqli_query($con1, $sql3);
}
} else {
if($_POST["type"] == "G" && $pfname3 != NULL){
$sql3="INSERT INTO astitva_registrations (id, dot, country, name, contact_no, email_address, photo_id, college_name, events, amount, transaction_id, receipt, agree, age, type, state, verified) VALUES (NULL, '$yr', '$pcountry3', '$pnames3', '$pphone3', '$ppemail3', '$pphotoid3', '$ppcollege3', '$myevents', '0.00', '$tid', '$preceipt', '$paccept', '$age', '$type', '$pstate3', '0')";
$re3 = mysqli_query($con1, $sql3);
}
}

if($re || $re1 || $re2 || $re3){
	echo "<script>alert('Thank You!! Registration Successful!!');window.location.href='index.php';</script>";
} else {
	echo "Registration unsuccessful! Try again later!!".mysqli_error($con1);
}
?>