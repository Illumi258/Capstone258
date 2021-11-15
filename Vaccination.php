<html>
        <title>Dashboard Patients  </title>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<?php include "dbconfig.php"; ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="Dashboard.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		
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

/*Main CSS*/


/*Login Signup Page*/
a:focus,a:hover,a{
    outline:none;
    text-decoration: none;
}
li,ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
.header-top i {
    font-size: 18px;
}
.bg-image {
    background: url(../images/background-login.jpg) no-repeat 0 0 / cover;
    position: relative;
    width: 100%;
    height: 100vh;
    display: table;
}

.login-header {
    display: inline-block;
    width: 100%;
    background: #0e1a35;
}

.login-signup {
    display: table-cell;
    vertical-align: middle;
    width: 100%;
}

.login-logo img {
    cursor: pointer;
    max-width: 171px;
    padding: 23px 15px 22px;
    width: 100%;
}

.login-header .navbar-right {
    margin-right: 0px;
}

.login-header .nav-tabs > li.active > a,
.login-header .nav-tabs > li.active > a:focus,
.login-header .nav-tabs > li.active > a:hover {
    background-color: transparent;
    border: none;
    color: #fff;
}

.login-header .nav-tabs > li > a {
    border: medium none;
    border-radius: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 48px;
    padding: 15px 30px;
    color: #fff;
}

.login-header .nav-tabs {
    border-bottom: none;
}

.login-header .nav-tabs > li {
    margin-bottom: 0px;
}

.login-header .nav > li > a:focus,
.login-header .nav > li > a:hover {
    background: none;
    text-decoration: none;
}

.login-header .nav-tabs > li.active {
    border-bottom: 6px solid #5584ff;
}

.login-inner h1 {
    color: #8492af;
    font-size: 48px;
    font-weight: 300;
    text-align: center;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-inner h1 span {
    color: #5584ff;
}

.login-form {
    text-align: center;
}

.login-form input {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border-color: -moz-use-text-color -moz-use-text-color #d4d9e3;
    border-image: none;
    border-style: none none solid;
    border-width: medium medium 1px;
    font-size: 13px;
    font-weight: 300;
    width: 100%;
    color: #8492af;
    padding: 15px 50px;
    font-size: 17px;
    max-width: 550px;
}

.login-form label {
    margin-bottom: 30px;
    width: 100%;
}

.user input {
    background: rgba(0, 0, 0, 0) url("../images/user.png") no-repeat scroll 7px 12px;
}

.pass input {
    background: rgba(0, 0, 0, 0) url("../images/password.png") no-repeat scroll 7px 12px;
}

.mail input {
    background: rgba(0, 0, 0, 0) url("../images/mail.png") no-repeat scroll 4px 12px;
}

.login-signup .tab-content {
    background: #ffffff none repeat scroll 0 0;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
    display: inline-block;
    margin-top: -8px;
    width: 100%;
}

.form-btn {
    background: #5584ff none repeat scroll 0 0;
    border: medium none;
    border-radius: 100px;
    color: #ffffff;
    font-weight: 400;
    max-width: 250px;
    padding: 10px 0;
    position: relative;
    width: 100%;
    margin: 40px 0;
    box-shadow: 0 2px 8px #d2d2d2;
    -moz-box-shadow: 0 2px 8px #d2d2d2;
    -webkit-box-shadow: 0 2px 8px #d2d2d2;
}

.form-btn::before {
    content: "";
    font-family: FontAwesome;
    position: absolute;
    right: 17px;
    top: 9px;
}

.form-details {
    padding: 35px 0;
}

.tab-content .tab-pane {
    padding: 70px 0;
}




.container {
    padding: 16px;
}
.sucontainer{
	padding: 50px;
	position:absolute;
	left:30%;
	right:30%;
	top:30%;
	border:1px solid white;
	border-collapse:collapse;
	background:white;
}
.dispcontainer{
	padding: 12px;
	position:bottom;
	left:30%;
	right:30%;
	bottom:5%;
	top:12%;
	border:2px solid white;
	border-collapse:collapse;
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:cover
}



/*Login Signup Page*/


/*Home Page*/

.home {
    background: #f6f7fa;
}

#navigation {
    background: #0e1a35;
}

#navigation {
    padding: 0;
}

.display-table {
    display: table;
    padding: 0;
    height: 100%;
    width: 100%;
}

.display-table-row {
    display: table-row;
    height: 100%;
}

.display-table-cell {
    display: table-cell;
    float: none;
    height: 100%;
}

.v-align {
    vertical-align: top;
}
.logo img {
    max-width: 180px;
    padding: 16px 0 17px;
    width: 100%;
}

