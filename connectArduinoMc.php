<?php
$servername = "db";
$username = "admin";
$password = "admin@2019";
$db="mcmonitoring";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully"."</br>";
?>
