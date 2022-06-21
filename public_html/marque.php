<?php
session_save_path("./tmp");
session_start();
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
	if (isset($_SESSION['usertype'])&&($_SESSION['usertype'])=='a') {
include'headeradmin.php';
}else{
    include'headerhead.php';
}
	include('conn.php');
	 $query = "SELECT content FROM marquee";
    $result = mysqli_query($con1,$query);
     $number_of_rows = mysqli_num_rows($result);
  // if number of rows is 0, then form 1
  if($number_of_rows == 0)
    {
?>
	<div class="adduser" style="height:10vw;">
		<form action="marque1.php" method="POST" > 
	<p align="center" style="font-size: 2.5vw;">Notice Board</p>
<input type="text" name="text1" id="text1" placeholder="Enter Content" style="height:5vw;width:30vw; margin-left:2.5vw;"><br>
<input type="submit" name="submit" id="submit">
</div>
</form>
<?php
   }
   else
   {
	$query = "SELECT content from marquee";
    $result = mysqli_query($con1,$query);
    while($res = mysqli_fetch_array($result))
   { 
	?>
	<div class="adduser">
<form action="marque1.php" method="POST"> 
	<p align="center" style="font-size: 2.5vw;">Notice Board</p>
<input type="text" name="text2" id="text2" placeholder="Enter Content" style="height:5vw;width:30vw; margin-left:2.5vw;" value="<?php echo $res ["content"];?>"><br>
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
</html>
<?php
  }
}
?>