<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doco";

// Create connection
$conn = mysqli_connect($servername,
	$username, $password, $dbname);

// Check connection
if ($conn) {
	// die("Connection failed: "
	// 	. $conn->connect_error);
	// echo "Connected";
    
}

else
{
	echo "Connection Failed".mysqli_connect_error();
}

// $sqlquery = "INSERT INTO table VALUES
// 	('John', 'Doe', 'john@example.com')"

// if ($conn->query($sql) === TRUE) {
// 	echo "record inserted successfully";
// } else {
// 	echo "Error: " . $sql . "<br>" . $conn->error;
// }