<?php
$mysqli = NEW MySQLi('localhost','root','','wt_database');

$resultSet = $mysqli->query("SELECT dept_name FROM departments");
?>

<select name ="departments">
<?php
while($rows = $resultSet->fetch_assoc())
{
	$dept_name = $rows['dept_name'];
	echo "<option value='$dept_name'>$dept_name</option>";
	}
	?>
</select>