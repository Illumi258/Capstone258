<html>
        <title>Dashboard Patients  </title>

<head>

    <link href="csss/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="csss/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="csss/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="Dashboard.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<?php include "dbconfig.php"; ?>

<!------ Include the above in your HEAD tag ---------->

	
<style type="text/css">

body   
{  
height: 125vh;  
margin-top: 25px;  
padding: 80px;  
background-size: cover;  
font-family: sans-serif;  
}  

header {  
background-color: #2B3856;  
position: fixed;  
left: 0;  
right: 0;  
top: 5px;  
height: 100px;  
display: flex;  
align-items: center;  
box-shadow: 0 0 30px 0 black;   
 z-index: +1; 
}  
header * {  
display: inline;  
}  
header li {  
margin: 20px;  
font-size: 25px;
}  
header li, a {  
color: white;  
text-decoration: none;  
} 


label, li{
	color: #000;
	font-size:15px;
	font-family:sans-serif;
	line-height:1.15;
}

span.container{
position:relative;
left: 450px;
   top: 30px;
     z-index: -1;
}
div.container1{
	float:top;
 right: -530px;
   top: 30px;
    z-index: -1;
}
span.submitcontainer{
position:relative;
left: 200px;
   top: 30px;
     z-index: -1;
}

.navi a {
    border-bottom: 0px solid #0d172e;
    border-top: 0px solid #0d172e;
    color: #ffffff;
    display: block;
    font-size: 17px;
    font-weight: 500;
    padding: 26px 20px;
    text-decoration: none;
	
}

.navi i {
    margin-right: 15px;
    color: #5584ff;
}

.navi .active a {
    background: #122143;
    border-left: 5px solid #5584ff;
    padding-left: 15px;
}

.navi a:hover {
    background: #122143 none repeat scroll 0 0;
    border-left: 5px solid #5584ff;
    display: block;
    padding-left: 15px;
}

.navbar-default {
    background-color: #ffffff;
    border-color: #ffffff;
}

.navbar-toggle {
    border: none;
}

.navbar-default .navbar-toggle:focus,
.navbar-default .navbar-toggle:hover {
    background-color: rgba(0, 0, 0, 0);
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #0e1a35;
}


</style>
	   

            <!-- Navigation -->
                <!-- Brand and toggle get grouped for better mobile display -->

                <!-- Top Menu Items -->

			<Body>   
<header>  
<nav>  
<ul>  
					<li ><a href="ulogin.php"><img src="images/l.png" width="65px" height="65px">
					&nbsp;<strong>Book Appointments</a></li> 
</ul>  
</nav>  
 </header>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li ><a href="ulogin.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
						<li class="active"><a href="Appointmentbook.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Book Appointment</span></a></li>
                        <li><a href="viewpatientappointments.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Show Appointments</span></a></li>
                        <li><a href="cancelbookingpatient.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cancel Booking</span></a></li>
						<li><a href="ulocateus.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Veterinarians</span></a></li>
						<li ><a href="Vaccination.php"><i class="fa fa-file" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Vaccination Pet</span></a></li>
                        <li><a href="cover.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Log Out</span></a></li>
                    </ul>
                </div>
            </div>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Book Appointments</h1>
                    </div>
                </div>
				
				<Br>
				<br>
				<br>
				<br>
                <!-- /. ROW  -->
                <div class="row">
				
				  <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="book.php">
                                <i class="glyphicon glyphicon-envelope fa-5x"></i>
                                <h5>Book Appointment</h5>
                            </a>
                        </div>
                    </div>
				
			
                   
					
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="prescription1.php">
                                <i class="glyphicon glyphicon-user fa-5x"></i>
                                <h5>Presciption</h5>
                            </a>
                        </div>
                    </div>
					
					
					 <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="emergencycases.php">
                                <i class="glyphicon glyphicon-remove fa-5x"></i>
                                <h5>Emergency Cases</h5>
                            </a>
							
                        </div>
						
                    </div>
                </div>
				
	




</body>
</html>