.header-top {
    margin: 0;
    padding-top: 2px;
}

.header-top img {
    border-radius: 50%;
    max-width: 48px !important;
    width: 100%;
}

.add-project {
    background: #5584ff none repeat scroll 0 0;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 27px 10px 45px;
    position: relative;
}

.header-rightside .nav > li > a:focus,
.header-rightside .nav > li > a:hover {
    background: none;
    text-decoration: none;
}

.add-project::before {
    background: rgba(0, 0, 0, 0) url("../images/plus.png") no-repeat scroll 0 0;
    content: "";
    ;
    height: 12px;
    left: 17px;
    position: absolute;
    top: 12px;
    width: 12px;
}

.add-project:hover {
    color: #ffffff;
}

.header-top i {
    color: #0e1a35;
}

.icon-info {
    position: relative;
}
.navi i {
    font-size: 20px;
}
.label.label-primary {
    border-radius: 50%;
    font-size: 9px;
    left: 8px;
    position: absolute;
    top: -9px;
}

.icon-info .label {
    border: 2px solid #ffffff;
    font-weight: 500;
    padding: 3px 5px;
    text-align: center;
}

.header-top li {
    display: inline-block;
    text-align: center;
}

.header-top .dropdown-toggle {
    color: #0e1a35;
}

.header-top .dropdown-menu {
    border: medium none;
    left: -85px;
    padding: 17px;
}
.view {
    background: #5584ff none repeat scroll 0 0;
    border-radius: 100px;
    color: #ffffff;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
    padding: 10px 15px;
}

.navbar-content > span {
    font-size: 13px;
    font-weight: 700;
}

.img-responsive {
    width: 100%;
}
#navigation{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
		position: fixed;
	left: 0;
	width: 250px;
	height: 100%;
}
.search input {
    border: none;
    font-size: 15px;
    padding: 15px 9px;
    width: 100%;
    background: rgba(0, 0, 0, 0) url("../images/search.png") no-repeat scroll 99% 12px;
    color: #8492af;
}

header {
    background: #2B3856 none repeat scroll 0 0;
    box-shadow: 0 1px 12px rgba(0, 0, 0, 0.04);
    display: inline-block !important;
    line-height: 23px;
    padding: 15px;
    transition: all 0.5s ease 0s;
    width: 100%;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
	
}

