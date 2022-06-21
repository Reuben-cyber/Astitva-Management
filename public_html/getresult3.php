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
if(isset($_POST['bgc'])){
$bgc=$_POST['bgc'];

echo '<style>.container{background-color:'.$bgc.';}</style>';
$_SESSION['background']=$bgc;
}; ?>

<?php
//include('font/Allura-Regular.php');
//include('font/times.php');
//include('font/comic.php');
session_save_path('./tmp');
session_start();
$qi=$_SESSION["qi"];
$qff=$_SESSION["qff"];
$qr = intval($_GET['qr']);
//$q1 = intval($_GET['q1']);
//for assigning border as below, if & elseif case is a better option!!
$bg='black';

?>
<div class="container" style="background:<?php echo $qr ?>;">
  <img src="<?php echo $qi ?>"  style="width:100%;">
  <div class="centered"><h2>BRIHAN MAHARASHTRA COLLEGE OF COMMERCE</h2>
   <p><?php echo $qff ?></br>
   <?php echo $qr ?>
   </p>
</div>
</div>
</body>
</html>