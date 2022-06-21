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
session_save_path('../tmp');
session_start();
$border=$_SESSION["border"];
$qf = intval($_GET['qf']);
//$q1 = intval($_GET['q1']);
//for assigning border as below, if & elseif case is a better option!!
if($qf == '11'){$qff = 'Arila'; } 
elseif($qf=='22') {$qff = 'Allura-Regular';}
elseif($qf=='33') {$qff = 'Times';}
elseif($qf=='44') {$qff = 'Comic';}
$_SESSION["font"] = $qff;

if($_SESSION["background"]==NULL){
  $background=NULL;
}
else{
  $background=$_SESSION['background'];
 echo '<style>.container{background-color:'.$background.';}</style>';

}

?>
<div class="container">
  <img src="<?php echo $border ?>"  style="width:100%;">
  <div class="centered"><h2>BRIHAN MAHARASHTRA COLLEGE OF COMMERCE</h2>
   <p><?php echo $qff ?></p>
</div>
</div>
</body>
</html>