.logo {
    text-align: center;
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

.circle-logo {
    margin: 0 auto;
    max-width: 30px !important;
    text-align: center;
}
.hidden-xs{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.user-dashboard {
    padding: 0 20px;
	
}

.user-dashboard h1 {
    color: #0e1a35;
    font-size: 30px;
    font-weight: 500;
    margin: 0;
    padding: 21px 0;
}
.sales {
    background: #ffffff none repeat scroll 0 0;
    border: 1px solid #d4d9e3;
    display: inline-block;
    padding: 15px;
    width: 100%;
}
.sales button {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 1px solid #dadee7;
    border-radius: 100px;
    font-size: 15px;
    letter-spacing: 0.5px;
    padding-right: 32px;
    color: #0e1a35;
}

.sales button::before {
    content: "";
    font-family: FontAwesome;
    position: absolute;
    right: 12px;
    top: 11px;
}
.sales  .btn-group {
    float: right;
}
.sales h2 {
    color: #8492af;
    float: left;
    font-size: 21px;
    font-weight: 600;
    margin: 0;
    padding: 9px 0 0;
}
.btn.btn-secondary.btn-lg.dropdown-toggle > span {
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.5px;
}
.sales .dropdown-menu{
    margin: 0px;
    padding: 0px;
    border: 0px;
    border-radius: 8px;
    width: 100%;
    color: #0e1a35;
}
.sales .btn-group.open .dropdown-toggle, .btn.active, .btn:active{
    box-shadow: none;
}
.sales .dropdown-menu > a {
    color: #0e1a35;
    display: inline-block;
    font-weight: 800;
    padding: 9px 0;
    text-align: center;
    width: 100%;
}
#my-cool-chart svg {
    width: 100%;
}
.sales .dropdown-menu > a:hover{
    color: #5584FF;   
}
.shield-buttons {
    display: none;
}
.close, .close:focus, .close:hover {
    color: #fff;;
    opacity: 1;
    text-shadow: none;
}
.modal-body input {
    border: 1px solid #d4d9e3;
    font-size: 14px;
    font-weight: 300;
    margin: 5px 0;
    padding: 14px 10px;
    width: 100%;
    color: #8492af;
}
.modal-body textarea {
    border: 1px solid #d4d9e3;
    font-size: 14px;
    font-weight: 300;
    height: 200px;
    margin-top: 5px;
    padding: 9px 10px;
    width: 100%;
    color: #8492af;
}
.modal-header.login-header h4 {
    color: #ffffff;
}
.modal-footer .add-project {
    background: #5584ff none repeat scroll 0 0;
    border: medium none;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 30px;
    position: relative;
}
.modal-footer .add-project::before{display: none;}
.modal-footer {
    border: 0 none;
    padding: 10px 15px 26px;
    text-align: right;
}
.cancel {
    background: #0E1A35     ;
    border: medium none;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 30px;
    position: relative;
    
}
.modal{
    top: 20%; 
}
.modal-header .close {
    margin-top: 2px;
}
.search input:focus{
    border-bottom: 1px solid #BDC4D4;
    line-height:22px;
    transition: 0.1s all;
}
.modal-header.login-header {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
/*Main CSS*/






@media only screen and (max-device-width: 767px) {
    .login-logo img {
        margin: 0 auto;
    }
    .login-details .nav-tabs > li {
        text-align: center;
        width: 50%;
    }
    .login-signup .login-inner h1 {
        font-size: 26px;
        margin-bottom: 0;
        margin-top: 10px;
    }
    .login-inner .login-form input {
        font-size: 15px;
        max-width: 100%;
        padding: 15px 45px;
    }
    .login-inner .form-details {
        padding: 25px;
    }
    .login-inner .login-form label {
        margin-bottom: 20px;
        width: 100%;
    }
    .login-inner .form-btn {
        margin: 0;
        max-width: 180px;
    }
    .tab-content .tab-pane {
        padding: 20px 0;
    }
    #navigation .navi a {
        font-size: 14px;
        padding: 20px;
        text-align: center;
    }
    #navigation .navi i {
        margin-right: 0px;
    }
    #navigation .navi a:hover,
    #navigation .navi .active a {
        background: #122143 none repeat scroll 0 0;
        border-left: none;
        display: block;
        padding-left: 20px;
    }
    header .header-top img {
        max-width: 38px !important;
    }
    .v-align header {
        padding: 12px 15px;
    }
    header .header-top li {
        padding-left: 13px;
        padding-right: 6px;
    }
    .navbar-default .navbar-toggle {
        border-color: rgba(0, 0, 0, 0);
    }
    .navbar-header .navbar-toggle {
        float: left;
        margin: 0;
        padding: 0;
        top: 12px;
    }
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}




    button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
            outline: medium none;
    }
    .user-dashboard .sales h2 {
        color: #8492af;
        float: left;
        font-size: 14px;
        font-weight: 600;
        margin: 0;
        padding: 13px 0 0;
}
    .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
        font-size: 11px;
}
    .user-dashboard .sales button {
        font-size: 11px;
        padding-right: 23px;
}  
    .user-dashboard .sales h2 {
    font-size: 12px;
}
.gutter{
    padding: 0;
}
}

@media only screen and (max-device-width: 992px) {
    header .header-top li {
        padding-left: 20px !important;
        padding-right: 0;
}
    header .logo img {
        max-width: 125px !important;
}

}

@media only screen and (min-device-width: 767px) and (max-device-width: 998px){
      .user-dashboard .header-top {
        padding-top: 5px;
}
    .user-dashboard .header-rightside {
        display: inline-block;
        float: left;
        width: 100%;
}
    .user-dashboard .header-rightside .header-top img {
        max-width: 41px !important;
} 
    .user-dashboard .sales button {
    font-size: 10px;
}
    .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
    font-size: 12px;
}
    .user-dashboard .sales h2 {
    font-size: 15px;
}
}
@media only screen and (min-device-width:998px) and (max-device-width: 1350px){
        #navigation .logo img {
    max-width: 130px;
    padding: 16px 0 17px;
    width: 100%;
}
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
					&nbsp;<strong>Vaccine</a></li> 
</ul>  
</nav>  
 </header>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li><a href="ulogin.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
						<li><a href="Appointmentbook.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Book Appointment</span></a></li>
                        <li><a href="viewpatientappointments.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Show Appointments</span></a></li>
                        <li><a href="cancelbookingpatient.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cancel Booking</span></a></li>
						<li><a href="ulocateus.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Veterinarians</span></a></li>
						<li  class="active"><a href="Vaccination.php"><i class="fa fa-file" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Vaccination Pet</span></a></li>
                        <li><a href="cover.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Log Out</span></a></li>
                    </ul>
                </div>
            </div>

<head>

    <!-- BOOTSTRAP STYLES-->
    <!-- FONTAWESOME STYLES-->
    <link href="csss/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="csss/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="csss/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

        <div id="page-wrapper">
            <div id="page-inner">
                <!-- /. ROW  -->
                <div class="row">
				
    
                </div>

