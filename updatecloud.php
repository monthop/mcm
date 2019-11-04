<?php

include("connectSuratcloud.php");

$temp = $humidity = $ovenID ="";
$relayStatus = $hrelayStatus = "";
$setTemp = $setHumi = $system = $mode = "";
$dayNumber = "";
/*
//show all parameters
echo "Data to mySQL","<br/>";
foreach($_POST as $key => $value){
	echo $key, ' => ', $value, "<br/>";
}
//show value*/

$ovenID = $_POST['ovenID'];
$temp = $_POST['temp'];
$humidity = $_POST['humidity'];
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
$sql = "UPDATE suratrubber.updatedata SET time_column = CURRENT_TIMESTAMP,temp = $temp, dayNumber = $dayNumber, humidity = $humidity, setTemp = $setTemp, setHumi = $setHumi, relayStatus = $trelay, hrelayStatus = $hrelay, system = $system, mode = $mode  WHERE updatedata.ovenID = 1;";

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
/*
$sql = "INSERT INTO productiondata1  (ID,time_column,ovenID,system,mode,dayNumber,temp,humidity,setTemp,setHumi,relayStatus,hrelayStatus)
VALUES (NULL,CURRENT_TIMESTAMP,$ovenID,$system,$mode,$dayNumber,$temp,$humidity,$setTemp,$setHumi,$trelay,$hrelay);";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/

$conn->close();
?> 

