<!DOCTYPE html>
<html>
<body>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<style>
.error {color: #FF0000;}
</style>

<style>
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
  top: 20px;
  left: 10px;
  width: 150px;
}
</style>
<br><br>
<br><br>

<?php
include("connectArduinoMc.php");

$sql = "SELECT * FROM mcmonitoring.members";
$result = $conn->query($sql);

echo "<table border='1'>
<br><br>
<tr>
<th>ID</th>
<th>Username</th>
<th>Password</th>
<th>Name</th>
<th>Status</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['ID']."</td>";
	echo "<td>".$row['Username']."</td>";
	echo "<td>".$row['Password']."</td>";
	echo "<td>".$row['Name']."</td>";
	echo "<td>".$row['Status']."</td>";
	echo "</tr>";
}
echo "</table>";
$conn->close();
?> 
<div id="backLogin">
  <form action="/dataform4.php" >
	<button type="submit" class="back-button">Go Back</button>
  </form>
</div>
</body>
</html>
