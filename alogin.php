<!DOCTYPE html>
<html>
<body style="background-color:#ffff">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<title>Administrator Login</title>
   <link rel="stylesheet" href="main.css">
	<form action="alogin.php" method="post">
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
				<ul>
					<li style="float:left;border-right:none"><a href="cover.php" class="logo"><img src="images/l.png" width="65px" height="65px"><strong> Veterinary </strong> Clinic Appointment </a></li>
					<li ><a href="cover.php" class="logo" width="65px" height="65px">Home</a></li>
				</ul>
	</div>
	<div class="sucontainer"style="background-color:#ffff">
						<br>
		<center><h1>Administrator Login</h1></center>
<br><br>
		<label><b>Username:</b></label><br>
		<input type="text" placeholder="Enter Username" name="uname" required><br>
	
		<label><b>Password:</b></label><br>
		<input type="password" placeholder="Enter Password" name="pass" required><br><br>
		
		<div class="container" style="background--color:#ffff">
		<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href="cover.php"><a href="cover.php">Cancel</a></button>
			<button type="submit" name="submit" style="float:right">Log In</button>
		</div>
<?php 
function SignIn() 
{ 
session_start();
 {  
	if($_POST['uname']=='admin' && $_POST['pass']=='admin') 
	{ 
		$_SESSION['userName'] = 'admin'; 
		echo "Logging you in..";
		header( "Refresh:3; url=admin/mainpage.php");
	} 
	else { 
		echo "Wrong Credentials!"; 
		} 
	}
	} 
	if(isset($_POST['submit'])) 
	{ 
		SignIn(); 
	} 
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>