<?php
	include("connectArduinoMc.php");

	$ID = $_GET["ID"];
	$Status = "2";
	
	$IDStr = "'".$ID."'";
	$StatusStr = "'".$Status."'";
	
	$sql = "SELECT RunDateTime,Status FROM mcmonitoring.plandata WHERE ID = $IDStr ;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "*ID:".$row["ID"].",McNo:".$row["McNo"].",LotNo:".$row["LotNo"].",ItemNo:".$row["ItemNo"].",PlannedQty:" . $row["PlannedQty"] .",Status:" . $row["Status"] .",ProducedQty:"  .$row["ProducedQty"].";";
		$RunDateTime = $row["RunDateTime"];
		$Status = $row["Status"];
	}
} else {
    echo "no RunDateTime";
}

if ($RunDateTime == ""){
	$Status = "2";
}
else $Status = "5";

	
	$sql = "UPDATE mcmonitoring.plandata SET Status = $Status,RunDateTime = CURRENT_TIMESTAMP WHERE ID= $ID;";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>