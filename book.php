        <title>Booking Appointments  </title>
			
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<?php include "dbconfig.php"; ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="Dashboard.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	



<html>
<head>
<style type="text/css">

body   
{  
height: 125vh;  
margin-top: 25px;  
padding: 60px;  
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
color: white; 
font-size: 25px; 
}  
header li a {  
color: white;  
text-decoration: none;  
}  


label{
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


</style>


<script>
function getTown(val) {
	$.ajax({
	type: "POST",
	url: "get_town.php",
	data:'countryid='+val,
	success: function(data){
		$("#town-list").html(data);
	}
	});
}
function getClinic(val) {
	$.ajax({
	type: "POST",
	url: "getclinic.php",
	data:'townid='+val,
	success: function(data){
		$("#clinic-list").html(data);
	}
	});
}
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
function getSpecialization(val) {
	$.ajax({
	type: "POST",
	url: "getspecialization.php",
	data:'cid='+val,
	success: function(data){
		$("#specialization-list").html(data);
	}
	});
}
function getConsultedAnimal(val) {
	$.ajax({
	type: "POST",
	url: "getConsultedAnimal.php",
	data:'cid='+val,
	success: function(data){
		$("#getConsultedAnimal-list").html(data);
	}
	});
}



function getDay(val) {
	var cidval=document.getElementById("clinic-list").value;
	var didval=document.getElementById("doctor-list").value;
	$.ajax({
	type: "POST",
	url: "getDay.php",
	data:'date='+val+'&cidval='+cidval+'&didval='+didval,
	success: function(data){
		$("#datestatus").html(data);
	}
	});
}

</script>
		<Body>   
<header>  
<nav>  
<ul>  
					<li ><a href="ulogin.php"><img src="images/l.png" width="65px" height="65px">
				&nbsp;<strong>Book an Appointment</a></li>
<?php session_start();?>				
</ul>

</nav>
  
</header>  
<br>

<body class="home">
				    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li ><a href="ulogin.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
						<li class="active"><a href="book.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Book Appointment</span></a></li>
                        <li><a href="viewpatientappointments.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Show Appointments</span></a></li>
                        <li><a href="cancelbookingpatient.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cancel Booking</span></a></li>

						<li><a href="ulocateus.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Veterinarians</span></a></li>
						<li ><a href="Vaccination.php"><i class="fa fa-file" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Vaccination Pet</span></a></li>
                        <li><a href="cover.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Log Out</span></a></li>
                    </ul>
                </div>
				

		
            </div>
<center>
<br>

<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Book an Appointment</h2>
</center>


	<div class="container1">
	<span class="container">
	
	

	
	<form action="book.php"  method="post">
		
		<label><b>Name:</b></label><br>
		<input type="text" placeholder="Enter Full name of Owner" name="fname" required style="width:40%;height:35px;border-radius:9px"><br>
		<br>
		<label><b>Gender:</b></label><br>
		<input type="radio" name="gender" value="female" > Female 
		&nbsp;&nbsp;<input type="radio" name="gender" value="male"> Male
		&nbsp;&nbsp;<input type="radio" name="gender" value="other"> Other<br>
		<br>
		<label>City:</label><br>
		<select name="city" id="city-list" class="demoInputBox"  onChange="getTown(this.value);" style="width:40%;height:35px;border-radius:9px">
		<br>
		<option value="">Select City</option>
		<?php
		$sql1="SELECT distinct(city) FROM clinic";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["city"]; ?>"><?php echo $rs["city"]; ?></option>
		<?php
		}
		?>
		</select>
        <br><br>
	
		<label >Town:</label><br>
		<select id="town-list" name="Town" onChange="getClinic(this.value);" style="width:40%;height:35px;border-radius:9px">
		<option value="">Select Town</option>
		</select>
		<br><br>
		
		<label >Clinic:</label><br>
		<select id="clinic-list" name="Clinic" onChange="getDoctorday(this.value);" style="width:40%;height:35px;border-radius:9px">
		<option value="">Select Clinic</option>
		</select><br><br>
		
		<label>Specialization:</label><br>
		<select id="specialization-list" name="specialization" onChange="getDay(this.value);" style="width:40%;height:35px;border-radius:9px">
		<option value="">Select Specialization</option>
		<?php
		$sql2="SELECT specialization FROM doctor";
         $results=$conn->query($sql2); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["specialization"]; ?>"><?php echo $rs["specialization"]; ?></option>
		<?php
		}
		?>
		</select><br><br>

		<label>Doctor:</label><br>
		<select id="doctor-list" name="Doctor" onChange="getDay(this.value);" style="width:40%;height:35px;border-radius:9px">
		<option value="">Select Doctor</option>
		</select><br>
		<br>
		
		<label>Kind of Pet:</label><br>
		<select id="ConsultedAnimal-list" name="ConsultedAnimal" onChange="getDay(this.value);" style="width:40%;height:35px;border-radius:9px">
		<option value="">Select Pet</option>
		<option value="Cat">Cat</option>
		  <option value="Dog">Dog</option>

		</select>
				
				
		<!--<label>Specialization:</label><br>
		<select id="specialization-list" name="specialization" onChange="getSpecialization(this.value);" style="width:40%;height:35px;border-radius:9px">
		<option value="">Select Specialization</option>
		</select><br> -->
		
		<br>
		<br>
		<label><b>Date of Visit:</b></label><br>
		<input type="date" name="dov" onChange="getDay(this.value);"style="width:40%;height:35px;border-radius:9px"min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+7 day'));?>" required><br><br>
		<div id="datestatus"> </div>
		
		<span class="submitcontainer">
			<button type="submit" style="float:centered" name="submit" value="Submit">Submit</button>
		</span>
		
	
		
		
		
		
