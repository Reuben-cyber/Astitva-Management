<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Astitva Management System</title>
	<link rel="stylesheet" type="text/css" href="css/astitva.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<?php
	include('header.php');
	?>
  <br>
	<nav role="navigation" class="nav">
		<ul>
			<li><a href="#">Participate in Astitva</a>
				<ul class="dropdown" style="z-index:2">
					<li><a href="registration.php">Indian Students</a></li>
					<li><a href="registrationil.php">International Students</a></li>
					<li><a href="Rules2021.pdf" target="_blank">Rules</a></li>
				</ul>
			</li>
				<ul>
			<li><a href="login.php">LOGIN (For Team Astitva ONLY)</a></li>
		</ul>
			

      <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT content From marquee");  

        while($data = mysqli_fetch_array($records))
        { $nm=$data[0];
          ?>
        <div><li style="width:50vw;"><font color:white><marquee><?php echo $nm;?></marquee></font></li></div>
        <li style="right:-11vw;"><a href="https://www.youtube.com/channel/UCgyIOcJgwGbCbnPfmQ9pNCA" target="_blank"><img src="images/you.jpg" style="width:3vw;height:2vw;"></a></li>
        <li style="right:-2vw;"><a href="https://www.instagram.com/bmcc_astitva/" target="_blank"><img src="images/insta.jpg" style="width:2.5vw;height:2vw;"></a></li>
         <li style="right:7vw;"><a href="https://www.facebook.com/bmccastitva" target="_blank"><img src="images/fb.png" style="width:2.5vw;height:2vw;"></a></li>
        <?php
      }
      ?>
		</ul>
	</nav>
	<br/>
  <?php
  include "conn.php";  
   $query = "SELECT * FROM images";
    $result = mysqli_query($con1,$query);
    while($res = mysqli_fetch_array($result)) {
  ?>
<p align="center">
	<div class="slideshow-container">

<div class="mySlides">
  
  <?php $imageURL5 = 'uploads/'.$res["img5"];?>
  <img src="<?php echo $imageURL5; ?>">
 
</div>

<div class="mySlides">

 <?php $imageURL1 = 'uploads/'.$res["img1"];?>
  <img src="<?php echo $imageURL1; ?>">

</div>

<div class="mySlides">
 
 <?php $imageURL2 = 'uploads/'.$res["img2"];?>
  <img src="<?php echo $imageURL2; ?>">
  
</div>

<div class="mySlides">
  
  <?php $imageURL3 = 'uploads/'.$res["img3"];?>
  <img src="<?php echo $imageURL3; ?>">
 
</div>

<div class="mySlides">
  
  <?php $imageURL4 = 'uploads/'.$res["img4"];?>
  <img src="<?php echo $imageURL4; ?>">
 
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>    
    <span class="dot"></span>   
</div>
</p>
<p style="color:white; font-size: 2.1vw; margin-top: 35vw; position: relative; margin-left:1vw; margin-right:1vw; font-family: 'Dancing Script', cursive;">
  About Astitva<br> <br>
Astitva is an annual festival of Indian Heritage which showcases young talent through cultural and academic inter-collegiate competitions. It is organized by BMCC Heritage Collective, driven by people with social sensitivity and sense of belongingness towards Indian Heritage. The event hosts inclusivity of diverse traditions, cultures, and legacies across the country.<br><br>

The simple idea of keeping the Indian sensitivity towards Indian heritage alive inspired the initiative. Astitva brings a unique amalgam of classical art forms and current relevance of heritage. This engages as well as depicts the importance and beauty of Indian heritage to the young crowd.  Astitva celebrates heritage not just for its sustenance but for discovering means of expression and inspiring thought.<br>
<br>
<a href="feedback.php" style="color:red;">How Was Astitva? Give us a Feedback.</a><br><br>
<a href="Rules2021.pdf" target="_blank" style="color:red;">Want to know the rules?</a><br><br>
<span style="text-align: center; margin-left: 60vw;"><?php include("counter.php"); ?></span>
</p>
<?php
}
?>
<?php
	include('footer.php');
	?>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	</body>
	</html>