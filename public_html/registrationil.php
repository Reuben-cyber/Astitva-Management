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
<h2 style="margin-top: 2vw;">International Participant Registration Form (Below 26) Page 1/2</h2>

<p><b>INSTRUCTIONS:</b> The form can only be filled once. The form can be filled by ONLY those students (Indian or others) who are residing in a country other than INDIA. No fees will be charged to such students. Please note that foreign students who are currently studying in INDIA in any college / university (from other countries including NRIs) will need to pay the registration fees in Indian Rupees and should fill National Participants Registration form). Each form should have unique email address. The participant has to tick the event(s) he/she wishes to participate in. You will be required to provide your photo identity by scanning and uploading either the college I-Card or photo from your diver license or passport. Scan the image of your photo only and keep the file size minimum, that is, less than 70KB. JPG or JPEG image file formats ONLY are acceptable.</p>
<p>Fields marked * are compulsory.</br>(If viewing on Phone, please switch to desktop view)</p>
<hr size=2><br>
<form id="myform" action="regIpage2.php" method="POST" enctype="multipart/form-data" novalidate>

TYPE: *<input type="radio" name="type" value="S" required="required" id="mytype"> Solo
<input type="radio" name="type" value="G"  required="required" id="mytype" onclick="hideshowkeyboard(2);"> Group<br><br>
FIRST NAME: *<input type="text" name="fname" required="required" style="width: 15vw;margin-left:1vw;margin-right: 2vw;border-radius: 2vw;height: 2vw;"> 
MIDDLE NAME / INITIAL: <input type="text" name="mname" style="width: 15vw;margin-left:1vw;margin-right: 2vw;border-radius: 2vw;height: 2vw;"> 
LAST NAME: *<input type="text" name="lname" required="required" style="width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;"><br><br>
CONTACT NUMBER: * <input type="text" name="phone" required="required" style="width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
EMAIL ADDRESS: * <input type="email" name="pemail" required="required" id="myemail" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;">
<br><br>UPLOAD PHOTO ID <small><i>(Anyone of these - College ID / Passport Photo / Driver License)</i></small>: * <input type="file" name="photoid" required="required"><br>
<small><i>(only JPG or JPEG format accepted with less than 70KB size)</i></small><br><br>
COLLEGE NAME: * <input type="text" name="pcollege" required="required" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"><br><br>
<small><i>(Please fill N/A if you are not a college student)</i></small><br><br>
<?php
include("conn.php");
$sql="SELECT * FROM astitva_countries WHERE country != 'India' ORDER BY country";
$result=mysqli_query($con1,$sql);
if(!$result){
	die("Can not connect with the database ".mysqli_connect_error());
}
$options1=array();
$options1[]="<option value=''>Select a country</option>";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$a = $row["country"];
	$options1[] = "<option value='$a'>$a</option>";
}
mysqli_close($con1);
?>
COUNTRY (other than INDIA): * <select name="country" size="1" style="width:20vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"><?php echo implode("\n",$options1); ?></select><br><br>

<?php 
echo "<div id='keyboard2' style='display: none;'>";

//echo "<input type='button' value='Add a Group Participant' onClick='addRow(\"dataTable\")' />";
?>
<br><br>
<fieldset>
<legend><b>Add Details of the Remaining Participants in the Group</b></legend>
<br><br><b>PARTICIPANT 2: </b><br><br>
FIRST NAME: *<input type="text" name="pfname1" required="required" style="width: 15vw;margin-left:1vw;margin-right: 2vw;border-radius: 2vw;height: 2vw;"> 
MIDDLE NAME / INITIAL: *<input type="text" name="pmname1" required="required" style="width: 15vw;margin-left:1vw;margin-right: 2vw;border-radius: 2vw;height: 2vw;"> 
LAST NAME: *<input type="text" name="plname1" required="required" style="width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;"><br><br>
CONTACT NUMBER: * <input type="text" name="pphone1" required="required" style="width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
EMAIL ADDRESS: * <input type="email" name="ppemail1" required="required" id="myemail" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>UPLOAD PHOTO ID <small><i>(Anyone of these - College ID / Passport Photo / Driver License)</i></small>: * <input type="file" name="pphotoid1" required="required"><br>
<small><i>(only JPG or JPEG format accepted with less than 70KB size)</i></small><br><br>
COLLEGE NAME: * <input type="text" name="ppcollege1" required="required"style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"><br><br>
<small><i>(Please fill N/A if you are not a college student)</i></small><br><br>
<?php
include("conn.php");
$sql="SELECT * FROM astitva_countries WHERE country != 'India' ORDER BY country";
$result=mysqli_query($con1,$sql);
if(!$result){
	die("Can not connect with the database ".mysqli_connect_error());
}
$options1=array();
$options1[]="<option value=''>Select a country</option>";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$a = $row["country"];
	$options1[] = "<option value='$a'>$a</option>";
}
mysqli_close($con1);
?>
COUNTRY (other than INDIA): * <select name="pcountry1" size="1" style="width:20vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"><?php echo implode("\n",$options1); ?></select><br><br>

