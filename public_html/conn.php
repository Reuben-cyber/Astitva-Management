<?php

$servername = "localhost";
$database = "u290281649_astitvadb";
$username = "u290281649_root";
$password = "Mappar@123";

$con1 = mysqli_connect($servername, $username, $password, $database);

if (!$con1)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  
  
mysqli_set_charset($con1,"utf8");
mysqli_select_db($con1,"u290281649_astitvadb");

?>