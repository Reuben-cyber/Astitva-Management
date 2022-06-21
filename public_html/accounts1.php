<?php
session_save_path('./tmp');
session_start();
include("conn.php");
$id=$_SESSION['id'];

if(isset($_POST["submit"])){
	$sr=$_POST['id'];
	$date=$_POST['date'];
	$title=$_POST['title'];
	$price=$_POST['price'];
  $received=$_POST['received'];
  $event=$_POST['event'];

	$sr=strip_tags($sr);
	$date=strip_tags($date);
	$title=strip_tags($title);
	$price=strip_tags($price);
  $received=strip_tags($received);
  $event=strip_tags($event);


$sr=mysqli_real_escape_string($con1,$sr);
$date=mysqli_real_escape_string($con1,$date);
$title=mysqli_real_escape_string($con1,$title);
$price=mysqli_real_escape_string($con1,$price);
$received=mysqli_real_escape_string($con1,$received);
$event=mysqli_real_escape_string($con1,$event);

//Logic for file1 upload
$allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["file1"]["name"]);
$extension = end($parts);
echo $_FILES["file1"]["tmp_name"];
if ((($_FILES["file1"]["type"] == "image/gif")
|| ($_FILES["file1"]["type"] == "image/jpeg")
|| ($_FILES["file1"]["type"] == "image/png")
|| ($_FILES["file1"]["type"] == "image/jpg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file1"]["error"] > 0)
    {
    $msg1="Return Code: " . $_FILES["file1"]["error"] . "<br />";
    }
  else
    {
   /* $msg1="Upload: " . $_FILES["file1"]["name"] . "<br />";
    $msg1=$msg1."Type: " . $_FILES["file1"]["type"] . "<br />";
    $msg1=$msg1."Size: " . ($_FILES["file1"]["size"] / 1024) . " Kb<br />";
    $msg1=$msg1."Temp file: " . $_FILES["file1"]["tmp_name"] . "<br />";*/

    if (file_exists("uploads/". $_FILES["file1"]["name"]))
      {
      $msg1=$msg1."Since the files already exists rename the file on your comp and upload.";
      }
      else {
      move_uploaded_file($_FILES["file1"]["tmp_name"], "uploads/". $_FILES["file1"]["name"]);
      $name=$_FILES["file1"]["name"];
      $msg1=$name;
      }
    }
  }
else
  {
    //exchanged it with the top code instead of the error msg.
  move_uploaded_file($_FILES["file1"]["tmp_name"], "uploads/". $_FILES["file1"]["name"]);
       $name=$_FILES["file1"]["name"];
      $msg1=$name;
  }
//Logic for file1 upload endend
}
$sql="INSERT INTO accounts VALUES ('$id','$sr','$date','$title','$price','$received','$event','$msg1')";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Accounts added !');window.location.href='accounts.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 