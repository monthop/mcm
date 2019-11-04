<?php
	include("connectArduinoMc.php");

	$ID = $_POST["ID"];
	$ProducedQty =$_POST["ProducedQty"];
	$McNo = $_POST["McNo"];
	$LotNo= $_POST["LotNo"];
	$Status = "3";
	
	$AverageQ = $AverageQStr = "";
	$Qty = "";
	$IDStr = "'".$ID."'";
	$StatusStr = "'".$Status."'";
	$ProducedQtyStr = "'".$ProducedQty."'";
	
		//calculate average Qty
	//	$sql = SELECT Avg(Qty) AS AvgQty FROM mcmonitoring.productionData WHERE LotNo = LotNo
	$sql = "SELECT Avg(Qty) AS AvgQty FROM mcmonitoring.productiondata WHERE LotNo = $LotNo;";
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
	    echo "AvgQty= ". $row["AvgQty"]."</br>";
		$AverageQ = $row["AvgQty"];
		$AverageQStr = "'".$AverageQ."'";
		echo "AverageQStr= ".$AverageQStr."<br/>";
	}
} else {
    echo "0 results"."</br>";
}
	
	
	$sql = "UPDATE mcmonitoring.plandata SET Status = $Status,StopDateTime = CURRENT_TIMESTAMP,ProducedQty = $ProducedQty,AQty = $AverageQ WHERE ID= $ID;";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>