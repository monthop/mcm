<?php

include("connectArduinoMc.php");

$McNo = $LotNo = $ItemNo = $PlannedQty = $Status = $Sequence = "";

//show all parameters
echo "<br/>"."Inseret New Plan Data to mySQL"."<br/>";
foreach($_POST as $key => $value){
	echo $key, ' => ', $value, "<br/>";
}
//show value
$McNo = $_POST['McNo'];
$LotNo = $_POST['LotNo'];

$McNoStr = "'".$McNo."'";
$LotNoStr = "'".$LotNo."'";


//$sql = "INSERT INTO mcmonitoring.planData (ID,timestamp,McNo,LotNo,PlannedQty,ItemNo,Status,Sequence,ProducedQty,Sequence,AvTime,CycleTime)
//VALUES (NULL,CURRENT_TIMESTAMP,$McNo,$LotNo,0,NULL,1,1,0,0,0,0);";

$sql = "INSERT INTO mcmonitoring.plandata (`ID`, `timestamp`,`McNo`,   `LotNo`, `ItemNo`, `PlannedQty`, `Status`, `Sequence`, `StartDateTime`,    `RunDateTime`,`BreakdownDateTime`, `StopDateTime`, `ProducedQty`, `AQty`, `AvTime`, `CycleTime`, `TotalDefect`) 
VALUES (NULL, CURRENT_TIMESTAMP, $McNoStr, $LotNoStr, '', '', '', '1',CURRENT_TIMESTAMP, NULL, NULL, NULL,'','','','','');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
