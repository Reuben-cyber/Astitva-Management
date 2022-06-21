<?php
session_save_path("./tmp");
session_start();
$_SESSION['border']=NULL;
$_SESSION['font']=NULL;
$_SESSION['background']=NULL;
$_SESSION['text']=NULL;
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
include('headeradmin.php');
?>
	<br/>
	<?php
      	include('conn.php');
         $sql = "Select count(id) AS wei from astitva_registrations where country='India'";
         $sum = mysqli_query($con1,$sql);
         $result= mysqli_fetch_object($sum);


         $rqt = "Select count(id) AS eiw from astitva_volunteers";
         $mus = mysqli_query($con1,$rqt);
         $result1= mysqli_fetch_object($mus);

         $abc="Select count(id) as rty from astitva_registrations where country!='India' ";
         $xyz = mysqli_query($con1,$abc);
         $result2= mysqli_fetch_object($xyz);

         $asd="Select count(id) as pol from astitva_events";
         $xzy = mysqli_query($con1,$asd);
         $result3= mysqli_fetch_object($xzy);

         $add="Select count(id) as bbc from astitva_judges";
         $ert = mysqli_query($con1,$add);
         $result4= mysqli_fetch_object($ert);

         $vdd="Select count(id) as vbc from astitva_sponsors";
         $erf = mysqli_query($con1,$vdd);
         $result5= mysqli_fetch_object($erf);


         ?>
         <p style="color:white;margin-left:37vw;margin-top: 10vw; font-size: 1.9vw;">
<div style="width: 30vw;background-color: orange;height: 10vw;color: black;margin-top: -5vw;margin-left: 2vw;border-radius: 2vw;"><center><h1>&nbsp&nbspTotal Indian Participants</h1><h1> <?php echo $result->wei;?> Participants</h1></center></div>
<div style="width: 30vw;background-color: orange;height: 10vw;color: black;margin-top: -11.5vw;margin-left: 34.5vw;border-radius: 2vw;"><center><h1>Total International Participants</h1><h1> <?php echo $result2->rty;?> Participants</h1></center> </div>
<div style="width: 30vw;background-color: orange;height: 10vw;color: black;margin-top: -11.5vw;margin-left: 67vw;border-radius: 2vw;"><center><h1>Total Volunteers</h1><h1><?php echo $result1->eiw; ?> Volunteers</h1></center></div><br>
<div style="width: 30vw;background-color: orange;height: 10vw;color: black;margin-top: 2vw;margin-left: 2vw;border-radius: 2vw;"><center><h1>Total Events</h1><h1><?php echo $result3->pol; ?> Events</h1></center></div>
<div style="width: 30vw;background-color: orange;height: 10vw;color: black;margin-top: -11.5vw;margin-left: 34.5vw;border-radius: 2vw;"><center><h1>Total Judges</h1><h1><?php echo $result4->bbc; ?> Judges</h1></center></div>
<div style="width: 30vw;background-color: orange;height: 10vw;color: black;margin-top: -11.5vw;margin-left: 67vw;border-radius: 2vw;"><center><h1>Total Sponsors</h1><h1><?php echo $result5->vbc; ?> Sponsors</h1></center></div>
</p>
</body>
<br>
<br>
<?php
	include('footer.php');
	?>
</html>