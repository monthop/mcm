<?php
	include("connectArduinoMc.php");

	$ID = $_POST["ID"];
	$ProducedQty =$_POST["ProducedQty"];
	$McNo = $_POST["McNo"];
	$LotNo= $_POST["LotNo"];
	$Status = "3";
	
	
	$IDStr = "'".$ID."'";
	$StatusStr = "'".$Status."'";
	$ProducedQtyStr = "'".$ProducedQty."'";
	$McNoStr = "'".$McNo."'";
	$AverageQ = $AverageQStr = "";
	$Qty = "";
	$LotNoStr = "'".$LotNo."'";
	
	echo "ID= ".$ID."</br>";
	echo "McNo= ".$McNo."</br>";
	echo "LotNo= ".$LotNo."</br>";
	echo "LotNoStr= ".$LotNoStr."</br>";
	echo "ProducedQty= ".$ProducedQty."</br>";
	echo "ProducedQtyStr= ".$ProducedQtyStr."</br>";	
	
	
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

	//update planData
	echo "ProducedQty= ".$ProducedQty."</br>";
	$sql = "UPDATE mcmonitoring.plandata SET Status = 3, StopDateTime = CURRENT_TIMESTAMP, ProducedQty = $ProducedQtyStr, AQty = $AverageQStr  WHERE ID= $ID;";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully"."</br>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	//$sql = "SELECT * FROM mcmonitoring.plandata WHERE McNo = $McNoStr";
	$sql = "SELECT * FROM mcmonitoring.plandata WHERE ID = $ID;";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "List of Plan Data "."</br>";
    while($row = $result->fetch_assoc()) {
		
        echo "ID: ". $row["ID"]. " - MC No.: ". $row["McNo"]. " - Lot No.: " . $row["LotNo"] ." - Item No.: " . $row["ItemNo"] . " - Planned Qty: " . $row["PlannedQty"] ." - Status: " . $row["Status"] ."<br>";
		echo "Available Time (Hrs): ". $row["AvTime"]."Ideal Cycle Time (seconds): ". $row["CycleTime"];
		echo "--- Start Time:".$row["StartDateTime"]." - Run Time:".$row["RunDateTime"]." - Stop Time:".$row["StopDateTime"]."<br>";
		echo "--LotNo: ".$row["LotNo"]."</br>";
		echo "Avg(Qty)= ".$row["AQty"]."</br>";
	}
} else {
    echo "0 results"."</br>";
}


	
	
	
	$conn->close();

?>