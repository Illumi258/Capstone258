<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="adminmain.css"> 
<style>
table{
   
	 width: 90%;
	height: 20%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 5px;
	font-size: 18px;
}

th{
border: 4px solid black;
	background-color: #2B4F76;
	 opacity:0.5;
    color: white;
	text-align: left;
}
tr,td{
	border: 4px solid black;
	background-color: white;
    color: black;
}
</style>

</head>
<body style="background-image:url(try3.jpg)">
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
      <a href="adddoctorclinic.php">Assign Doctor to Clinic</a>
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
<center><h1>SHOW VETERINARIANS</h1>
<?php
session_start();
$con = mysqli_connect('localhost','root','','wt_database');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM Doctor order by DID ASC";
$result = mysqli_query($con,$sql);
echo "<br><h2>TOTAL VETERINARIANS IN DATABASE = [<b>".mysqli_num_rows($result)."]</b></h2><br>";
echo "<table>
<tr>
<th>DID</th>
<th>Doctor Name</th>
<th>DOB</th>
<th>Experience</th>
<th>Specialization</th>
<th>Address</th>
<th>Contact</th>
<th>Region</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	echo "<td>" . $row['did'] . "</td>";
    echo "<td>Dr. " . $row['name'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['experience'] . "</td>";
    echo "<td>" . $row['specialization'] . "</td>";
	echo "<td>" . $row['address'] . "</td>";
	echo "<td>" . $row['contact'] . "</td>";
	echo "<td>" . $row['region'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=alogin.php"); 
	}
?>
</body>
</html>