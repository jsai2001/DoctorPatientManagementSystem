<?php

$host="127.0.0.1";
$port="";
$socket="";
$user="root";
$password="";
$dbname="doctorpatient";

$conn = new mysqli($host, $user, $password, $dbname)
	or die ('Connection Failed! ' . mysqli_connect_error());
