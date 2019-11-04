<?php
include("connectArduinoMc.php");

$McNo = "";
$LotNo = "";
$PlannedQty = "";
$StartTime = "";
$Status = "";
$Sequence = "";
$ItemNo = "";
$StartDateTime = "";
$StatusText = "";
$Status = "";
$ProducedQty = "";

//show all parameters
//echo "</br>"."Get Production Plan for McNo","<br/>";
//foreach($_POST as $key => $value){
//	echo $key, ' => ', $value, "<br/>";
//}
//show value

$McNo = $_POST["McNo"];
//$StartDateTime = $_GET['timestamp'];
$McNoStr = "'".$McNo."'";
//echo "MCNo= ".$McNo;
$sql = "SELECT * FROM mcmonitoring.plandata WHERE McNo = $McNoStr AND Status <= 2 || Status =4 ORDER BY Sequence,ID ASC LIMIT 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "*ID:".$row["ID"].",McNo:".$row["McNo"].",LotNo:".$row["LotNo"].",ItemNo:".$row["ItemNo"].",PlannedQty:" . $row["PlannedQty"] .",Status:" . $row["Status"] .",ProducedQty:"  .$row["ProducedQty"].";";
		$ID = $row["ID"];
		$McNo = $row["McNo"];
		$LotNo = $row["LotNo"];
		$ItemNo = $row["ItemNo"];
		$PlannedQty = $row["PlannedQty"];
		$Status = $row["Status"];
		$ProducedQty = $row["ProducedQty"];
		echo "*"."{".'"'."ID".'"'.":".'"'.$ID.'"'.","
		.'"'."McNo".'"'.":".'"'.$McNo.'"'.","
		.'"'."LotNo".'"'.":".'"'.$LotNo.'"'.","
		.'"'."ItemNo".'"'.":".'"'.$ItemNo.'"'.","
		.'"'."PlannedQty".'"'.":".'"'.$PlannedQty.'"'.","
		.'"'."Status".'"'.":".'"'.$Status.'"'.","
		.'"'."ProducedQty".'"'.":".'"'.$ProducedQty.'"'."}"
		.";"
		;
	}
} else {
    echo "no Plan Data";
}

//post to arduino
//echo "Lot no= ".$LotNo."</br>";
//echo "Item No.= ".$ItemNo."</br>";
//echo "Planned Qty= ".$PlannedQty."</br>";
//echo "Production Status= ".$StatusText;

$conn->close();
?>