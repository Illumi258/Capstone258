<!DOCTYPE html>
<html>
<body style="background-image:url(try3.jpg)">
<link rel="stylesheet" href="main.css">
	<form action="alogin.php" method="post">
	<div class="header">
				<ul>
					<li style="float:left;border-right:none"><a href="cover.php" class="logo"><img src="admin/logolast1.png" width="35px" height="35px"><Administrator Login</a></li>
					<li><INPUT TYPE="button" VALUE="Home" style="float:right;background-color:#2B4F76" onClick="history.go(-1);"></li>
				</ul>
	</div>
	<div class="sucontainer" style="background-image:url(images/pbb.jpg)>
		<label><b>Username:</b></label><br>
		<input type="text" placeholder="Enter Username" name="uname" required><br>
	
		<label><b>Password:</b></label><br>
		<input type="password" placeholder="Enter Password" name="pass" required><br><br>
		
		<div class="container" style="background-color:grey">
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
		header( "Refresh:3; url=mainpage.php");
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