<!DOCTYPE html>
<html>
<body style="background-image:url(images/try3.jpg)">
<link rel="stylesheet" href="main.css">
	<form action="alogin.php" method="post">
	<div class="header">
				<ul>
					<li style="float:left;border-right:none"><a href="cover.php" class="logo"><img src="images/logolast1.png" width="35px" height="35px"><strong> Administrator</strong></li>
					<li><a href="cover.php">Home</a></li>
				</ul>
	</div>
	<div class="sucontainer"style="background-image:url(images/pbb.jpg)">
						<br>
		<center><h1>Administrator Login</h1></center>

		<label><b>Username:</b></label><br>
		<input type="text" placeholder="Enter Username" name="uname" required><br>
	
		<label><b>Password:</b></label><br>
		<input type="password" placeholder="Enter Password" name="pass" required><br><br>
		
		<div class="container" style="background-image:url(images/pbb.jpg)">
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
</body>
</html>