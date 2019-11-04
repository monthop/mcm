<?php
	include("connectArduinoMc.php");

	$ID = $_GET["ID"];
	$ProducedQty =$_GET["ProducedQty"];
	$McNo = $_GET["McNo"];
	$LotNo= $_GET["LotNo"];
	$Status = "3";
	
	$countQ = "";	$countQStr = "";
	$Qty = "";
	$IDStr = "'".$ID."'";
	$StatusStr = "'".$Status."'";
	$ProducedQtyStr = "'".$ProducedQty."'";
	$LotNoStr = "'".$LotNo."'";
	
	echo ($LotNo);echo("<br>");
	
	//calculate average Qty
	//	$sql = SELECT Avg(Qty) AS AvgQty FROM mcmonitoring.productionData WHERE LotNo = LotNo
	$sql = "SELECT count(ID) AS countBreak FROM mcmonitoring.productiondata WHERE LotNo = $LotNo;";
	
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$countQ = $row["countBreak"];
			$countQStr = $countQ;
			echo("count= ");
			echo $countQ;
			echo("<br>");
			echo("Break Time= ");
			echo($countQ);
			echo(" min");
		}
	} else {
		echo "0 results"."</br>";
		$countQ = 0;
	}
	if ($countQStr ==""){
		$countQStr = "0";
		$countQ =0;
	}
	/*
	$sql = "UPDATE mcmonitoring.plandata SET Status = $Status,StopDateTime = CURRENT_TIMESTAMP,ProducedQty = $ProducedQty,AQty = $AverageQ  WHERE ID= $ID;";

	if ($conn->query($sql) === TRUE) {
		echo "record updated successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	*/
	$conn->close();

?>