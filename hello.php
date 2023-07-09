<?php
$connect = mysqli_connect(
	'192.168.0.144',
	'root',
	'',
	'doctorpatient',
	'8081'
);
$table_name = 'doctor';
$query = 'SELECT * FROM $table_name';
$response = mysqli_query($connect, $query);
echo "<strong>$table_name</strong>";
?>
/*
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>
*/