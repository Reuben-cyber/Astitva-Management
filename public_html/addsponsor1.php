<?php
session_save_path('./tmp');
session_start();
include("conn.php");

if(isset($_POST["submit"])){
$name1=$_POST['nsponsor'];
$amount=$_POST['namount'];
$balance=$_POST['nbalance'];

$name1=strip_tags($name1);
$amount=strip_tags($amount);
$balance=strip_tags($balance);


$name1=mysqli_real_escape_string($con1,$name1);
$amount=mysqli_real_escape_string($con1,$amount);
$balance=mysqli_real_escape_string($con1,$balance);


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
$sql="INSERT INTO astitva_sponsors VALUES (NULL,'$name1','$amount','$balance','$msg1')";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Sponsor added !');window.location.href='admin.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 