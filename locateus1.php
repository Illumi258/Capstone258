<?php
include_once 'assets/conn/dbconnect.php';

session_start();
if (isset($_SESSION['mgrSession']) != "") {
header("Location: doctor/mgrmenu.php");
}
if (isset($_POST['login']))
{
$username= mysqli_real_escape_string($con,$_POST['username']);
$password  = mysqli_real_escape_string($con,$_POST['password']);

$res = mysqli_query($con,"SELECT * FROM manager WHERE username = '$username'");

$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
// echo $row['password'];
if ($row['password'] == $password)
{
$_SESSION['mgrSession'] = $row['username'];
?>
<script type="text/javascript">
alert('Login Success');
</script>
<?php
header("Location: doctor/mgrmenu.php");
} else {
?>
<script type="text/javascript">
    alert("Wrong credentials. Please try again");
</script>
<?php
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clinic Appointment Application</title>
         <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="main.css">
		
    </head>
	
		<style>
		
html, 
body {
background-color: #ffffff;
}	

		.header{
			position:absolute;
			top: 0px;
			width: 1304px;
			 z-index: +2; box-shadow: 0 0 30px 0 black;   
	}
	.
	* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
	position:relative;
	left:-360px;
	top: 5px;
   width: 1690px;
   height: 1400px;
margin: auto;  z-index: 1;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
	POSITION:RELATIVE;
	BOTTOM:30PX;
	LEFT:125PX;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 2s ease;

}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 10.5s;
  animation-name: fade;
  animation-duration: 10.5s;
}

@-webkit-keyframes fade {
  from {opacity: 1} 
  to {opacity: .3}
}

@keyframes fade {
  from {opacity: 1} 
  to {opacity: .3}
  
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

div.title-wrapper{
	position:absolute;
	left:120px;
	top:60px;
	z-index: +2;
}

div.loc{
	position:relative;
	left:120px;
	top:90px;
}
	
		</style>
	<body style="background-color:#fff">	
	<div class="header">
				<ul>
					<li style="float:left;border-right:none"><a href="cover.php" class="logo"><img src="images/l.png" width="65px" height="65px"><strong> Veterinary </strong> Clinic Appointment </a></li><br>
					<li style="float:right;  margin-right: 15px; margin-top: -5px; "><a href="cover.php">Home</a></li>
				</ul>
			</div>
<div class="title-wrapper" >
        <center>
<br><br><br>
        <h2>About Us</h2>
  
    <p style="text-align:justify;">
	 <center>
                    The Veti Clinic operates an online appointment system to its clienteles. The company started 2003 as a small pet shop to sell quality freshwater  <br>
					fish to the Filipino hobbyist. The product line had expanded to include a number of products  <br>
					used in wholesale and retail such as dogs and cats feeds and accessories. Today, the company   <br>
					is one of the biggest whosale and retail stores of animal products carrying quality brands.  <br>
					Its online business sites launched in the 3rd quarter of 2016 to accommodate the growing  <br>
					population of loyal and new customers who prefer to purchase via online.  <br>
			</center>		
    </p>
    <br><br><br>
    <div class="v_space" style="width:28%;"></div>
    <center>
     <h2>Customers First </h2>
     <p style="text-align:justify;">
	 <center>
        Building loyalty and good relationship with our customer is our priority. <br>
        The company exist to give the best price without compromising the quality and to<br>
         make each transaction experience easy,safe and 
        accessible to online buyers.
	</center>
    </p>
    
<br><br><br>
    <div class="two_third" style="width:48%;">
        <h2>Mission</h2>
            <p style="text-align:justify;">
			 <center>
            Our goal is to give our customers the best online shopping experience by giving 
			them the best price and making each transaction  easy,  fast and secured.</p>
    </div><br><br><br>
    <div style="width:100%; height:90px; background-color:#ffff">
        <h2>Vision</h2>
         <p style="text-align:justify;">
		 <center>
            To be the top of the mind trusted online pet shop nationwide.
			</center>
        </p>
    </div>
 </div>	
   <br>
   
		
	
		<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="z8.jpg" style="width:1293px" height="580px">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="z7.jpg" style="width:1293px" height="580px">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="z66.jpg" style="width:1293px" height="580p" top="233">

</div>
<div style="text-align:right">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
<br>	
   <br><br><br><br><br><br><br><br><br>
   
<div class="loc">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.418049301046!2d121.08958311483984!3d14.575238789818616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7e865edbe4b%3A0x285dcadbcbea212a!2sFrancisco%20Legaspi%2C%20Pasig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1604239768428!5m2!1sen!2sph" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>


	<br><br><br><br><br><br>
	<br><br><br><br><br><br>


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
  setTimeout(showSlides, 10000); // Change image every 2 seconds
}
</script>
        <!-- <script src="assets/js/jquery.js"></script>

        js start -->
        
        <!-- js end -->
		<footer id="footer" class="midnight-blue wow fadeInDown"  style=" height:20px; background-color:#0000" >
        <div class="container">
            <div class="row">
			
            <div class="col-sm-6 wow fadeInDown"> &copy; 2020 Online Veterinary Appointment System</a>. <br>All Rights Reserved.   </div>
             </div>
        </div>
</footer><!--/#footer-->
 </body>  
</html>