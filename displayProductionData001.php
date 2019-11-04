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
$StartTime = $RunTime = $StopTime = $TotalQty = $TotalDefect = $Qty = "";

$sql = "SELECT * FROM mcmonitoring.productiondata WHERE McNo = 'MC-001' ORDER BY ID DESC;";
$result = $conn->query($sql);

echo "<table border='1'>
<br><br><br><br>
<tr>
<th>ID</th>
<th>Time</th>
<th>LotNo</th>
<th>ItemNo</th>
<th>McNo</th>
<th>Start</th>
<th>Run</th>
<th>Stop</th>
<th>TotalQty</th>
<th>TotalDefect</th>
<th>Qty/5min</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['ID']."</td>";
	echo "<td>".$row['timestamp']."</td>";
	echo "<td>".$row['LotNo']."</td>";
	echo "<td>".$row['ItemNo']."</td>";
	echo "<td>".$row['McNo']."</td>";
	echo "<td>".$row['StartTime']."</td>";
	echo "<td>".$row['RunTime']."</td>";
	echo "<td>".$row['StopTime']."</td>";
	echo "<td>".$row['TotalQty']."</td>";
	echo "<td>".$row['TotalDefect']."</td>";
	echo "<td>".$row['Qty']."</td>";
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