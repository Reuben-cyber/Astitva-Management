<?php
session_save_path('./tmp');
session_start();
include("conn.php");

if(isset($_POST["submit"])){

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

//logic for file2 upload started
$allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["file2"]["name"]);
$extension = end($parts);
echo $_FILES["file2"]["tmp_name"];
if ((($_FILES["file2"]["type"] == "image/gif")
|| ($_FILES["file2"]["type"] == "image/jpeg")
|| ($_FILES["file2"]["type"] == "image/png")
|| ($_FILES["file2"]["type"] == "image/jpg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file2"]["error"] > 0)
    {
    $msg2="Return Code: " . $_FILES["file2"]["error"] . "<br />";
    }
  else
    {
    /*$msg2="Upload: " . $_FILES["file2"]["name"] . "<br />";
    $msg2=$msg2."Type: " . $_FILES["file2"]["type"] . "<br />";
    $msg2=$msg2."Size: " . ($_FILES["file2"]["size"] / 1024) . " Kb<br />";
    $msg2=$msg2."Temp file: " . $_FILES["file2"]["tmp_name"] . "<br />";*/

    if (file_exists("uploads/" . $_FILES["file2"]["name"]))
      {
      $msg2=$msg2."Since the files already exists rename the file on your comp and upload it using Update Event Report option on the left.";
      }
      else {
      move_uploaded_file($_FILES["file2"]["tmp_name"], "uploads/" . $_FILES["file2"]["name"]);
      $name=$_FILES["file2"]["name"];
      $msg2=$name;
      }
    }
  }
else
  {
   move_uploaded_file($_FILES["file2"]["tmp_name"], "uploads/" . $_FILES["file2"]["name"]);
       $name=$_FILES["file2"]["name"];
      $msg2=$name;
  }
//Logic for file2 upload endend


//logic for file3 upload 
  $allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["file3"]["name"]);
$extension = end($parts);
echo $_FILES["file3"]["tmp_name"];
if ((($_FILES["file3"]["type"] == "image/gif")
|| ($_FILES["file3"]["type"] == "image/jpeg")
|| ($_FILES["file3"]["type"] == "image/png")
|| ($_FILES["file3"]["type"] == "image/jpg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file3"]["error"] > 0)
    {
    $msg3="Return Code: " . $_FILES["file3"]["error"] . "<br />";
    }
  else
    {
    /*$msg3="Upload: " . $_FILES["file3"]["name"] . "<br />";
    $msg3=$msg3."Type: " . $_FILES["file3"]["type"] . "<br />";
    $msg3=$msg3."Size: " . ($_FILES["file3"]["size"] / 1024) . " Kb<br />";
    $msg3=$msg3."Temp file: " . $_FILES["file3"]["tmp_name"] . "<br />";*/

    if (file_exists("uploads/" . $_FILES["file3"]["name"]))
      {
      $msg3=$msg3."Since the files already exists rename the file on your comp and upload it using Update Event Report option on the left.";
      }
      else {
      move_uploaded_file($_FILES["file3"]["tmp_name"], "uploads/" . $_FILES["file3"]["name"]);
       $name=$_FILES["file3"]["name"];
      $msg3=$name;
      }
    }
  }
else
  {
   move_uploaded_file($_FILES["file3"]["tmp_name"], "uploads/" . $_FILES["file3"]["name"]);
      $name=$_FILES["file3"]["name"];
      $msg3=$name;
  }
//Logic for file3 upload endend

//logic for file4 upload 
  $allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["file4"]["name"]);
$extension = end($parts);
echo $_FILES["file4"]["tmp_name"];
if ((($_FILES["file4"]["type"] == "image/gif")
|| ($_FILES["file4"]["type"] == "image/jpeg")
|| ($_FILES["file4"]["type"] == "image/png")
|| ($_FILES["file4"]["type"] == "image/jpg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file4"]["error"] > 0)
    {
    $msg4="Return Code: " . $_FILES["file4"]["error"] . "<br />";
    }
  else
    {
    /*$msg4="Upload: " . $_FILES["file4"]["name"] . "<br />";
    $msg4=$msg4."Type: " . $_FILES["file4"]["type"] . "<br />";
    $msg4=$msg4."Size: " . ($_FILES["file4"]["size"] / 1024) . " Kb<br />";
    $msg4=$msg4."Temp file: " . $_FILES["file4"]["tmp_name"] . "<br />";*/

    if (file_exists("uploads/" . $_FILES["file4"]["name"]))
      {
      $msg4=$msg4."Since the files already exists rename the file on your comp and upload it using Update Event Report option on the left.";
      }
      else {
      move_uploaded_file($_FILES["file4"]["tmp_name"], "uploads/" . $_FILES["file4"]["name"]);
       $name=$_FILES["file4"]["name"];
      $msg4=$name;
      }
    }
  }
else
  {
  move_uploaded_file($_FILES["file4"]["tmp_name"], "uploads/" . $_FILES["file4"]["name"]);
       $name=$_FILES["file4"]["name"];
      $msg4=$name;
  }
//Logic for file4 upload endend

	//Logic for file5 upload
$allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["file1"]["name"]);
$extension = end($parts);
echo $_FILES["file5"]["tmp_name"];
if ((($_FILES["file5"]["type"] == "image/gif")
|| ($_FILES["file5"]["type"] == "image/jpeg")
|| ($_FILES["file5"]["type"] == "image/png")
|| ($_FILES["file5"]["type"] == "image/jpg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file1"]["error"] > 0)
    {
    $msg5="Return Code: " . $_FILES["file5"]["error"] . "<br />";
    }
  else
    {
   /* $msg1="Upload: " . $_FILES["file1"]["name"] . "<br />";
    $msg1=$msg1."Type: " . $_FILES["file1"]["type"] . "<br />";
    $msg1=$msg1."Size: " . ($_FILES["file1"]["size"] / 1024) . " Kb<br />";
    $msg1=$msg1."Temp file: " . $_FILES["file1"]["tmp_name"] . "<br />";*/

    if (file_exists("uploads/". $_FILES["file5"]["name"]))
      {
      $msg5=$msg5."Since the files already exists rename the file on your comp and upload.";
      }
      else {
      move_uploaded_file($_FILES["file5"]["tmp_name"], "uploads/". $_FILES["file5"]["name"]);
      $name=$_FILES["file5"]["name"];
      $msg5=$name;
      }
    }
  }
else
  {
    //exchanged it with the top code instead of the error msg.
  move_uploaded_file($_FILES["file5"]["tmp_name"], "uploads/". $_FILES["file5"]["name"]);
       $name=$_FILES["file5"]["name"];
      $msg5=$name;
  }
//Logic for file5 upload endend
}
$sql="UPDATE images set img1='$msg1',img2='$msg2',img3='$msg3',img4='$msg4',img5='$msg5'";

if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Images Uploaded !');window.location.href='img.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 