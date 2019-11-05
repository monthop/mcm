<?php
	include("connectArduinoMc.php");
	
	$ID="";$ProducedQty="";$McNO="";$LotNo="";
	$Status = "";
	$BreakCount =0;$RunCount =0;
	
	$ID = $_POST["ID"];
	$ProducedQty =$_POST["ProducedQty"];
	$McNo = $_POST["McNo"];
	$LotNo= $_POST["LotNo"];
	$Status = "3";
	
	$AverageQ = "";	$AverageQStr = "";
	$Qty = "";
	$IDStr = "'".$ID."'";
	$StatusStr = "'".$Status."'";
	$ProducedQtyStr = "'".$ProducedQty."'";
	$LotNoStr = "'".$LotNo."'";
	
	//calculate average Qty
	//	$sql = SELECT Avg(Qty) AS AvgQty FROM mcmonitoring.productionData WHERE LotNo = LotNo
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
	
	//cal Break Down Time
	$sql = "SELECT timestamp,BreakTime FROM mcmonitoring.productiondata WHERE LotNo = $LotNo AND BreakTime=1;";
	$result = $conn->query($sql);
	
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
	//echo "<br>";
	//echo "Break Down Time= ";
	//echo $BreakCount." Min.";
	
	//cal sch Break Down
	$sql = "SELECT timestamp,RunTime FROM mcmonitoring.productiondata WHERE LotNo = $LotNo AND RunTime=0;";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "*ID:".$row["ID"].",McNo:".$row["McNo"].",LotNo:".$row["LotNo"].",ItemNo:".$row["ItemNo"].",PlannedQty:" . $row["PlannedQty"] .",Status:" . $row["Status"] .",ProducedQty:"  .$row["ProducedQty"].";";
			$TimeStamp = $row["timestamp"];
			$RunTime= $row["RunTime"];
			echo $TimeStamp."/".$RunTime." ";
			$RunCount ++;
		}
	} else {
		echo "no Data";
	}
	
	
	$sql = "UPDATE mcmonitoring.plandata SET BreakDownTime = $BreakCount, SchBreakDown = $RunCount WHERE LotNo= $LotNo;";

	if ($conn->query($sql) === TRUE) {
		echo "update BreakDownTime successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>