<?php
$host="db";
$port="";
$socket="";
$user="root";
$password="password";
$dbname="test";
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli($host, $user,"", $dbname)
		or die ('Could not connect to the database server' . mysqli_connect_error());
		}
?>
