<?php
// (A) DATABASE CONFIG - CHANGE TO YOUR OWN!
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'dbcnp'; 

// (B) CONNECT TO DATABASE

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
// (C) SEARCH
$stmt = $con->prepare("SELECT * FROM `tblcnp` WHERE `name` LIKE ? OR `prize` LIKE ?");
$stmt->$con(["%".$_POST['search']."%", "%".$_POST['search']."%"]);
$results = $stmt->fetchAll();
if (isset($_POST['form'])) { echo json_encode($results); }