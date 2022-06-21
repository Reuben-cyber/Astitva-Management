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
<h2 style="margin-top: 2vw;">National Participant Registration Form (Page 1/2)</h2>

<p><b>INSTRUCTIONS:</b> The form can only be filled once. Each form should have unique email address. Participation fee is Rs. 70/- per solo event and Rs. 110/- per group event unless otherwise mentioned. The participant has to tick the event(s) he/she wishes to participate in; accordingly the total amount would be calculated automatically. Pay through any bank payment gateway. You will be required to provide your photo identity by scanning and uploading either the college I-Card or photo from your diver license or passport. Scan the image of your photo only and keep the file size minimum, that is, less than 70KB. JPG or JPEG image file formats ONLY are acceptable. The payment receipt image should be less than 100KB and in JPG or JPEG format ONLY. Note that the student who has done the transaction would put his/her details first and details of other members can be added by clicking Group option in the TYPE.</p>
<p><b>ACCOUNT DETAILS FOR PAYMENT:</b></p>
<p><b>BANK NAME:</b> HDFC Bank<br><b>BRANCH:</b> F C Road, Pune<br><b>ACCOUNT NUMBER:</b> 50100302295703<br><b>IFSC CODE:</b> HDFC0000103<br><b>ACCOUNT HOLDER NAME:</b> D E Society's, Principal, BMCC Pune</p>
<p>Fields marked * are compulsory. <br>(If viewing on Phone, please switch to desktop view) </p>
<hr size=2><br>
<form id="myform" action="regpage2.php" method="POST" enctype="multipart/form-data" novalidate>

AGE: *<input type="radio" name="age" value="0"  required="required" id="myage"> 15-26 yrs 
<input type="radio" name="age" value="1" required="required" id="myage"> Above 26 yrs  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br>
TYPE: *<input type="radio" name="type" value="S" required="required" id="mytype"> Solo
<input type="radio" name="type" value="G"  required="required" id="mytype" onclick="hideshowkeyboard(2);"> Group<br><br>
FIRST NAME: *<input type="text" name="fname" required="required" style="width: 15vw;margin-left:1vw;margin-right: 2vw;border-radius: 2vw;height: 2vw;"> 
MIDDLE NAME / INITIAL: <input type="text" name="mname" style="width: 15vw;margin-left:1vw;margin-right: 2vw;border-radius: 2vw;height: 2vw;"> 
LAST NAME: *<input type="text" name="lname" required="required" style="width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;"><br><br>
CONTACT NUMBER: * <input type="text" name="phone" required="required" style="width: 15vw;margin-left:1vw;border-radius: 2vw;height: 2vw;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br>
EMAIL: * <input type="email" placeholder="abc@somedomain.com" name="pemail" required="required" id="myemail" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;">
<br><br>UPLOAD PHOTO ID <small><i>(Anyone of these - College ID / Passport Photo / Driver License)</i></small>: * <input type="file" name="photoid" required="required"><br>
<small><i>(only JPG or JPEG format accepted with less than 70KB size)</i></small><br><br>
COLLEGE NAME: * <input type="text" name="pcollege" required="required" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;"><br><br>
<small><i>(Please fill N/A if you are not a college student)</i></small><br><br>
STATE YOU BELONG TO: *<select name="state" id="state" required="required" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;">
<option value="">Select the State</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>

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
STATE YOU BELONG TO: *<select name="pstate1" id="state" required="required" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;">
<option value="">Select the State</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
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
STATE YOU BELONG TO: *<select name="pstate2" id="state" required="required" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;">
<option value="">Select the State</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
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
STATE YOU BELONG TO: *<select name="pstate3" id="state" required="required" style="width: 25vw;margin-left:2.4vw;border-radius: 2vw;height: 2vw;">
<option value="">Select the State</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
</fieldset>
</div>

<input type="hidden" name="country" value="India"><br><br><br><br>
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