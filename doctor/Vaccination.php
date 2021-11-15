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


</style>
	   

            <!-- Navigation -->
                <!-- Brand and toggle get grouped for better mobile display -->

                <!-- Top Menu Items -->

			<Body>   
<header>  
<nav>  
<ul>  
					<li ><a href="ulogin.php"><img src="images/l.png" width="65px" height="65px">
					&nbsp;<strong>Welcome, <?php session_start(); echo $_SESSION['user'];?></a></li> 
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
						<li><a href="book.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Book Appointment</span></a></li>
                        <li><a href="viewpatientappointments.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Show Appointments</span></a></li>
                        <li><a href="cancelbookingpatient.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cancel Booking</span></a></li>
						<li><a href="ulocateus.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Veterinarians</span></a></li>
						<li  class="active"><a href="Vaccination.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Vaccination Pet</span></a></li>
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
<br>
<br>

<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="Vaccination.php">Cat Vaccination</a></li>
    <li class="page-item"><a class="page-link " href="page2.php">Dog Vaccination</a></li>
  </ul>
</nav>


<table border="1" cellpadding="0" cellspacing="0" width="450">
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