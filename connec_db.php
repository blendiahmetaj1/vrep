<?php
//Description: Perform conection to database.

//connect to database
$servername = "localhost:3306";
$username = "admin";
$password = "Lazdrajka1.";
$database = "admin_a";

// Create connection
$conn = connectdb($servername, $username, $password, $database);
function connectdb($servername, $username, $password, $database) {
	$conn = mysqli_connect($servername, $username, $password, $database);
	return $conn;
}
$conn->set_charset("utf8");
?>
