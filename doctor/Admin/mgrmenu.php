<html>
<head>
	<link rel="stylesheet" href="main.css">
</head>
<body style="background-image:url(fliptry31.png)">
<div class="header">
				<ul>
					<li style="float:left;border-right:none"><a href="mgrmenu.php" class="logo"><img src="../images/logolast1.png" width="30px" height="30px"><strong> Welcome back to work, <?php session_start(); echo $_SESSION['username'];?></a></li>
			<li>
			<form method="post">
			<button type="submit" name="logout" style="float:right">Log Out</button></form></li>
			
				</ul>
</div>
<div class="container" >
	<div class="container" >
	<form method="post">
	  <button type="button" name="change" onclick="window.location.href='changebookingstatus.php'">Change/View Booking Status</button>
	 
	</form>
    </div>
</div>
<?php
if(isset($_POST['check']))
{
		include 'dbconfig.php';
		$name=$_SESSION['user'];
		$sql = "Select * from book where name='$name'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($rows = mysqli_fetch_assoc($result)) 
			{
				echo "Username:".$rows["username"]."Name:".$rows["name"]."Date of Visit:".$rows["dov"]."Town:".$rows["town"]."<br>";
			}
		} 
		else 
		{
			echo "0 results";
		}
}
if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	header( "Refresh:1; url=../cover.php"); 
}
?>
</body>
</html>