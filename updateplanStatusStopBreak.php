<?php
	include("connectArduinoMc.php");

	$ID = $_GET["ID"];
	$ProducedQty =$_GET["ProducedQty"];
	$McNo = $_GET["McNo"];
	$LotNo= $_GET["LotNo"];
	$Status = "3";
	
	$AverageQ = "";	$AverageQStr = "";
	$Qty = "";
	$IDStr = "'".$ID."'";
	$StatusStr = "'".$Status."'";
	$ProducedQtyStr = "'".$ProducedQty."'";
	$LotNoStr = "'".$LotNo."'";
	
	$sql = "SELECT Avg(Qty) AS AvgQty FROM mcmonitoring.productiondata WHERE LotNo = $LotNo;";
	
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$AverageQ = $row["AvgQty"];
			$AverageQStr = $AverageQ;
			echo $AverageQ;
		}
	} else {
		echo "0 results"."</br>";
		$AverageQ = 0;
	}
	if ($AverageQStr ==""){
		$AverageQStr = "0";
		$AverageQ =0;
	}
	
	
	$sql = "UPDATE mcmonitoring.plandata SET Status = $Status,StopDateTime = CURRENT_TIMESTAMP,ProducedQty = $ProducedQty,AQty = $AverageQ  WHERE ID= $ID;";

	if ($conn->query($sql) === TRUE) {
		echo "record updated successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>