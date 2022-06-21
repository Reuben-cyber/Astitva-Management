<!DOCTYPE html>
<html>
<head>
<style>
.container {
  position: relative;
  text-align: center;
  color: black;
}


.centered {
  position: absolute;
  top: 30%;
  left: 20%;
  
}
</style>
<body>

<?php
//include('font/Allura-Regular.php');
//include('font/times.php');
//include('font/comic.php');
session_save_path('./tmp');
session_start();
if($_SESSION["font"]==NULL){
	$font=NULL;
}
else{
	$font=$_SESSION["font"];
}

if($_SESSION["background"]==NULL){
  $background=NULL;
}
else{
 $background=$_SESSION['background'];
 echo '<style>.container{background-color:'.$background.';}</style>';


}

$border = intval($_GET['q']);
//$q1 = intval($_GET['q1']);
//for assigning border as below, if & elseif case is a better option!!
if($border == '1'){$qi = 'certificateborder/border1.png'; } 
elseif($border=='2') {$qi = 'certificateborder/border2.png';}
elseif($border=='3') {$qi = 'certificateborder/border3.png';}
elseif($border=='4') {$qi = 'certificateborder/border4.png';}
$_SESSION["border"] = $qi;

?>
<div class="container">
  <img src="<?php echo $qi ?>"  style="width:100%;">
  <div class="centered"><h2>BRIHAN MAHARASHTRA COLLEGE OF COMMERCE</h2>
<p><?php echo $font ?></p>
</div>
</div>
</body>
</html>