<hr><br><br>
<b>PARTICIPANT 3:</b><br><br>
FIRST NAME: *<input type="text" name="pfname2" required="required" style="width: 15vw;margin-left:1vw;margin-right: 2vw;border-radius: 2vw;height: 2vw;"> 
MIDDLE NAME / INITIAL: *<input type="text" name="pmname2" required="required" style="width: 15vw;margin-left:1vw;margin-right: 2vw;border-radius: 2vw;height: 2vw;"> 
LAST NAME: *<input type="text" name="plname2" required="required" style="width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;"><br><br>
CONTACT NUMBER: * <input type="text" name="pphone2" required="required" style="width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
EMAIL ADDRESS: * <input type="email" name="ppemail2" required="required" id="myemail" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>UPLOAD PHOTO ID <small><i>(Anyone of these - College ID / Passport Photo / Driver License)</i></small>: * <input type="file" name="pphotoid2" required="required"><br>
<small><i>(only JPG or JPEG format accepted with less than 70KB size)</i></small><br><br>
COLLEGE NAME: * <input type="text" name="ppcollege2" required="required"style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"><br><br>
<small><i>(Please fill N/A if you are not a college student)</i></small><br><br>
<?php
include("conn.php");
$sql="SELECT * FROM astitva_countries WHERE country != 'India' ORDER BY country";
$result=mysqli_query($con1,$sql);
if(!$result){
	die("Can not connect with the database ".mysqli_connect_error());
}
$options1=array();
$options1[]="<option value=''>Select a country</option>";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$a = $row["country"];
	$options1[] = "<option value='$a'>$a</option>";
}
mysqli_close($con1);
?>
COUNTRY (other than INDIA): * <select name="pcountry2" size="1" style="width:20vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"><?php echo implode("\n",$options1); ?></select><br><br>

<hr><br><br>
<b>PARTICIPANT 4:</b><br><br>
FIRST NAME: *<input type="text" name="pfname3" required="required" style="width: 15vw;margin-left:1vw;margin-right: 2vw;border-radius: 2vw;height: 2vw;"> 
MIDDLE NAME / INITIAL: *<input type="text" name="pmname3" required="required" style="width: 15vw;margin-left:1vw;margin-right: 2vw;border-radius: 2vw;height: 2vw;"> 
LAST NAME: *<input type="text" name="plname3" required="required" style="width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;"><br><br>
CONTACT NUMBER: * <input type="text" name="pphone3" required="required" style="width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
EMAIL ADDRESS: * <input type="email" name="ppemail3" required="required" id="myemail" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>UPLOAD PHOTO ID <small><i>(Anyone of these - College ID / Passport Photo / Driver License)</i></small>: * <input type="file" name="pphotoid3" required="required"><br>
<small><i>(only JPG or JPEG format accepted with less than 70KB size)</i></small><br><br>
COLLEGE NAME: * <input type="text" name="ppcollege3" required="required"style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"><br><br>
<small><i>(Please fill N/A if you are not a college student)</i></small><br><br>
<?php
include("conn.php");
$sql="SELECT * FROM astitva_countries WHERE country != 'India' ORDER BY country";
$result=mysqli_query($con1,$sql);
if(!$result){
	die("Can not connect with the database ".mysqli_connect_error());
}
$options1=array();
$options1[]="<option value=''>Select a country</option>";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$a = $row["country"];
	$options1[] = "<option value='$a'>$a</option>";
}
mysqli_close($con1);
?>
COUNTRY (other than INDIA): * <select name="pcountry3" size="1" style="width:20vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"><?php echo implode("\n",$options1); ?></select><br><br>

</fieldset>
</div>

<input type="submit" name="submit" id="submit" value="Next Page" style="width: 15vw;height: 3vw;font-size: 1.5vw;border-radius: 2vw;margin-left: 12vw;z-index: 2;" /><br><br>
<input type="reset" name="reset" id="reset" value="Reset"style="width: 10vw;height: 2vw;font-size: 1vw;border-radius: 2vw;margin-left: 14.5vw;margin-bottom: 2vw;z-index: 2;" />

</form>
</div>
</div>
<?php
echo "<script type='text/javascript' language='javascript' src='jscript/hideshow.js'></script>";
echo "<script src='jscript/addrows.js' type='text/javascript' language='javascript'></script>";
echo "<script src='jscript/removerows.js' type='text/javascript' language='javascript'></script>";
?>
</body>
</html>