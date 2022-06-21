<?php
session_save_path('./tmp');
session_start();
include("conn.php");
if(isset($_POST["submit"])){
	$event=$_POST['event'];
}
$event=strip_tags($event);
$eve=array();
$eve=explode(":",$event);
$eve[2]=(int)$eve[2];
$sql="SELECT * from astitva_events where eventname='$eve[0]' AND id='$eve[2]' AND type='$eve[1]' AND age='$eve[3]'";
$result=mysqli_query($con1,$sql);
if(!$result){
    die("Data not found");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Astitva Management System</title>
	<link rel="stylesheet" type="text/css" href="css/astitva.css" />
</head>
<body>
	<?php
	include('header.php');
	?>
	<br>
  <?php
if (isset($_SESSION['usertype'])&&($_SESSION['usertype'])=='a') {
include'headeradmin.php';
}else{
    include'headerhead.php';
}
?>
	<form method="POST" action="updatevent1.php"> 
		<div class="signupbox" style="height:22vw;">
			<p align="center" style="font-size: 2.5vw;">Update Event</p>
			<?php while($row=mysqli_fetch_array($result)){ $eventname = $row["eventname"];
			$price=$row["price"];
			$age=$row["age"];
			$type=$row["type"];
			$scope=$row["scope"];?>	
				Event Name: <input type="hidden" name="ename" value="<?php echo $eventname; ?>"><?php echo $eventname; ?>
    <br><input type="text" name="price" id="price" value="<?php echo $price; ?>"><br>
    <?php if($age==0){
    echo"<center>Age Group:-<input type='radio' name='age' value='0' checked='checked'> 15-26 yrs <input type='radio' name='age' value='1'> Above 26 yrs <br>"; }else{echo"<input type='radio' name='age' value='0'> 15-26 yrs <input type='radio' name='age' value='1' checked='checked'> Above 26 yrs <br>";} 
    if($type=='S'){
		echo"Type of Event:-<input type='radio' name='type' value='S' checked='checked' checked='checked' checked='checked' checked='checked'> Solo <input type='radio' name='type' value='G' > Group<br>";}else{
		    echo"<input type='radio' name='type' value='S'> Solo <input type='radio' name='type' value='G'  checked='checked' checked='checked' checked='checked' > Group<br>";}
    if($scope==0){
		echo"Scope of Event:-<input type='radio' name='scope' value='0'  checked='checked' checked='checked'> Indian <input type='radio' name='scope' value='1' > International<br>";}else{echo"<input type='radio' name='scope' value='0'> Indian <input type='radio' name='scope' value='1'  checked='checked'> International<br>";}echo"</center>";
		echo "<input type='hidden' name='myid' value='$eve[2]'>";
		echo "<input type='hidden' name='mytype' value='$eve[1]'>";
		echo "<input type='hidden' name='myage' value='$eve[3]'>";
	 } ?>
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
</html>