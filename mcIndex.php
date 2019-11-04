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
	
	$sql = "INSERT INTO mcmonitoring.productiondata 
	(ID,timestamp,McNo,LotNo,ItemNo,StartTime,RunTime,BreakTime,StopTime,TotalQty,TotalDefect,Qty) 
	VALUES (NULL,CURRENT_TIMESTAMP,$McNoStr,$LotNoStr,$ItemNoStr,$StartTimeStr,$RunTimeStr,$BreakTimeStr,$StopTimeStr,$TotalQtyStr,$TotalDefectStr,$QtyStr);";
	
	/*
	$sql = "INSERT INTO mcmonitoring.productionData 
	(ID,timestamp,LotNo,ItemNo,McNo,StartTime,RunTime,StopTime,TotalQty,TotalDefect) 
	VALUES (NULL,CURRENT_TIMESTAMP,'lot-001','item-001','mc-001','0','1','0','800','30','10')";
	*/
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>