<center>

<br>
<h2> Pet Vaccines </h2>
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="Vaccination.php">Cat Vaccination</a></li>
    <li class="page-item"><a class="page-link " href="page2.php">Dog Vaccination</a></li>
  </ul>
</nav>
<table border="1" cellpadding="0" cellspacing="0" width="900">
          <tbody>
            <tr>
              <td valign="top" width="123">
                <div align="center">
                  <strong>Cat Vaccine</strong>
                </div>
              </td>
              <td valign="top" width="92">
                <div align="center">
                  <strong>Initial Kitten Vaccination (at or under 16 weeks)</strong>
                </div>
              </td>
              <td valign="top" width="109">
                <div align="center">
                  <strong>Initial Adult Cat Vaccination (over 16 weeks)</strong>
                </div>
              </td>
              <td valign="top" width="116">
                <div align="center">
                  <strong>Booster Recommendation</strong>
                </div>
              </td>
              <td valign="top" width="116">
                <div align="center">
                  <strong>Comments</strong>
                </div>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Rabies</div>
              </td>
              <td valign="top">
                <div align="center">Single dose as early as 8 weeks of age, depending on the product. Revaccinate 1 year later</div>
              </td>
              <td valign="top">
                <p align="center">single dose with yearly booster</p>
              </td>
              <td valign="top">
                <div align="center">Required annually or every 3 years, depending on vaccine used. State regulations may determine the frequency and type of booster required.</div>
              </td>
              <td valign="top">
                <p align="center">
                  <em>Core cat vaccine. </em>Rabies is 100% fatal to cats, with no treatment available. Prevention is key.</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p align="center">Feline Distemper (Panleukopenia)</p>
              </td>
              <td valign="top">
                <div align="center">As early as 6 weeks, then every 3-4 weeks until 16 weeks of age</div>
              </td>
              <td valign="top">
                <p align="center">2 doses, 3-4 weeks apart</p>
              </td>
              <td valign="top">
                <div align="center">1 dose is given a year after the last dose of the initial series, then every 3 years.</div>
              </td>
              <td valign="top">
                <p align="center">
                  <em>Core cat vaccine.</em> Feline distemper is a severe contagious disease that most commonly strikes kittens and can cause death.</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Feline Herpesvirus</div>
              </td>
              <td valign="top">
                <div align="center">As early as 6 weeks, then every 3-4 weeks until 16 weeks of age</div>
              </td>
              <td valign="top">
                <p align="center">2 doses, 3-4 weeks apart</p>
              </td>
              <td valign="top">
                <div align="center">1 dose is given a year after the last dose of the initial series, then every 3 years.</div>
              </td>
              <td valign="top">
                <p align="center">
                  <em>Core cat vaccine</em>. Feline herpesvirus causes feline viral rhinotracheitis (FVR), a very contagious upper respiratory condition.</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Calicivirus</div>
              </td>
              <td valign="top">
                <div align="center">As early as 6 weeks, then every 3-4 weeks until 16 weeks of age</div>
              </td>
              <td valign="top">
                <div align="center">2 doses, 3-4 weeks apart</div>
              </td>
              <td valign="top">
                <div align="center">1 dose is given a year after the last dose of the initial series, then every 3 years.</div>
              </td>
              <td valign="top">
                <div align="center">
                  <em>Core cat vaccine.</em> A very contagious upper respiratory condition that can cause joint pain, oral ulcerations, fever, and anorexia.</div>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Feline Leukemia Virus (FeLV)</div>
              </td>
              <td valign="top">
                <div align="center">As early as 8 weeks, then 3-4 weeks later</div>
              </td>
              <td valign="top">
                <div align="center">2 doses, 3-4 weeks apart</div>
              </td>
              <td valign="top">
                <div align="center">Every kitten should get a booster at one year.&nbsp; If the cat doesn't go outside, no further vaccination is needed unless they are&nbsp;at higher risk. then annually.</div>
              </td>
              <td valign="top">
                <div align="center">
                  <em>Non-core cat vaccine.</em>
                  <br>
			Should test FeLV negative first. Transmitted via cat-to-cat contact. Can cause cancer, immunosuppressant</div>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Bordetella</div>
              </td>
              <td valign="top">
                <div align="center">As early as 4 weeks</div>
              </td>
              <td valign="top">
                <div align="center">2 doses,1 year apart</div>
              </td>
              <td valign="top">
                <div align="center">Annually</div>
              </td>
              <td valign="top">
                <div align="center">
                  <em>Non-core cat vaccine.</em>
                  <br>
			A contagious upper respiratory condition.</div>
              </td>
            </tr>
          </tbody>
        </table>



</center>

</body>
</html>