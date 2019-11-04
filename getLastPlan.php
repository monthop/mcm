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
$sql = "SELECT * FROM mcmonitoring.planData WHERE McNo = $McNo AND Status = 0 ORDER BY Sequence,ID ASC LIMIT 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "*ID:".$row["ID"].",McNo:".$row["McNo"].",LotNo:".$row["LotNo"].",ItemNo:".$row["ItemNo"].",PlannedQty:" . $row["PlannedQty"] .",Status:" . $row["Status"] .";";
		$LotNo = $row["LotNo"];
		$PlannedQty = $row["PlannedQty"];
		$ID = $row["ID"];
		$Status = $row["Status"];

	}
} else {
    echo "@ 0 results";
}




//post to arduino
//echo "Lot no= ".$LotNo."</br>";
//echo "Item No.= ".$ItemNo."</br>";
//echo "Planned Qty= ".$PlannedQty."</br>";
//echo "Production Status= ".$StatusText;

$conn->close();
?>