<html>
<head>
<script src="jquerypart.js" type="text/javascript"></script>
<link rel="stylesheet" href="adminmain.css"> 
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "getclinic.php",
	data:'city='+val,
	success: function(data){
		$("#clinic-list").html(data);
	}
	});
}
function getDoctorRegion(val) {
	$.ajax({
	type: "GET",
	url: "getdoctorregion.php",
	data:'city='+val,
	success: function(data){
		$("#doctor-list").html(data);
	}
	});
}

</script>
</head>

<body style="background-image:url(try3.jpg);
background-repeat:no-repeat;
background-position:center; "
>
<ul style="background-image:url(pbb.jpg)">
<li class="dropdownn" style="background-image:url(pbb.jpg)"><font color="yellow" size="6"><a href="mainpage.php" class="logo"><img src="admin.png" width="35px" height="35px">Welcome, Administrator</font></li>
<li style="float:right;border-right:none">  
	<form method="post" action="mainpage.php">	
	<button type="submit" class="cancelbtn" name="logout" style="float:right;font-size:22px; background-color: #2B4F76"><b>Log Out</b></button>
	</form>
  </li>
<br>
<h2>
  <li class="dropdown">    
   <a href="javascript:void(0)" class="dropbtn">Veterinarian</a>
    <div class="dropdown-content">
      <a href="adddoctor.php">Add Veterinarian</a>
      <a href="deletedoctor.php">Delete Veterinarian</a>
      <a href="showdoctor.php">Show Veterinarians</a>
	  <a href="showdoctorschedule.php">Show Veterinarian Schedule</a>
    </div>
  </li>
  
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Clinic</a>
    <div class="dropdown-content">
      <a href="addclinic.php">Add Clinic</a>
      <a href="deleteclinic.php">Delete Clinic</a>
      <a href="adddoctorclinic.php">Assign Veterinarian to Clinic</a>
	  <a href="addmanagerclinic.php">Assign Manager to Clinic</a>
	  <a href="deletedoctorclinic.php">Delete Veterinarian from Clinic</a>
	  <a href="deletemanagerclinic.php">Delete Manager from Clinic</a>
	  <a href="showclinic.php">Show Clinic</a>
    </div>
  </li>
  <li class="dropdown">    
  <a href="javascript:void(0)" class="dropbtn">Manager</a>
    <div class="dropdown-content">
      <a href="addmanager.php">Add Manager</a>
      <a href="deletemanager.php">Delete Manager</a>
	  <a href="showmanager.php">Show Manager</a>
    </div>
  
	
</ul>
</h2>
<center><h1>ASSIGN VETERINARIAN TO A CLINIC</h1><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<label style="font-size:20px" >City:</label>
		<select name="city" id="city-list" class="demoInputBox"  onChange="getState(this.value);getDoctorRegion(this.value);">
		<option value="">Select City</option>
		<?php
		include 'dbconfig.php';
		$sql1="SELECT distinct City FROM clinic";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["City"]; ?>"><?php echo $rs["City"]; ?></option>
		<?php
		}
		?>
		</select>
	
		<label style="font-size:20px" >Clinic:</label>
		<select id="clinic-list" name="clinic">
		<option value="">Select Clinic</option>
		</select>
		
		<label style="font-size:20px" >Veterinarian:</label>
		<select name="doctor" id="doctor-list">
		<option value="">Select Veterinarian</option>
		</select>
		
		<label style="font-size:20px" >
		Available Days<br>
		<table>
		<tr><td>Monday:</td><td><input type="checkbox" value="Monday" name="daylist[]"/></td></tr>
		<tr><td>Tuesday:</td><td><input type="checkbox" value="Tuesday" name="daylist[]"/></td></tr>
		<tr><td>Wednesday:</td><td><input type="checkbox" value="Wednesday" name="daylist[]"/></td></tr>
		<tr><td>Thursday:</td><td><input type="checkbox" value="Thursday" name="daylist[]"/></td></tr>
		<tr><td>Friday:</td><td><input type="checkbox" value="Friday" name="daylist[]"/></td></tr>
		<tr><td>Saturday:</td><td><input type="checkbox" value="Saturday" name="daylist[]"/></td></tr>
		</table>
	<div style="background-image:url(try3.jpg)
"
		Availability(24 hour Format):<br>
		From:<input type="time" name="starttime"><br>
		To:<input type="time" name="endtime"> &nbsp &nbsp &nbsp
		
		</label>
		<button name="Submit" type="submit">Submit</button>
	</form>
</div>
<?php
session_start();
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=alogin.php"); 
	}
if(isset($_POST['Submit']))
{
		include 'dbconfig.php';
		$cid=$_POST['clinic'];
		$did=$_POST['doctor'];
		$starttime=$_POST['starttime'];
		$endtime=$_POST['endtime'];
		
		foreach($_POST['daylist'] as $daylist)
		{
				$sql = "INSERT INTO doctor_availability (CID, DID, Day, Starttime, Endtime) VALUES ('$cid','$did','$daylist','$starttime','$endtime')";
				if (mysqli_query($conn, $sql)) 
				{
					echo "<h2>Record created successfully( CID=$cid DID=$did Day=$daylist )!!</h2>";
				} 
				else
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
		}
}

?>

</body>
</html>