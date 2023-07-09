<?php
$connect = mysqli_connect(
	'db',
	'root',
	'password',
	'doctorpatient'
);
$table_name = 'doctor';
$query = "SELECT * FROM $table_name";
$response = mysqli_query($connect, $query);
echo "<strong>$table_name</strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['name']."</p>";
    echo "<p>".$i['mail']."</p>";
    echo "<p>".$i['dob']."</p>";
    echo "<hr>";
}
?>
