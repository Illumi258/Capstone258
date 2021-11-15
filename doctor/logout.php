<?php
session_start();

if(!isset($_SESSION['doctorSession']))
{
 header("Location: doctordashboard.php");
}
else if(isset($_SESSION['doctorSession'])!="")
{
 header("Location: ../cover.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['doctorSession']);
 header("Location: ../cover.php");
 
}

?>
<?php
$con = mysqli_connect("localhost","root","","wt_database");

if(isset($_POST['logout']))
{
	

    $dob = date('Y-m-d', strtotime($_POST['logoutdatetime']));

    $query = "INSERT INTO logout (id,  logoutdatetime) VALUE ('DATETIME: Auto CURDATE()', CURTIME() )";
    $query_run = mysqli_query($con, $query);

}
?>