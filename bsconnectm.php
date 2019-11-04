<?php
$servername = "localhost";
$username = "root";
$password = "admin@2019";
$db="mcmonitoring2";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	echo "Connection Failed"."</br>";
} 
echo "Connected successfully"."</br>";
?>