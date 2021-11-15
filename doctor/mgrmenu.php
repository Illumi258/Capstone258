<?php
session_start();
include_once '../assets/conn/dbconnect.php';
// include_once 'connection/server.php';
if(!isset($_SESSION['mgrSession']))
{
header("Location: ../mgrmenu.php");
}
$usersession = $_SESSION['mgrSession'];
$res=mysqli_query($con,"SELECT * FROM manager WHERE username=".$usersession);

?>


<style type="text/css">
.wrapper1 {
padding: 40;
}
</style>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Dashboard Manager </title>
        <!-- Bootstrap Core CSS -->
        <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
        <link href="assets/css/material.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/css/sb-admin.css" rel="stylesheet">
        <link href="assets/css/time/bootstrap-clockpicker.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
        <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

        <!--Font Awesome (added because you use icons in your prepend/append)-->
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

        <!-- Inline CSS based on choices in "Settings" tab -->
        <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

        <!-- Custom Fonts -->
    </head>
	
<style >	
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
	position:relative;
	left:-485px;
	top: 9px;
   width: 90px;
   height: 70px;
margin: auto;  z-index: +2;
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
	BOTTOM:39PX;
	LEFT:495PX;
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
 <!-- 
div.container{
	position:absolute;
	left:70px;
	top:60px;
	z-index: +1;
	-->
}

.logo{
	float:left; 
top:20px;}
	
</style>	
	
    <body style="background-color: #ffff">
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
					<!-- <span style="width:75px; height:75px"> -->
                     <img src="managerr.png" style="float:left;  margin-left: 15px; margin-top: 3px; border-right:none; width:69px; height:69px"> <a  href="mgrmenu.php" class="navbar-brand" style="margin-left: -15px">Welcome back to work, Manager </a>
             
				</div>
				
                <!-- Top Menu Items --> 
                <ul class="nav navbar-right top-nav">
                    
                    
   
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="wrapper1">
				
                    <ul class="nav navbar-nav side-nav">
                        <li class= "active">
                            <a href="mgrmenu.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
						
						
						
				<li>
				<a href="changebookingstatus.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-table"></i> Registered Appointments  </i></a>

                            <!--<a href="doctordashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>-->
                        </li>
				<li>
				<a href="recommendation.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-file"></i> Appointment Transfer  </i></a>   
                        </li>		
						
                <li >
                    <a href="managerindoctorsched.php" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  Doctor Schedule </a>

                </li>
						

                        <li>
                            <a href="managerpatientlist.php"><i class="fa fa-fw fa-edit"></i> Patient List</a>
                        </li>
						
						 <li>
                           <a href="logout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
			
		
			
            <!-- navigation end -->

<div class="content-wrapper" style="min-height: 325px; padding:50px;" ">
<section class="content-header">
<div class="header-icon">
<i class="pe-7s-world"></i>
</div>
<div class="header-title">
<h3>Manager Dashboard</h3>
</div>
</section>

<section class="content">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
<div class="panel panel-bd">
<a href="managerpatientlist.php">
<div class="panel-body">
<div class="statistic-box" >
<h5><span class="count-number">2</span> </h5>
<div class="small"> Total Patient </div>
<div class="sparkline1 text-center"></div>
</div>
<div class="icon"><i class="ti-user"></i></div>
</div>
</a>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
<div class="panel panel-bd">
<a href="bookviewappointment.php">
<div class="panel-body">
<div class="statistic-box">
<h5><span class="count-number">Schedule </span> </h5>
<div class="small"> View Schedule Date Booking </div>
<div class="sparkline1 text-center"></div>
</div>
<div class="icon"><i class="ti-user"></i></div>
</div>
</a>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
<div class="panel panel-bd">
<a href="reports2.php">
<div class="panel-body">
<div class="statistic-box">
<h5><span class="count-number">Payments</span> </h5>
<div class="small"> Update Payments </div>
<div class="sparkline1 text-center"></div>
</div>
<div class="icon"><i class="ti-user"></i></div>
</div>
</a>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
<div class="panel panel-bd">
<a href="#">
<div class="panel-body">
<div class="statistic-box">
<h5><span class="count-number">0</span> </h5>
<div class="small">Total Appointment</div>
<div class="sparkline2 text-center"></div>
</div>
<div class="icon"><i class="ti-user"></i></div>
</div>
</a>
</div>
</div>
</div>



<?php
 
$dataPoints = array(
	array("label"=> "Sunday", "y"=> 70),
	array("label"=> "Monday", "y"=> 40),
	array("label"=> "Tuesday", "y"=> 30),
	array("label"=> "Wednesday", "y"=> 40),
	array("label"=> "Thursday", "y"=> 30),
	array("label"=> "Friday", "y"=> 50),
	array("label"=> "Saturday", "y"=> 60),
);
	
?>

<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "Veterinary Appointment"
	},
	axisY: {
		suffix: "%",
		scaleBreaks: {
			autoCalculate: true
		}
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0\"%\"",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                                                       

<br>



    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
           <!-- <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1>Welcome Shane</h1>
                </div>
            </div>
			 -->
			
			
			

        </div>

    </div>		

                </div>
            </div>
        <!-- /#wrapper -->


       
        <!-- jQuery -->
        <script src="../patient/assets/js/jquery.js"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="../patient/assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-clockpicker.js"></script>
        <!-- Latest compiled and minified JavaScript -->
         <!-- script for jquery datatable start-->
        <!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<?php

if(isset($_POST['check']))
{
		include 'dbconfig.php';
		$name=$_SESSION['user'];
		$sql = "Select * from book where name='$name'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($rows = mysqli_fetch_assoc($result)) 
			{
				echo "Username:".$rows["username"]."Name:".$rows["name"]."Date of Visit:".$rows["dov"]."Town:".$rows["town"]."<br>";
			}
		} 
		else 
		{
			echo "0 results";
		}
}
if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	header( "Refresh:1; url=../cover.php"); 
}
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
  setTimeout(showSlides, 10000); // Change image every 2 seconds
}
</script>



    </body>
</html>