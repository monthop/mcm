<?php
	include("connectArduinoMc.php");
	
	$Status = "";
	
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
	
	if ($StartTime ==1 AND $RunTime ==1 AND $BreakTime ==0 AND $StopTime == 0){
		$Status=2;
	}
	else if ($StartTime==1 AND $RunTime==1 AND $BreakTime ==0 AND $StopTime ==1){
		$Status=3;
	}
	else if ($StartTime==1 AND $RunTime==1 AND $BreakTime ==1 AND $StopTime == 0){
		$Status=4;
	}
	else if ($StartTime==0 AND $RunTime==1 AND $BreakTime ==1 AND $StopTime ==0){
		$Status=5;$RunTime=5;
	}

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
	
	//check status in plandata if status ==2 -> normal run, runtime=1
	// if status==5 -> planned downtime, runtime =2
	/*
	$sql = "SELECT Status FROM mcmonitoring.plandata WHERE LotNo = $LotNoStr ;";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Status = $row["Status"];
		echo "Status= ".$Status;
	}
} else {
    echo "no data";
}		
*/
	
	$sql = "INSERT INTO mcmonitoring.productiondata 
	(ID,timestamp,McNo,LotNo,ItemNo,StartTime,RunTime,BreakTime,StopTime,TotalQty,TotalDefect,Qty) 
	VALUES (NULL,CURRENT_TIMESTAMP,$McNoStr,$LotNo,$ItemNoStr,$StartTimeStr,$RunTimeStr,$BreakTimeStr,$StopTimeStr,$TotalQtyStr,$TotalDefectStr,$QtyStr);";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	$sql = "UPDATE mcmonitoring.updatedata SET timestamp = CURRENT_TIMESTAMP, LotNo = $LotNo, ItemNo = $ItemNoStr,
	StartTime = $StartTimeStr, RunTime = $RunTimeStr, BreakTime = $BreakTimeStr, StopTime = $StopTimeStr,
	TotalQty = $TotalQtyStr,Qty = $QtyStr WHERE McNo = $McNo;"; 
	
	if ($conn->query($sql) === TRUE) {
		echo "update record successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$sql = "UPDATE mcmonitoring.plandata SET Status = $Status WHERE LotNo = $LotNo;"; 
	
	if ($conn->query($sql) === TRUE) {
		echo "update record successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	

?>