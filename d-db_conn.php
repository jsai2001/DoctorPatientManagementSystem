<?php

$host="db";
$port="";
$socket="";
$user="root";
$password="password";
$dbname="doctorpatient";

$conn = new mysqli($host, $user, $password, $dbname)
	or die ('Connection Failed! ' . mysqli_connect_error());
