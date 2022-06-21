<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Astitva Management System</title>
	<link rel="stylesheet" type="text/css" href="css/astitva.css" />
</head>
<body>
	<?php
	include('header.php');
	?>
	 <br>
	<nav role="navigation" class="nav">
		<ul>
			<li><a href="#">Participate in Astitva</a>
				<ul class="dropdown"style="z-index:2" >
					<li><a href="registration.php">Indian Students</a></li>
					<li><a href="registrationil.php">International Students</a></li>
					<li><a href="Rules2021.pdf" target="_blank">Rules</a></li>
				</ul>
			</li>
				<ul>
			<li><a href="login.php">LOGIN (For Team Astitva ONLY)</a></li>
		</ul>
	</nav>

<div style="width:90vw;margin-left:4vw;margin-right: 5vw; margin-top:6vw;background:orange;position: absolute;border-radius: 4vw;">
	<div style="width: 86vw;margin-left: 2vw;margin-right: 2vw;">
<h2 style="margin-top: 2vw;">National Participant Registration Form (Page 2/2)</h2>

<p><b>INSTRUCTIONS:</b> The form can only be filled once. Each form should have unique email address. Participation fee is Rs. 70/- per solo event and Rs. 110/- per group event unless otherwise mentioned. The participant has to tick the event(s) he/she wishes to participate in; accordingly the total amount would be calculated automatically. Pay through any bank payment gateway. You will be required to provide your photo identity by scanning and uploading either the college I-Card or photo from your diver license or passport. Scan the image of your photo only and keep the file size minimum, that is, less than 70KB. JPG or JPEG image file formats ONLY are acceptable. The payment receipt image should be less than 100KB and in JPG or JPEG format ONLY.</p>
<p><b>ACCOUNT DETAILS FOR PAYMENT:</b></p>
<p><b>BANK NAME:</b> HDFC Bank<br><b>BRANCH:</b> FC Road, Pune<br><b>ACCOUNT NUMBER:</b> 50100302295703<br><b>IFSC CODE:</b> HDFC0000103<br><b>ACCOUNT HOLDER NAME:</b> DE Society, PRINCIPAL, BMCC PUNE</p>
<p>Fields marked * are compulsory.</p>
<hr size=2><br>

<?php
if(isset($_POST["submit"])){
  
if($_POST["age"]==NULL||$_POST["type"]==NULL||$_POST["fname"]==NULL||$_POST["lname"]==NULL||$_POST["phone"]==NULL||$_POST["pemail"]==NULL||$_FILES["photoid"]==NULL||$_POST["pcollege"]==NULL){
  echo "<script>alert('Please fill all the mandatory fields. You have missed one or more fields of information!!');window.location.href='registration.php';</script>";
}
}
  ?>

<form id="myform" action="regaccepted.php" method="POST" enctype="multipart/form-data" onSubmit="return confirm('Are you sure you wish to submit your registration?');">
CHOICE OF EVENT(S): * <small><i>(select at least one event)</i></small><br><br>
<div id="txtHint" style="margin-left: 3vw;">