<?php date_default_timezone_set('Asia/Manila');
if(isset($_POST['submit']))
{
		
		include 'dbconfig.php';
		$fname=$_POST['fname'];
		$gender=$_POST['gender'];
		$username=$_SESSION['username'];
		$cid=$_POST['Clinic'];
		$did=$_POST['Doctor'];
		$pets=$_POST['ConsultedAnimal'];
		$specializ=$_POST['specialization'];
		$dov=$_POST['dov'];
		$Payment="1800";
		$InjectedVaccine="Wait for Vaccine";
		$status="Booking Registered.Wait for the update";
		$timestamp=date('Y-m-d H:i:s');
		$sql = "INSERT INTO book (Username,Fname,Gender,CID,DID,DOV,Timestamp,ConsultedAnimal,specialization,Status, InjectedVaccine,Payment) VALUES ('$username','$fname','$gender','$cid','$did','$dov','$timestamp','$pets','$specializ','$status', '$InjectedVaccine','$Payment') ";
		if(!empty($_POST['fname'])&&!empty($_POST['gender'])&&!empty($_SESSION['username'])&&!empty($_POST['Clinic'])&&!empty($_POST['Doctor']) && !empty($_POST['ConsultedAnimal']) && !empty($_POST['specialization']) && !empty($_POST['dov']))
		{
			$checkday = strtotime($dov);
			$compareday = date("l", $checkday);
			$flag=0;
			require_once("dbconfig.php");
			$query ="SELECT * FROM doctor_availability WHERE DID = '" .$did. "' AND CID='".$cid."'";
			$results = $conn->query($query);
			while($rs=$results->fetch_assoc())
			{
				if($rs["day"]==$compareday)
				{
					$flag++;
					break;
				}
			}
			if($flag==0)
			{
				echo "<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;
						Select another date as Doctor is unavailable on ".$compareday."</h2>";
			}
			else
			{
				if (mysqli_query($conn, $sql)) 
				{
		
						echo "<h3><left><br><right>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;
						Booking successful.</h3>";

				} 
				else
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		}
		else
		{
			echo "Please your details properly.";
		}
}
?>
	</form>
	
	
	
</body>
</html>