<?php
include("connectArduinoMc.php");

$McNo = "";
$LotNo = "";
$PlannedQty = "";
$StartTime = "";
$Status = "";
$ItemNo = "";
$StartDateTime = "";
$StatusText = "";
$Status = "";
$TotalQty = "";

//show all parameters
//echo "</br>"."Get Production Plan for McNo","<br/>";
//foreach($_POST as $key => $value){
//	echo $key, ' => ', $value, "<br/>";
//}
//show value

$ID = $_POST["ID"];
//$StartDateTime = $_GET['timestamp'];
$IDStr = "'".$McNo."'";
//echo "MCNo= ".$McNo;
$sql = "SELECT * FROM mcmonitoring.plandata WHERE ID = $ID;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "*ID:".$row["ID"].",McNo:".$row["McNo"].",LotNo:".$row["LotNo"].",ItemNo:".$row["ItemNo"].",PlannedQty:" . $row["PlannedQty"] .",Status:" . $row["Status"] .";";
		$LotNo = $row["LotNo"];
		$PlannedQty = $row["PlannedQty"];
		$ID = $row["ID"];
		$Status = $row["Status"];
		$TotalQty=$row["TotalQty"];

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