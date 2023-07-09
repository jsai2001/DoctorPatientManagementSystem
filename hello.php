<?php
$dsn = 'mysql:host=localhost;dbname=db;charset=utf8';
$username = 'root';
$password = '';

try {
    $connection = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// echo "Hello World";
// $connect = mysqli_connect(
// 	'db',
// 	'root',
// 	'',
// 	'doctorpatient'
// );
// $table_name = 'doctor';
// $query = 'SELECT * FROM $table_name';
// $response = mysqli_query($connect, $query);
// echo "<strong>$table_name</strong>";
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