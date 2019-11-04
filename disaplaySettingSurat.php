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
include("connectSurat.php");

$OvenNo = $Head = $Mon = $Tue = $Wed = $Thu = $Fri = $Sat = $Sun = "";
//show all parameters

//show value
$OvenNo = $_POST['OvenNo'];
$DayIn = $_POST['DayIn'];
$Mon = $_POST['Mon'];
$Tue = $_POST['Tue'];
$Wed = $_POST['Wed'];
$Thu = $_POST['Thu'];
$Fri = $_POST['Fri'];
$Sat = $_POST['Sat'];
$Sun = $_POST['Sun'];

echo "<table border='1'>
<br><br><br><br>
<tr>
<th>Oven Number</th>
<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>Thursday</th>
<th>Friday</th>
<th>Saturday</th>
<th>Sunday</th>
</tr>";

	echo "<tr>";
	echo "<td>".$OvenNo."</td>";
	echo "<td>".$DayIn."</td>";
	echo "<td>".$Mon.."</td>";
	echo "<td>".$Tue."</td>";
	echo "<td>".$Wed."</td>";
	echo "<td>".$Thu."</td>";
	echo "<td>".$Fri."</td>";
	echo "<td>".$Sat."</td>";
	echo "<td>".$Sun."</td>";
	echo "</tr>";
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