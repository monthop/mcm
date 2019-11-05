<?php

include("connectArduinoMc.php");

$McNo = "MC-001";
$LotNo = "Lot-";
$ItemNo = " ";
$PlannedQty = 1;
$Status = 1;
$Sequence =1;


//show value
$McNo = $_POST['McNo'];
$LotNo = $_POST['LotNo'];

//show all parameters

echo "<br/>"."Inseret New Plan Data to mySQL"."<br/>";
foreach($_POST as $key => $value){
	echo $key, ' => ', $value, "<br/>";
}


$McNoStr = "'".$McNo."'";
$LotNoStr = "'".$LotNo."'";


//$sql = "INSERT INTO mcmonitoring.planData (ID,timestamp,McNo,LotNo,PlannedQty,ItemNo,Status,Sequence,ProducedQty,Sequence,AvTime,CycleTime)
//VALUES (NULL,CURRENT_TIMESTAMP,$McNo,$LotNo,0,NULL,1,1,0,0,0,0);";

$sql = "INSERT INTO mcmonitoring.plandata( 
ID,timestamp,McNo,LotNo,ItemNo,PlannedQty,Status,Sequence,StartDateTime,RunDateTime,
BreakdownDateTime,StopDateTime,ProducedQty,AQty,AvTime,CycleTime,TotalDefect) 
VALUES ( NULL,CURRENT_TIMESTAMP,'MC-001',$LotNoStr,'Item-',0,1,1,
CURRENT_TIMESTAMP,NULL, NULL, NULL,1,0,1,1,0);";

/*
INSERT INTO mcmonitoring.plandata( ID,timestamp,McNo,LotNo,ItemNo,PlannedQty,Status,Sequence,StartDateTime,
RunDateTime, BreakdownDateTime,StopDateTime,ProducedQty,AQty,AvTime,CycleTime,
TotalDefect) 
VALUES ( NULL,CURRENT_TIMESTAMP,"MC-001","LotNo-001","ItemNo-001",0,1,1,
CURRENT_TIMESTAMP,NULL, NULL, NULL,1,0,1,1,0)*/

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
