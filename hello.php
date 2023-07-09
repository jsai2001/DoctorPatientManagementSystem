<?php
echo "Hello World";
$connect = mysqli_connect(
	'db',
	'root',
	'',
	'doctorpatient'
);
$table_name = 'doctor';
$query = 'SELECT * FROM $table_name';
$response = mysqli_query($connect, $query);
echo "<strong>$table_name</strong>";
?>
