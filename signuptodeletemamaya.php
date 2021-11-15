<html>
<head>
<body>
<link rel="stylesheet" href="main.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign Up</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>


<div class="header">
<style type="text/css">

    .bs-example{
    	margin: 20px;
    }


html, 
body {
height: 135%;
}

body {
background-color: #ffffff;
background-repeat: no-repeat;
background-size: cover;
}


label{
	color: #000;
}


</style>
				<ul >
					<li style="float:left;border-right:none"><a href="cover.php" class="logo"><img src="images/l.png" width="65px" height="65px"><strong> Veterinary </strong> Clinic Appointment </a></li>
					<center><li><a href="locateus.php">Locate Us</a></li>
					<li><a href="cover.php">Home</a></li></center>
				</ul>
</div>
<form action="signup.php" method="post">
	<div class="sucontainer" style="background-color: #ffff">
		<center><h1>Sign Up</h1></center>

		<label><b>Name:</b></label><br>
		<input type="text" placeholder="Enter Full Name" name="fname" required><br>
	
		<label><b>Date of Birth:</b></label><br>
		<input type="date" name="dob" required><br><br>
	
		<label><b>Gender</b></label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="gender" value="female"> Female &nbsp;
		<input type="radio" name="gender" value="male"> Male &nbsp;
		<input type="radio" name="gender" value="other"> Other<br><br> &nbsp;
		
		<label><b>Contact No:</b></label><br>
		<input type="number" placeholder="Contact Number" name="contact" required><br>
		
		<label><b>Username:</b></label><br>
		<input type="text" placeholder="Create Username" name="username" required><br>
		
		<label><b>Email:</b></label><br>
		<input type="email" placeholder="Enter Email" name="email" required><br>

		<label><b>Password:</b></label><br>
		<input type="password" placeholder="Enter Password" name="pwd" id="p1" required><br>

		<label><b>Repeat Password:</b></label><br>
		<input type="password" placeholder="Repeat Password" name="pwdr" id="p2" required><br><br>
		&nbsp;<p style="color:black"><input type="checkbox" checked="checked">&nbsp;&nbsp;By creating an account you agree <!-- <br> 	&nbsp;&nbsp;&nbsp;&nbsp; -->
<!--&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; -->
 to our 
		<!--&nbsp; -->
    <a href="#modalScrollableCenter" data-toggle="modal">Terms & Conditions</a>
		<br> <br>
		<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href="cover.php"><a href="cover.php">Cancel</a></button>
			<button type="submit" name="submit" style="float:right">Log In</button>
			
		
		 <!-- <div class="container" style="background-image:url(images/pbb.jpg)">
		</div> -->
		
	
<br>
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    
    <!-- Scrollable Modal HTML -->
    <div id="modalScrollableCenter" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms & Conditions</h5>
                </div>
                <div class="modal-body">
				<h5>GENERAL PROVISIONS</h5>
				<p>In consideration of Appointment.com opening and maintaining this Account, you agree to the terms and conditions contained in this Agreement, as amended from time to time.</p>
                <p>NOTE: There are several aspects of this agreement and the Appointment.com service which are not typical for online services or other scheduling accounts and which you should read carefully before opening an account, including but not limited to:</p>
				<p>1. You consent and agree to the terms and conditions of this agreement by clicking the ‘Submit’ button on our website where indicated during the account sign up process,</p>
				<p>2. Appointments are secure insofar as you keep your login and password secure.</p>
				<p>3. All appointment confirmations, monthly account statements and other documents (including online pages you view, appointment confirmations, bills, and other routine company filings received on your behalf in digital form) that Appointment.com sends to you, may be either online or sent to you solely via e-mail notification. You will indicate the email address, which will receive this information in your Organization Info tab of the Admin site or other appropriate page on our Site.</p>
				<h5>DEFINITIONS. AS USED IN THE AGREEMENT, THE- FOLLOWING TERMS HAVE THE FOLLOWING MEANINGS:</h5>
				<p>a. Sign Up. The online application you prepare and submit to open an Account.
				<br>
				b. Account. An active registered Customer Account.
				<br>
				c. Customer Agreement. The agreement you make with us when you open an Account, as amended from time to time.
				<br>
				d. Password. The secret code that only you know and which together with your User Name is needed to access your Appointment.com Account.
				<br>
				e. Service or the Appointment.com Service. Appointment.com, Inc.’s online scheduling utility and other related services.
				<br>
				f. Site. The Internet website with the domain http://localhost/appointment2/cover.php and all mirror websites.
				<br>
				g. User Name. Your alphanumeric code, which together with the Password is required to access your Account.
				<br>
				h. Consumer. Registered Consumer of the http://localhost/appointment2/cover.php front end OR an customer of an Appointment.com customer who makes appointments online.
				</p>
				<br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK, Got it!</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

function newUser()
{
		include 'dbconfig.php';
		$name=$_POST['fname'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['pwd'];
		$prepeat=$_POST['pwdr'];
		$sql = "INSERT INTO Patient (Name, Gender, DOB,Contact,Email,Username,Password) VALUES ('$name','$gender','$dob','$contact','$email','$username','$password') ";

	if (mysqli_query($conn, $sql)) 
	{
		echo "<h2>Record created successfully!! Redirecting to login page....</h2>";
		header( "Refresh:3; url=cover.php");
	} 
	else
	{
    echo "Error: ";
	}
}
function checkusername()
{
	include 'dbconfig.php';
	$username=$_POST['username'];
	$sql= "SELECT * FROM Patient WHERE username = '$username'";

	$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)!=0)
		{
			echo"<b><br>Username already exists!!";
		}
		else if($_POST['pwd']!=$_POST['pwdr'])
		{
			echo"Passwords dont match";
		}
		else if(isset($_POST['signup']))
		{ 
			newUser();
		}

}
if(isset($_POST['signup']))
{
	if(!empty($_POST['username']) && !empty($_POST['pwd']) &&!empty($_POST['fname']) &&!empty($_POST['dob'])&& !empty($_POST['gender']) &&!empty($_POST['email']) && !empty($_POST['contact']))
			checkusername();
}
?>

</form>
</body>
</html>