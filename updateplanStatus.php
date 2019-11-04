<?php
	include("connectArduinoMc.php");

	$ID = $_POST["ID"];
	$Status = "2";
	
	
	$IDStr = "'".$ID."'";
	$StatusStr = "'".$Status."'";
	
	$sql = "UPDATE mcmonitoring.plandata SET Status = $Status,RunDateTime = CURRENT_TIMESTAMP WHERE ID= $ID;";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>