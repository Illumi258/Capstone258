        <title>Veterinarians  </title>

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



<?php include "dbconfig.php"; ?>
<script>

function getDoctorday(val) {
	$.ajax({
	type: "POST",
	url: "getdoctordaybooking.php",
	data:'cid='+val,
	success: function(data){
		$("#doctor-list").html(data);
	}
	});
}
</script>
<body>   
<header>  
<nav>  
<ul>  
					<li > <a href="ulogin.php" ><img src="images/l.png" width="65px" height="65px">
					&nbsp;<strong>Veterinarians </a></li> </ul> 
					<?php session_start(); ?> 
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
						<li class="active"><a href="ulocateus.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Veterinarians</span></a></li>
                        <li ><a href="Vaccination.php"><i class="fa fa-file" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Vaccination Pet</span></a></li>
						<li><a href="cover.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Log Out</span></a></li>
                    </ul>
                </div>
				
            </div>


	<center><br>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Veterinarians</h2>
</center>
<br>

<div class="container1" class="modal">
	<span class="container">
	<form action="ulocateus.php" method="post">
		<ul>			
			<label><b>Search Doctor</b></label>
			<select type="text" name="doctorname" style="width:40%;height:35px;border-radius:9px">	
			<option value="">Select Doctor</option> 
			<option>Margi Carpio</option>
			<option>Nielsen Donato</option>
			<option>George Beran</option>
			<option>Glen Noble</option>	
			</select>
			<br>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<button type="submit" style="position:center" name="subd" value="Submit">Submit</button>
		</ul>
		<br>
		
		
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>
		
	
		
<?php
if(isset($_POST['subd']))
{
		include 'dbconfig.php';
		if(!empty($_POST['doctorname']))
		{
			$doctor=$_POST['doctorname'];
			$sql1 = "Select * from Doctor where UPPER(name) like UPPER('%".$doctor."%')";
			$result1=mysqli_query($conn, $sql1);  
			while($row1 = mysqli_fetch_array($result1))
			{
			echo "<hr>";
			echo "<label><h3><b>  Dr. ".$row1['name']."</h3><br>
					<b>Gender: </b>".$row1['gender']."<br>
					<b>Specialization: </b>".$row1['specialization']."<br></b>"."
					</label><br>";
					
			$sql2="select * from doctor_availability where did=".$row1["did"];
			
			//$sql2 = "Select name,address,contact from clinic where cid in (select cid from doctor_availability where did in(Select did from doctor where did=".$row1['did']."));";
			$result2=mysqli_query($conn, $sql2);  
			while($row2 = mysqli_fetch_array($result2))
			{
			//echo "<b>Clinic Name: </b>".$row2['name']."</b><br><b>Address:<b>".$row2['address']."<br><b>Contact:<b>".$row2['contact'];
			echo "<label><br><b></b>".$row2["day"]."</b><br>(</b>".$row2["starttime"]." to ".$row2["endtime"].")</label><br>";
			$sql3="Select * from clinic where cid = ".$row2["cid"];
			$result3 = mysqli_query($conn , $sql3);
			while($row3 = mysqli_fetch_array($result3))
			{
				//echo"<label><br><b>Clinic Name: </b>".$row3["name"]." Town: </b>".$row3["town"]." City: </b>".$row3["city"]."</label>";
			}
			
			}
			}
		}
		else
		{
				echo"Enter a valid name.";
		}
}
if(isset($_POST['submit']))
{
		include 'dbconfig.php';
		$cid=$_POST['Clinic'];
		$sql1 = "Select * from Clinic where cid=$cid";
		$result1=mysqli_query($conn, $sql1);  
		$row1 = mysqli_fetch_array($result1);
		$sql2 = "Select name,gender,specialization,contact from doctor where did in (select did from doctor_availability where cid=$cid);";
		$result2=mysqli_query($conn, $sql2);  
		$row2 = mysqli_fetch_array($result2);
		echo "<label><b>Clinic Name:".$row1['name']."</b><br><b>Address:<b>".$row1['address']."<br><b>Contact:<b>".$row1['contact']."<br><b>Doctor Name:<b>".$row2['name']."<br><b>Specialization:<b>".$row2['specialization']."<br><b>Doctor Contact:<b>".$row2['contact']."</label>"; 
}
?>
	</form>
</body>
</html>