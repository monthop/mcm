<?php
	include("connectArduinoMc.php");

	$ID = $_POST["ID"];
	$Status = "1";
	
	
	$IDStr = "'".$ID."'";
	$StatusStr = "'".$Status."'";
	
	$sql = "UPDATE mcmonitoring.plandata SET Status = $Status,StartDateTime = CURRENT_TIMESTAMP WHERE ID= $ID;";

	if ($conn->query($sql) === TRUE) {
		echo "record updated successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>