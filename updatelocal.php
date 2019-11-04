<?php

include("connectSurat.php");

$temp = $humidity = " ";
$dayNumber = $ovenID = $relayStatus = $hrelayStatus = $setHumi = $setTemp = "";
$system = $mode = "";

//show all parameters
echo "Data to mySQL","<br/>";
foreach($_POST as $key => $value){
	echo $key, ' => ', $value, "<br/>";
}
//show value
$temp = $_POST['temp'];
$humidity = $_POST['humidity'];
$ovenID = $_POST['ovenID'];
$trelay = $_POST['relayStatus'];
$hrelay = $_POST['hrelayStatus'];
$setTemp = $_POST['setTemp'];
$setHumi = $_POST['setHumi'];
$system = $_POST{'system'};
$mode = $_POST{'mode'};
$dayNumber = $_POST{'dayNumber'};

$tempStr = "'".$temp."'";
$humidityStr = "'".$humidity."'";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE updatedata SET time_column = CURRENT_TIMESTAMP,temp = $temp, humidity = $humidity, ovenID = $ovenID, setTemp = $setTemp, setHumi = $setHumi, relayStatus = $trelay, hrelayStatus = $hrelay, system = $system, mode = $mode, dayNumber = $dayNumber  WHERE updatedata.ID = 1;";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

