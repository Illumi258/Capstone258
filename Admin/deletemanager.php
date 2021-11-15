<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="adminmain.css"> 
</head>
<body background= "try3.jpg">
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
<h1>
<center><h1>DELETE MANAGER</h1><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Enter Manager ID:<center><input type="number" name="mid"></center>
			<button type="submit" name="Submit1">Delete by MID</button>
			<br>---------OR---------<br>
Select Name:<br><?php
				require_once('dbconfig.php');
				$manager_result = $conn->query('select * from manager order by MID ASC');
				?>
				<center>
				<select name="managername">
				<option value="">---Select Name---</option>
				<?php
				if ($manager_result->num_rows > 0) {
				while($row = $manager_result->fetch_assoc()) {
				?>
				<option value="<?php echo $row["MID"]; ?>"><?php echo "( MID = ".$row["mid"].") ".$row["name"]; ?></option>
				<?php
					}
					}
				?>
				</select></center>
				
				<button type="submit" name="Submit2">Delete by Name</button>
</form>			
<?php
session_start();
include 'dbconfig.php';
if(isset($_POST['Submit1']))
{
	$mid=$_POST['mid'];
	$sql = "DELETE FROM manager WHERE MID= $mid ";
	$sql1="update clinic set MID=0 where MID=$mid";
	if (mysqli_query($conn, $sql))
		{
		echo "Record deleted successfully.";
		header( "Refresh:3; url=showdoctor.php");
		}
		else{
			echo "Please fill up the fields above ";
			
		}
		
		if (mysqli_query($conn, $sql1)) 
				{
							echo "<h2>........</h2>";
							echo "Please wait...Refreshing...";
							header( "Refresh:2; url=deletemanager.php");

				} 
				else
				{
					echo "Manager ID does not exist" ;
					}
				
}
if(isset($_POST['Submit2']))
{
	$mid=$_POST['managername'];
	$sql = "DELETE FROM manager WHERE mid = $mid ";
	$sql1="update clinic set MID=0 where MID=$mid";
		if (mysqli_query($conn, $sql))
		{
		echo "<h5>........</h5>";
							echo "Please wait. Refreshing...";
							header( "Refresh:2; url=deletemanager.php");

		}
	else
		{
			echo "Manager deleted successfully.";
		header( "Refresh:3; url=showmanager.php");
			
		}
		
	if (mysqli_query($conn, $sql1))
		{
		echo "Please fill up the fields above";
		header( "Refresh:3; url=showmanager.php");
		}
	
}	
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=alogin.php"); 
	}
?>			
</body>
</html>