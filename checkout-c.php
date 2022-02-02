<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doco";

// Create connection
$conn2 = mysqli_connect($servername,
	$username, $password, $dbname);

// Check connection
if ($conn2) {
	// die("Connection failed: "
	// 	. $conn->connect_error);
	// echo "Connected";
}

else
{
	echo "Connection Failed".mysqli_connect_error();
}
