<?php
	include("connectArduinoMc.php");

	$ID ="";$IDStr = "";
	
	$ID = $_POST["ID"];
	$IDStr = "'".$IDStr."'";
	$Status = 1;
	
	
	$IDStr = "'".$ID."'";
	$StatusStr = "'".$Status."'";
	
	$sql = "UPDATE mcmonitoring.plandata SET StartDateTime = CURRENT_TIMESTAMP, Status = 1  WHERE ID = $ID;";

	if ($conn->query($sql) === TRUE) {
		echo "record updated successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>