<?php
session_save_path('./tmp');
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/astitva.css" />
	</head>
<body>
	<?php
	include('header.php');
	?>
	<nav role="navigation" class="nav">
		<ul>
			<li><a href="#">PARTICIPATE IN ASTITVA</a></li>
			<li><a href="login.php">LOGIN (For Team Astitva ONLY)</a></li>
			
      <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT content From marquee");  

        while($data = mysqli_fetch_array($records))
        { $nm=$data[0];
          ?>
        <div><li style="width:50vw;"><font color:white><marquee><?php echo $nm;?></marquee></font></li></div>
        <li style="right:-11vw;"><a href="https://www.youtube.com/channel/UCgyIOcJgwGbCbnPfmQ9pNCA"><img src="images/you.jpg" style="width:3vw;height:2vw;"></a></li>
        <li style="right:-2vw;"><a href="https://www.instagram.com/bmcc_astitva/"><img src="images/insta.jpg" style="width:2.5vw;height:2vw;"></a></li>
         <li style="right:7vw;"><a href="https://www.facebook.com/bmccastitva"><img src="images/fb.png" style="width:2.5vw;height:2vw;"></a></li>
        <?php
      }
      ?>
		</ul>
	</nav>

<form action="feedback1.php" method="POST" class="adduser" style="height:78vw; width:80vw; margin-left:9vw; margin-right:10vw; margin-top:5vw;">
		<div class="connect" style="font-size:1.5vw; margin-left: 1vw;">
			<center>
		<h1>Feedback Form!</h1><br></center>
		<div style="width: 70vw;margin-left: 5vw;margin-right: 5vw;">
		From which platform did you come to know about the online Avatar of ASTITVA? 
			<select name="plat" id="plat" style="width:10vw;margin-left: 4.5vw;">
            <option value="instagram">Instagram</option>
            <option value="facebook">Facebook</option>
            <option value="email">Email</option>
            <option value="whatsapp">Whatsapp</option>
            <option value="other">Other</option>
            </select><br>

How was the Communication with the organizers?
<select name="comm" id="comm" style="width:10vw;margin-left:23.8vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>

Were you a first time participant for Astitva?
<select name="part" id="part" style="width:10vw;margin-left:27.3vw;">
  <option value="yes">Yes</option>
  <option value="no">No</option>
</select><br>

Will you participant in Astitva in future?
<select name="part1" id="part1" style="width:10vw;margin-left:29.7vw;">
  <option value="yes">Yes</option>
  <option value="no">No</option>
</select><br>

How was the overall event?
<select name="over" id="over" style="width:10vw;margin-left:37.5vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>

Which event were you a part of?
<select name="user" id="user" style="width:10vw;margin-left:34.6vw;">
 <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT eventname From astitva_events");  

        while($data = mysqli_fetch_array($records))
        {
			$nm=$data[0];
            echo "<option value='$nm' id='nm' name='$nm'> $nm </option>"; 
        }	
    ?>  
 </select><br>

How satisfied are you with Astitva online event?
<select name="satis" id="satis" style="width:10vw;margin-left:25vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>

How frequently do you check posts on our page?
<select name="freq" id="freq" style="width:10vw;margin-left:24.7vw;">
  <option value="daily">Daily</option>
  <option value="alternate">Alternate</option>
  <option value="Once a week">Once a week</option>
  <option value="fortnighly">Fortnightly</option>
  <option value="monthly">Monthly</option>
</select><br>

Have you subscribed to our youtube channel?
<select name="youtube" id="youtube" style="width:10vw;margin-left:26.7vw;">
  <option value="yes">Yes</option>
  <option value="no">No</option>
</select><br><br>

Rate the following about our posts?<br>
<div style="margin-left: 3vw;">
Captions:
<select name="cap" id="cap" style="width:5vw;margin-left:20vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>

Content:
<select name="con" id="con" style="width:5vw;margin-left:20.5vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>

Creativity:
<select name="crea" id="crea" style="width:5vw;margin-left:19.3vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>

Engaging:
<select name="eng" id="eng" style="width:5vw;margin-left:19.5vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>

Frequency:
<select name="freq1" id="freq1" style="width:5vw;margin-left:19vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>

Social Sensitivity:
<select name="social" id="social" style="width:5vw;margin-left:14.8vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>

Overall Reach:
<select name="reach" id="reach" style="width:5vw;margin-left:16.8vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>

General Appeal:
<select name="appeal" id="appeal" style="width:5vw;margin-left:16vw;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select><br>
</div>

Any Suggestions?
<input type="text" name="sugg" id="sugg" style="margin-left: 15vw;width: 38vw;height: 3vw;"><br>

Name:
<input type="text" name="name" id="name"style="margin-left: 22vw;width: 25vw;"><br><br>

<input type="submit" name="submit" id="submit" style="margin-left:25vw;width: 10vw;height: 3vw;font-size: 1.8vw;">
</div>
		</div>
	</form>
</body>
</html>
