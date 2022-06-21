<?php
session_save_path('./tmp');
session_start();
include("conn.php");
$id=$_SESSION["id"];

if(isset($_POST["submit"])){
$text1=$_POST['text1'];
$text1=strip_tags($text1);
$text1=mysqli_real_escape_string($con1,$text1);

$text2=$_POST['text2'];
$text2=strip_tags($text2);
$text2=mysqli_real_escape_string($con1,$text2);
}
 $ress="SELECT content from marquee";
   $result = mysqli_query($con1,$ress);
   $number_of_rows = mysqli_num_rows($result);
  // if number of rows is 0, then insert it. else update it
    if($number_of_rows == 0)
    {
        $sql="INSERT INTO marquee VALUES (NULL, '$id','$text1')";
        mysqli_query($con1, $sql);
        echo"<script>alert('Inserted Successfully !');window.location.href='marque.php';</script>";
     }
    else
    {
        $data_row = mysqli_fetch_row($result);
        $uid = $data_row[0];
        $query="UPDATE marquee SET id='$id',content='$text2'";
        mysqli_query($con1, $query);
        echo"<script>alert('Updated Successfully !');window.location.href='marque.php';</script>";
    }
?>