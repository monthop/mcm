<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<style>
table, th, td {
  border: 1px solid black;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
/* Back Button */
.back-button {
  background-color: #8B0000;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 30px;
  left: 10px;
  width: 150px;
}
</style>
</head>
<body> 

<?php
include("connectArduinoMc.php"); 
//declare variables
$ID = $McNo = $ItemNo = $LotNo = "";
$PlannedQty = $Status = $StartDateTime = $RunDateTime = $StopDateTime = $ProducedQty = "";
$AQty = $AvTime = $CycleTime = $TotalDefect = "";

$sql = "SELECT * FROM mcmonitoring.plandata WHERE McNo = 'MC-003' ORDER BY ID DESC;";
$result = $conn->query($sql);

echo "<table border='1'>
<br><br><br><br>
<tr>
<th>ID</th>
<th>LotNo</th>
<th>McNo</th>
<th>ItemNo</th>
<th>PlannedQty</th>
<th>Status</th>
<th>Sequence</th>
<th>Start</th>
<th>Run</th>
<th>Stop</th>
<th>ProducedQty</th>
<th>CT</th>
<th>AvailableTime</th>
<th>Ideal CT</th>
<th>Defect</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['ID']."</td>";
	echo "<td>".$row['LotNo']."</td>";
	echo "<td>".$row['McNo']."</td>";
	echo "<td>".$row['ItemNo']."</td>";
	echo "<td>".$row['PlannedQty']."</td>";
	echo "<td>".$row['Status']."</td>";
		echo "<td>".$row['Sequence']."</td>";
	echo "<td>".$row['StartDateTime']."</td>";
	echo "<td>".$row['RunDateTime']."</td>";
	echo "<td>".$row['StopDateTime']."</td>";
		echo "<td>".$row['ProducedQty']."</td>";
	echo "<td>".$row['AQty']."</td>";
	echo "<td>".$row['AvTime']."</td>";
	echo "<td>".$row['CycleTime']."</td>";
	echo "<td>".$row['TotalDefect']."</td>";
	echo "</tr>";
}
echo "</table>";
$conn->close();
?> 
<br><br>
<div id="backLogin">
  <form action="/dataform4.php" >
	<button type="submit" class="back-button">Go Back</button>
  </form>
</div>
</body>
</html>