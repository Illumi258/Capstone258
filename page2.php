
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

<center>

<br>
<h2> Pet Vaccines </h2>

<nav>
  <ul class="pagination">
    <li class="page-item "><a class="page-link" href="Vaccination.php">Cat Vaccination</a></li>
    <li class="page-item " aria-current="page">
      <a class="page-link " href="page2.php">Dog Vaccination</a>
    </li>
</nav>

<table border="1" cellpadding="0" cellspacing="0" width="900">
          <tbody>
            <tr>
              <td valign="top" width="123">
                <div align="center">
                  <strong>Dog Vaccine</strong>
                </div>
              </td>
              <td valign="top" width="92">
                <div align="center">
                  <strong>Initial Puppy Vaccination (at or under 16 weeks)</strong>
                </div>
              </td>
              <td valign="top" width="109">
                <div align="center">
                  <strong>Initial Adult Dog Vaccination (over 16 weeks)</strong>
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
                <div align="center">Rabies 1-year</div>
              </td>
              <td valign="top">
                <div align="center">Can be administered in one dose, as early as 3 months of age. States regulate the age at which it is first administered.</div>
              </td>
              <td valign="top">
                <p align="center">Single dose</p>
              </td>
              <td valign="top">
                <div align="center">Annual boosters are required.</div>
              </td>
              <td valign="top">
                <p align="center">
                  <em>Core dog vaccine. </em>Rabies is 100% fatal to dogs, with no treatment available. Prevention is key.</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <p align="center">Rabies 3-year</p>
              </td>
              <td valign="top">
                <div align="center">Can be administered as one dose, as early as 3 months of age. States regulate the age at which it is first administered.</div>
              </td>
              <td valign="top">
                <p align="center">Single dose</p>
              </td>
              <td valign="top">
                <div align="center">A second vaccination is recommended after 1 year, then boosters every 3 years.</div>
              </td>
              <td valign="top">
                <p align="center">
                  <em>Core dog vaccine.</em>
                </p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Distemper</div>
              </td>
              <td valign="top">
                <div align="center">At least 3 doses, given between 6 and 16 weeks of age</div>
              </td>
              <td valign="top">
                <p align="center">2 doses, given 3-4 weeks apart</p>
              </td>
              <td valign="top">
                <div align="center">Puppies need a booster 1 year after completing their initial series, then all dogs need a booster every 3 years or more often.</div>
              </td>
              <td valign="top">
                <p align="center">
                  <em>Core dog vaccine.</em> Caused by an airborne virus, distemper is a severe disease that, among other problems, may cause permanent brain damage.</p>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Parvovirus</div>
              </td>
              <td valign="top">
                <div align="center">At least 3 doses, given between 6 and 16 weeks of age</div>
              </td>
              <td valign="top">
                <div align="center">2 doses, 3-4 weeks apart</div>
              </td>
              <td valign="top">
                <div align="center">Puppies need a booster 1 year after completing the initial series, then all dogs need a booster every 3 years or more often.</div>
              </td>
              <td valign="top">
                <div align="center">
                  <em>Core dog vaccine.</em> Canine "parvo" is contagious, and can cause severe vomiting and bloody diarrhea. Parvo is usually fatal if untreated.</div>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Adenovirus, &nbsp;type 1 (CAV-1, canine hepatitis)</div>
              </td>
              <td valign="top">
                <div align="center">Depends on vaccine. For instance, the intranasal one just has to be boostered once a year</div>
              </td>
              <td valign="top">
                <div align="center">depnds on vaccine</div>
              </td>
              <td valign="top">
                <div align="center">Puppies need a booster 1 year after completing the initial series, then all dogs need a booster every 3 years or more often.</div>
              </td>
              <td valign="top">
                <div align="center">
                  <em>Core dog vaccine.</em> Spread via infected saliva, urine and feces; canine hepatitis can lead to severe liver damage, and death.</div>
              </td>
            </tr>
            <tr>
              <td valign="top">Adenovirus, type 2 (CAV-2, kennel cough)</td>
              <td valign="top">At least 3 doses, between 6 and 16 weeks of age</td>
              <td valign="top">&nbsp;2 doses, 3-4 weeks apart</td>
              <td valign="top">Puppies need a booster 1 year after completing the initial series, then all dogs need a booster every 3 years or more often.</td>
              <td valign="top">
                <em>Core dog vaccine.</em>&nbsp;Spread via coughs and sneezes.</td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Parainfluenza</div>
              </td>
              <td valign="top">
                <div align="center">Administered at 6-8 weeks of age, then every 3-4 weeks until 12-14 weeks old</div>
              </td>
              <td valign="top">
                <div align="center">1 dose</div>
              </td>
              <td valign="top">
                <div align="center">A booster may be necessary after 1 year, depending on manufacturer recommendations; revaccination every 3 years is considered protective.</div>
              </td>
              <td valign="top">
                <div align="center">
                  <em>Non-core dog vaccine.</em> Parainfluenza infection (not the same as canine influenza) results in cough, fever. It may be associated with Bordetella infection.</div>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Bordetella bronchiseptica (kennel cough)</div>
              </td>
              <td valign="top">
                <div align="center">Depends on the vaccine type; one dose is usually needed for protection</div>
              </td>
              <td valign="top">
                <div align="center">1 dose of the intranasal or oral product, or 2 doses of the injected product</div>
                <div>
                  <div>&nbsp;</div>
                </div>
              </td>
              <td valign="top">
                <div align="center">Annual or 6-month boosters may be recommended for dogs in high-risk environments.</div>
              </td>
              <td valign="top">
                <div align="center">
                  <em>Non-core dog vaccine.</em> Not usually a serious condition, although it can be dangerous in young puppies. It is usually seen after activities like boarding or showing.</div>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Lyme disease</div>
              </td>
              <td valign="top">
                <div align="center">1 dose, administered as early as 9 weeks, with a second dose 2-4 weeks later</div>
              </td>
              <td valign="top">
                <div align="center">2 doses, 2-4 weeks apart</div>
              </td>
              <td valign="top">
                <div align="center">May be needed annually, prior to the start of tick season</div>
              </td>
              <td valign="top">
                <div align="center">
                  <em>Non-core dog vaccine.</em> Generally recommended only for dogs with a high risk for exposure to Lyme disease-carrying ticks.</div>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Leptospirosis</div>
              </td>
              <td valign="top">
                <div align="center">First dose as early as 8 weeks, with a second dose 2-4 weeks later</div>
              </td>
              <td valign="top">
                <div align="center">2 doses, 2-4 weeks apart</div>
              </td>
              <td valign="top">
                <div align="center">At least once yearly for dogs in high-risk areas</div>
              </td>
              <td valign="top">
                <div align="center">
                  <em>Non-core dog vaccine.</em> Vaccination is generally restricted to established risk areas. Exposure to rodents and standing water can lead to a leptospirosis infection.</div>
              </td>
            </tr>
            <tr>
              <td valign="top">
                <div align="center">Canine influenza</div>
              </td>
              <td valign="top">
                <div align="center">First dose as early as 6-8 weeks; second dose 2-4 weeks later</div>
              </td>
              <td valign="top">
                <div align="center">2 doses, 2-4 weeks apart</div>
              </td>
              <td valign="top">
                <div align="center">Yearly</div>
              </td>
              <td valign="top">
                <div align="center">
                  <em>Non-core dog vaccine.</em>
                  <br>
			Similar to bordetella.</div>
              </td>
            </tr>
          </tbody>
        </table>



</center>


</body>
</html>