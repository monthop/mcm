<?php
	include("connectArduinoMc.php");
	

	$LotNo = $_GET["LotNo"];
	$Status = "";
	
	
	$sql = "SELECT timestamp,BreakTime FROM mcmonitoring.productiondata WHERE LotNo = $LotNo AND BreakTime>0;";
	$result = $conn->query($sql);
	$BreakCount =0;
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "*ID:".$row["ID"].",McNo:".$row["McNo"].",LotNo:".$row["LotNo"].",ItemNo:".$row["ItemNo"].",PlannedQty:" . $row["PlannedQty"] .",Status:" . $row["Status"] .",ProducedQty:"  .$row["ProducedQty"].";";
			$TimeStamp = $row["timestamp"];
			$BreakTime= $row["BreakTime"];
			echo $TimeStamp."/".$BreakTime." ";
			$BreakCount ++;
		}
	} else {
		echo "no Data";
	}
	echo "<br>";
	echo "Break Down Time= ";
	echo $BreakCount." Min.";
	
	$sql = "UPDATE mcmonitoring.plandata SET BreakDownTime = $BreakCount WHERE LotNo= $LotNo;";

	if ($conn->query($sql) === TRUE) {
		echo "Status =2, update BreakDownTime successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	/*

if ($Status=="0"){
	$Status = "2";
	$sql = "UPDATE mcmonitoring.plandata SET Status = $Status,RunDateTime = CURRENT_TIMESTAMP WHERE ID= $ID;";

	if ($conn->query($sql) === TRUE) {
		echo "Status =2, update Timestamp successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}	
	
}
else {
	$Status = "5";
	$sql = "UPDATE mcmonitoring.plandata SET Status = $Status WHERE ID= $ID;";

	if ($conn->query($sql) === TRUE) {
		echo "Status =5, not update timestamp";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
*/

$conn->close();

?>