<?php
	include("connectArduinoMc.php");

	$ID = $_POST["ID"];
	$Status = "4";
	
	
	$IDStr = "'".$ID."'";
	$StatusStr = "'".$Status."'";
	
	$sql = "UPDATE mcmonitoring.plandata SET Status = 4,BreakdownDateTime = CURRENT_TIMESTAMP WHERE ID = $IDStr;";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>