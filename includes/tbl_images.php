<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$tbl_images	= 'tbl_images'; 
/* End config */

$con = mysqli_connect($db_host, $db_user, $db_pass, $tbl_images);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>