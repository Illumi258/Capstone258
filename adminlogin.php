<?php
include_once 'assets/conn/dbconnect.php';

session_start();
if (isset($_SESSION['doctorSession']) != "") {
header("Location: doctor/doctordashboard.php");
}
if (isset($_POST['login']))
{
$doctorId = mysqli_real_escape_string($con,$_POST['doctorId']);
$password  = mysqli_real_escape_string($con,$_POST['password']);


$res = mysqli_query($con,"SELECT * FROM doctor1 WHERE doctorId = '$doctorId'");
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
// echo $row['password'];

if ($row['password'] == $password)
{
$_SESSION['doctorSession'] = $row['doctorId'];
?>


<?php
$con = mysqli_connect("localhost","root","","wt_database");

if(isset($_POST['login']))
{
	
    $username = $_POST['username'];
    $dob = date('Y-m-d', strtotime($_POST['logintimedate']));

    $query = "INSERT INTO activitylog1 (id,  logintimedate, username) VALUE ('DATETIME: Auto CURDATE()', CURTIME() ,'Admin User')";
    $query_run = mysqli_query($con, $query);

}
?>


<script type="text/javascript">
alert('Login Success');
</script>
<?php
header("Location: doctor/doctordashboard.php");
} else {
?>
<script type="text/javascript">
    alert("Wrong input");
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
			width: 1350px;
			 z-index: +2; box-shadow: 0 0 30px 0 black;   
	}
	.login-container{
		box-shadow: 0 0 10px 0 black;   
	}
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

div.container{
	position:absolute;
	left:70px;
	top:60px;
	z-index: +1;
	
}
	
		</style>
	<body style="background-color:#fff">	
	<div class="header">
				<ul>
					<li style="float:left;border-right:none"><a href="cover.php" class="logo"><img src="images/l.png" width="65px" height="65px"><strong> Veterinary </strong> Clinic Appointment </a></li><br>
					<li style="float:right;  margin-right: 15px; margin-top: -5px; "><a href="cover.php">Home</a></li>
				</ul>
			</div>

		
	
		<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="z8.jpg" style="width:1293px" height="580px">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
 
</div>  <img src="z7.jpg" style="width:1293px" height="580px">


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
   
        <div class="container">
            <!-- start -->
            <div class="login-container">
                    <div id="output"></div>
                    <div class="logo"><img src="images/l.png" width="100px" height="100px"></div>
					<br>
                    <div class="form-box">
                        <form class="form" role="form" method="POST" accept-charset="UTF-8">
                            <input name="doctorId" type="text" placeholder="Admin ID" required>
                            <input name="password" type="password" placeholder="Password" required>
							<button class="btn btn-info btn-block login" type="submit" name="login">Login</button>
                        </form>
                    </div>
                </div>
            <!-- end -->
        </div>
		
	
		

 
	
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
 </body>  
</html>