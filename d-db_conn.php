<?php

$host="192.168.0.144";
$port="";
$socket="";
$user="root";
$password="";
$dbname="doctorpatient";

$conn = new mysqli($host, $user, $password, $dbname)
	or die ('Connection Failed! ' . mysqli_connect_error());
