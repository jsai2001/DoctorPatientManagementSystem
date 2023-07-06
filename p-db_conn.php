<?php

$host="127.0.0.1";
$port="";
$socket="";
$user="root";
$password="";
$dbname="doctorpatient";

$conn = new mysqli($host, $user, $password, $dbname)
	or die ('Could not connect to the database server' . mysqli_connect_error());
