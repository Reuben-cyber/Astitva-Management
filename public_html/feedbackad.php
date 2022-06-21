<?php
session_save_path("./tmp");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		tr{
			height:3vw;
		}
	</style>
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
if (isset($_SESSION['usertype'])&&($_SESSION['usertype'])=='a') {
include'headeradmin.php';
}else{
    include'headerhead.php';
}
?>
<p style="color:white; margin-left:12vw;font-size:2vw; margin-top:4vw;">Feedbacks:-</p>
	<table border="2" style="width:80vw;margin-top:3vw; margin-left:4.5vw; border:0.1vw solid #ffffff; color:white;">
	<tr>
		<td>Sr.No.</td>
		<td style="width:3vw;">Which Platform?</td>
		<td>Communication with organizers</td>
		<td>First participation?</td>
		<td>Will you participate again?</td>
		<td>How was the overall event?</td>
		<td>Which event were you in?</td>
		<td>How was astitva online?</td>
		<td>Frequency of checking our posts?</td>
		<td>Caption</td>
		<td>Content</td>
		<td>Creativity</td>
		<td>Engaging</td>
		<td>Frequency</td>
		<td>Social sensitivity</td>
		<td>Overall reach</td>
		<td>General appeal</td>
		<td>Youtube subscription?</td>
		<td>Suggestions</td>
		<td>Name</td>

    </tr>
    <?php
        include "conn.php";  
        $records = mysqli_query($con1,"SELECT sr,plat,comm,part,part1,over,event,satis,freq,cap,con,crea,eng,freq1,social,reach,appeal,youtube,sugg,name From feedback");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
			$st=$data[1];
			$yr=$data[2];
			$ev=$data[3];
			$stat=$data[4];
			$stat1=$data[5];
			$stat2=$data[6];
			$stat3=$data[7];
			$stat4=$data[8];
			$stat5=$data[9];
			$stat6=$data[10];
			$stat7=$data[11];
			$stat8=$data[12];
			$stat9=$data[13];
			$stat10=$data[14];
			$stat11=$data[15];
			$stat12=$data[16];
			$stat13=$data[17];
			$stat14=$data[18];
			$stat15=$data[19];
			

            echo"<tr>
            <td>$nm</td>
            <td>$st</td>
            <td>$yr</td>
            <td>$ev</td>
            <td>$stat</td>
            <td>$stat1</td>
            <td>$stat2</td>
            <td>$stat3</td>
            <td>$stat4</td>
            <td>$stat5</td>
            <td>$stat6</td>
            <td>$stat7</td>
            <td>$stat8</td>
            <td>$stat9</td>
            <td>$stat10</td>
            <td>$stat11</td>
            <td>$stat12</td>
            <td>$stat13</td>
            <td>$stat14</td>
            <td>$stat15</td>
           

            </tr>";
              ?>
              <?php
            }	
            ?>

	</table>
</body>
</html>