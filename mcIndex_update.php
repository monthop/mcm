<?php
	include("connectArduinoMc.php");

	$LotNo = $_POST["LotNo"];
	$ItemNo = $_POST["ItemNo"];
	$McNo = $_POST["McNo"];
	$StartTime = $_POST["StartTime"];
	$RunTime = $_POST["RunTime"];
	$BreakTime = $_POST["BreakTime"];
	$StopTime = $_POST["StopTime"];
	$TotalQty = $_POST["TotalQty"];
	$TotalDefect = $_POST["TotalDefect"]; 
	$Qty = $_POST["Qty"];
	
	
	$StartTimeStr = "'".$StartTime."'";
	$RunTimeStr = "'".$RunTime."'";
	$BreakTimeStr = "'".$BreakTime."'";
	$StopTimeStr = "'".$StopTime."'";
	$TotalQtyStr = "'".$TotalQty."'";
	$TotalDefectStr = "'".$TotalDefect."'";
	$LotNoStr = $LotNo;
	$ItemNoStr = $ItemNo;
	$McNoStr = $McNo;
	$QtyStr = "'".$Qty."'";
	
	$sql = "UPDATE mcmonitoring.updatedata SET timestamp = CURRENT_TIMESTAMP, LotNo = $LotNoStr, ItemNo = $ItemNoStr,
	StartTime = $StartTimeStr, RunTime = $RunTimeStr, BreakTime = $BreakTimeStr, StopTime = $StopTimeStr,
	TotalQty = $TotalQtyStr,Qty = $QtyStr WHERE McNo = $McNo;"; 
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$sql = "UPDATE mcmonitoring.plandata SET Status = $Status WHERE LotNo = $LotNo;"; 
	
	if ($conn->query($sql) === TRUE) {
		echo "update plandata to Sch Break successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	

	$conn->close();

?>