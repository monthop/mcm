<!DOCTYPE html>
<html>
<head>
<title>PHP Get Results</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.continue-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 400px;
  left: 10px;
  width: 280px;
}
/* Back Button */
.exit-button {
  background-color: #8B0000;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 450px;
  left: 10px;
  width: 280px;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
/* The popup form - hidden by default */
.form-backin {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover, .back-button:hover{
  opacity: 1;
}
</style>
<body>
<h1 style="background-color:DodgerBlue;">Machine Monitoring Project - M</h1>
<h2 style="color:Tomato;">Post to mySQL m</h2>

<?php
include("bsconnectm.php"); 

$LotNo = $McNo = $ItemNo = " ";
$TotalQty = $TotalDefect = 0; 
$StartTime = $RunTime = $StopTime = 0;

//show all parameters
echo "Data to mySQL","<br/>";
foreach($_POST as $key => $value){
	echo $key, ' => ', $value, "<br/>";
}
//show value
$McNo = $_POST['McNo'];
$LotNo = $_POST['LotNo'];
$ItemNo = $_POST['ItemNo'];
$StartTime = $_POST['StartTime'];
$RunTime = $_POST['RunTime'];
$StopTime = $_POST['StopTime'];
$TotalQty = $_POST['TotalQty'];
$TotalDefect = $_POST['TotalDefect'];
$timestamp = '2009-02-15 08:00:05';

$McNoStr = "'".$McNo."'";
$LotNoStr = "'".$LotNo."'";
$ItemNoStr = "'".$ItemNo."'";
$timestampStr = "'".$timestamp."'";
	
$sql = "INSERT INTO mcmonitoring2.productionData (ID,timestamp,McNo,LotNo,ItemNo,StartTime,RunTime,StopTime,TotalQty,TotalDefect)
VALUES (NULL,$timestampStr,$McNoStr,$LotNoStr,$ItemNoStr,$StartTime,$RunTime,$StopTime,$TotalQty,$TotalDefect)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
<p>Click Continue to key data in</p>

<div id="exitLogin">
  <form action="/bseditorm.php" >
	<button type="submit" class="exit-button">Exit m</button>
  </form>
</div>

<div id="continue">
  <form action="/bsdisplayProduction001m.php" >
	<button type="submit" class="continue-button">Continue m</button>
  </form>
</div>


</body>
</html>

