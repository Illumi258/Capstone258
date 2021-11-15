<html>
<head>
<link rel="stylesheet" href="adminmain.css"> 
</head>
<body>
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
  </li>
  
	
</ul>
</h2>
<center><h1>ADD CLINIC</h1>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

	<script>
function lettersOnly(input) {
    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");
}
</script>


  CID:<input type="number" name="cid" required>
  Name: <input type="text" name="name" onkeyup="lettersOnly(this)" required>
  Address: <input type="text" name="address" required>
  Barangay: <input type="text" name="town" required>
  City: <input type="text" name="city" required>
  Contact no.: <input type="number" name="contact" maxlength="10" minlength="10" required>
  <button type="submit" name="Submit">REGISTER</button>
</form>
</font></b>
</center>
<?php
session_start();
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=alogin.php"); 
	}
function newclinic()
{
	include 'dbconfig.php';
		$cid=$_POST['cid'];
		$name=$_POST['name'];
		$town=$_POST['town'];
		$city=$_POST['city'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		$sql = "INSERT INTO clinic (CID, Name, Address, Town, City, Contact, mid) VALUES ('$cid','$name','$address','$town','$city','$contact','')";

	if (mysqli_query($conn, $sql)) 
	{
		echo "<h2>Record created successfully!! Redirecting to Admin mainpage page....</h2>";
		header( "Refresh:3; url=addclinic.php");

	} 
	else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
function checkcid()
{
	include 'dbconfig.php';
	$cid=$_POST['cid'];
	$sql= "SELECT * FROM clinic WHERE cid = '$cid'";

	$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)!=0)
       {
			echo"<b><br>CID already exists!!";
       }
	else 
		if(isset($_POST['Submit']))
	{ 
		newclinic();
	}

	
}
if(isset($_POST['Submit']))
{
	if(!empty($_POST['cid'])&&!empty($_POST['name'])&&!empty($_POST['address'])&&!empty($_POST['town'])&&!empty($_POST['city']) && !empty($_POST['contact']))
			checkcid();
	else
		echo "EMPTY VALUES NOT ALLOWED";
}

?>

</body>
</html>