<input type="hidden" name="fname" value="<?php echo $_POST['fname']; ?>">
<input type="hidden" name="mname" value="<?php echo $_POST['mname']; ?>">
<input type="hidden" name="lname" value="<?php echo $_POST['lname']; ?>">
<input type="hidden" name="country" value="India">
<input type="hidden" name="state" value="<?php echo $_POST['state']; ?>">
<input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">
<input type="hidden" name="age" value="<?php echo $_POST['age']; ?>">
<input type="hidden" name="pemail" value="<?php echo $_POST['pemail']; ?>">
<input type="hidden" name="type" value="<?php echo $_POST['type']; ?>">
<input type="hidden" name="pcollege" value="<?php echo $_POST['pcollege']; ?>">
<?php 
if($_POST["type"] == "G"){
?>
<input type="hidden" name="ppcollege1" value="<?php echo $_POST['ppcollege1']; ?>">
<input type="hidden" name="ppemail1" value="<?php echo $_POST['ppemail1']; ?>">
<input type="hidden" name="pstate1" value="<?php echo $_POST['pstate1']; ?>">
<input type="hidden" name="pphone1" value="<?php echo $_POST['pphone1']; ?>">
<input type="hidden" name="pfname1" value="<?php echo $_POST['pfname1']; ?>">
<input type="hidden" name="pmname1" value="<?php echo $_POST['pmname1']; ?>">
<input type="hidden" name="plname1" value="<?php echo $_POST['plname1']; ?>">

<input type="hidden" name="ppcollege2" value="<?php echo $_POST['ppcollege2']; ?>">
<input type="hidden" name="ppemail2" value="<?php echo $_POST['ppemail2']; ?>">
<input type="hidden" name="pstate2" value="<?php echo $_POST['pstate2']; ?>">
<input type="hidden" name="pphone2" value="<?php echo $_POST['pphone2']; ?>">
<input type="hidden" name="pfname2" value="<?php echo $_POST['pfname2']; ?>">
<input type="hidden" name="pmname2" value="<?php echo $_POST['pmname2']; ?>">
<input type="hidden" name="plname2" value="<?php echo $_POST['plname2']; ?>">

<input type="hidden" name="ppcollege3" value="<?php echo $_POST['ppcollege3']; ?>">
<input type="hidden" name="ppemail3" value="<?php echo $_POST['ppemail3']; ?>">
<input type="hidden" name="pstate3" value="<?php echo $_POST['pstate3']; ?>">
<input type="hidden" name="pphone3" value="<?php echo $_POST['pphone3']; ?>">
<input type="hidden" name="pfname3" value="<?php echo $_POST['pfname3']; ?>">
<input type="hidden" name="pmname3" value="<?php echo $_POST['pmname3']; ?>">
<input type="hidden" name="plname3" value="<?php echo $_POST['plname3']; ?>">
<?php
}
if(isset($_POST["submit"])){

	//Logic for file upload
	$msg1="";
$allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["photoid"]["name"]);
$extension = end($parts);
if ((($_FILES["photoid"]["type"] == "image/gif")
|| ($_FILES["photoid"]["type"] == "image/jpeg")
|| ($_FILES["photoid"]["type"] == "image/png")
|| ($_FILES["photoid"]["type"] == "image/jpg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["photoid"]["error"] > 0)
    {
    $msg1="Return Code: " . $_FILES["photoid"]["error"] . "<br />";
    }
  else
    {
   /* $msg1="Upload: " . $_FILES["photoid"]["name"] . "<br />";
    $msg1=$msg1."Type: " . $_FILES["photoid"]["type"] . "<br />";
    $msg1=$msg1."Size: " . ($_FILES["photoid"]["size"] / 1024) . " Kb<br />";
    $msg1=$msg1."Temp file: " . $_FILES["photoid"]["tmp_name"] . "<br />";*/

    if (file_exists("uploads/photoids/". $_FILES["photoid"]["name"]))
      {
      $msg1=$msg1."Since the files already exists rename the file on your comp and upload.";
      }
      else {
      move_uploaded_file($_FILES["photoid"]["tmp_name"], "uploads/photoids/". $_FILES["photoid"]["name"]);
      $name=$_FILES["photoid"]["name"];
      $msg1=$name;
      }
    }
  }
else
  {
    //exchanged it with the top code instead of the error msg.
  move_uploaded_file($_FILES["photoid"]["tmp_name"], "uploads/photoids/". $_FILES["photoid"]["name"]);
       $name=$_FILES["photoid"]["name"];
      $msg1=$name;
  }
 $name=$_FILES["photoid"]["name"];

//Logic for file upload endend

if($_POST["type"] == "G"){
//Logic for file upload - photoid

	//Logic for participant 2 file upload
	$msg1="";
$allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["pphotoid1"]["name"]);
$extension = end($parts);
if ((($_FILES["pphotoid1"]["type"] == "image/gif")
|| ($_FILES["pphotoid1"]["type"] == "image/jpeg")
|| ($_FILES["pphotoid1"]["type"] == "image/png")
|| ($_FILES["pphotoid1"]["type"] == "image/jpg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["pphotoid1"]["error"] > 0)
    {
    $msg1="Return Code: " . $_FILES["pphotoid1"]["error"] . "<br />";
    }
  else
    {
   /* $msg1="Upload: " . $_FILES["pphotoid1"]["name"] . "<br />";
    $msg1=$msg1."Type: " . $_FILES["pphotoid1"]["type"] . "<br />";
    $msg1=$msg1."Size: " . ($_FILES["pphotoid1"]["size"] / 1024) . " Kb<br />";
    $msg1=$msg1."Temp file: " . $_FILES["pphotoid1"]["tmp_name"] . "<br />";*/

    if (file_exists("uploads/photoids/". $_FILES["pphotoid1"]["name"]))
      {
      $msg1=$msg1."Since the files already exists rename the file on your comp and upload.";
      }
      else {
      move_uploaded_file($_FILES["pphotoid1"]["tmp_name"], "uploads/photoids/". $_FILES["pphotoid1"]["name"]);
      $name1=$_FILES["pphotoid1"]["name"];
      $msg1=$name;
      }
    }
  }
else
  {
    //exchanged it with the top code instead of the error msg.
  move_uploaded_file($_FILES["pphotoid1"]["tmp_name"], "uploads/photoids/". $_FILES["pphotoid1"]["name"]);
       $name1=$_FILES["pphotoid1"]["name"];
      $msg1=$name;
  }
 $name1=$_FILES["pphotoid1"]["name"]; 

//Logic for participant 2 file upload endend

	//Logic for participant 3 file upload
	$msg1="";
$allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["pphotoid2"]["name"]);
$extension = end($parts);
if ((($_FILES["pphotoid2"]["type"] == "image/gif")
|| ($_FILES["pphotoid2"]["type"] == "image/jpeg")
|| ($_FILES["pphotoid2"]["type"] == "image/png")
|| ($_FILES["pphotoid2"]["type"] == "image/jpg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["pphotoid2"]["error"] > 0)
    {
    $msg1="Return Code: " . $_FILES["pphotoid2"]["error"] . "<br />";
    }
  else
    {
   /* $msg1="Upload: " . $_FILES["pphotoid2"]["name"] . "<br />";
    $msg1=$msg1."Type: " . $_FILES["pphotoid2"]["type"] . "<br />";
    $msg1=$msg1."Size: " . ($_FILES["pphotoid2"]["size"] / 1024) . " Kb<br />";
    $msg1=$msg1."Temp file: " . $_FILES["pphotoid2"]["tmp_name"] . "<br />";*/

    if (file_exists("uploads/photoids/". $_FILES["pphotoid2"]["name"]))
      {
      $msg1=$msg1."Since the files already exists rename the file on your comp and upload.";
      }
      else {
      move_uploaded_file($_FILES["pphotoid2"]["tmp_name"], "uploads/photoids/". $_FILES["pphotoid2"]["name"]);
      $name2=$_FILES["pphotoid2"]["name"];
      $msg1=$name;
      }
    }
  }
else
  {
    //exchanged it with the top code instead of the error msg.
  move_uploaded_file($_FILES["pphotoid2"]["tmp_name"], "uploads/photoids/". $_FILES["pphotoid2"]["name"]);
       $name2=$_FILES["pphotoid2"]["name"];
      $msg1=$name;
  }
 $name2=$_FILES["pphotoid2"]["name"];

//Logic for participant 3 file upload endend

	//Logic for participant 4 file upload
	$msg1="";
$allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["pphotoid3"]["name"]);
$extension = end($parts);
if ((($_FILES["pphotoid3"]["type"] == "image/gif")
|| ($_FILES["pphotoid3"]["type"] == "image/jpeg")
|| ($_FILES["pphotoid3"]["type"] == "image/png")
|| ($_FILES["pphotoid3"]["type"] == "image/jpg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["pphotoid3"]["error"] > 0)
    {
    $msg1="Return Code: " . $_FILES["pphotoid3"]["error"] . "<br />";
    }
  else
    {
   /* $msg1="Upload: " . $_FILES["pphotoid3"]["name"] . "<br />";
    $msg1=$msg1."Type: " . $_FILES["pphotoid3"]["type"] . "<br />";
    $msg1=$msg1."Size: " . ($_FILES["pphotoid3"]["size"] / 1024) . " Kb<br />";
    $msg1=$msg1."Temp file: " . $_FILES["pphotoid3"]["tmp_name"] . "<br />";*/

    if (file_exists("uploads/photoids/". $_FILES["pphotoid3"]["name"]))
      {
      $msg1=$msg1."Since the files already exists rename the file on your comp and upload.";
      }
      else {
      move_uploaded_file($_FILES["pphotoid3"]["tmp_name"], "uploads/photoids/". $_FILES["pphotoid3"]["name"]);
      $name3=$_FILES["pphotoid3"]["name"];
      $msg1=$name;
      }
    }
  }
else
  {
    //exchanged it with the top code instead of the error msg.
  move_uploaded_file($_FILES["pphotoid3"]["tmp_name"], "uploads/photoids/". $_FILES["pphotoid3"]["name"]);
       $name3=$_FILES["pphotoid3"]["name"];
      $msg1=$name;
  }
 $name3=$_FILES["pphotoid3"]["name"];
}
//Logic for participant 4 file upload endend

$mage = $_POST["age"];
$mtype = $_POST["type"];
}
include("conn.php");
$sql="SELECT * FROM astitva_events WHERE type='$mtype' AND age='$mage' AND scope='0' ORDER BY eventname";
$result=mysqli_query($con1,$sql);
if(!$result){
	die("Can not connect with the database ".mysqli_connect_error());
}
$options="";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$a = $row['price']."|".$row['eventname'];
	$d = $row['eventname']." (Rs. ".$row['price'].")";
	$options .= "<input type='checkbox' name='selevents[]' value='$a' onclick='calcprice();' style='width:1.5vw;height:1.5vw;'>  $d<br>";
}
mysqli_close($con1);
echo $options;
?>
<input type="hidden" name="photoid" value="<?php echo $name; ?>">
<?php if($mtype == "G"){ ?>
<input type="hidden" name="pphotoid1" value="<?php echo $name1; ?>">
<input type="hidden" name="pphotoid2" value="<?php echo $name2; ?>">
<input type="hidden" name="pphotoid3" value="<?php echo $name3; ?>">
<?php } ?>
</div>
<br>AMOUNT PAYABLE (in Rupees; calculated automatically): * <input type="text" name="totprice" id="demo" value="" readonly="readonly" style="outline: none;width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;" required="required"><br><br>
TRANSACTION ID: * <input type="text" name="tid" required="required"style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"><br><br>
SCREENSHOT OF THE RECEIPT (with the amount paid): * <input type="file" name="preceipt" required="required"><br><small><i>(only JPG or JPEG format accepted with file size less than 100KB)</i></small><br><br>
I agree to the rules of the event and all the information provided in the form are true. * <input type="checkbox" name="paccept" value="Y" required="required" style="width: 1.5vw;height: 1.5vw;">  YES<br><br>
<input type="submit" name="submit" id="submit" value="Register" style="width: 15vw;height: 3vw;font-size: 1.5vw;border-radius: 2vw;margin-left: 12vw;"><br><br>
<input type="reset" name="reset" id="submit" value="Reset"style="width: 10vw;height: 2vw;font-size: 1vw;border-radius: 2vw;margin-left: 14.5vw;margin-bottom: 2vw;">
</form>
</div>
</div>
<script>
function calcprice() {
var sum = 0.00;
var myData = document.forms[0].elements["selevents[]"];
for(var checkbox of myData){
if(checkbox.checked){
var str = checkbox.value;
var pos = str.indexOf("|");
var b = str.slice(0, pos);
sum += parseFloat(b);
}
}
document.getElementById("demo").value = sum;
}
</script>
</body>
</html>