<!DOCTYPE html>
<html>
<head>
<title>Plan Data</title>
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
  position: relative;
  top: 10px;
  left: 0px;
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
  position: relative;
  top: 20px;
  left: 0px;
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
<h1 style="color:DodgerBlue;">Machine Monitoring Project</h1>
<h2 style="color:Tomato;">Insert Plan Data to mySQL</h2>

<?php
include("bsconnect.php");

$McNo = $LotNo = $ItemNo = $PlannedQty = $Status = $Sequence = "";

//show all parameters
echo "<br/>"."Update Plan Data to mySQL"."<br/>";
foreach($_POST as $key => $value){
	echo $key, ' => ', $value, "<br/>";
}
//show value
$McNo = $_POST['McNo'];
$LotNo = $_POST['LotNo'];
$ItemNo = $_POST['ItemNo'];
$PlannedQty = $_POST['PlannedQty'];
$Sequence = $_POST['Sequence'];
$Status = $_POST['Status'];
$ProduceQty = '0';
$AvTime = $_POST['AvTime'];
$CycleTime = $_POST['CycleTime'];

/*
echo "McNo= ".$McNo."<br/>";
echo "LotNo= ".$LotNo."<br/>";
echo "ItemNo= ".$ItemNo."<br/>";
echo "PlannedQty= ".$PlannedQty."<br/>";
echo "Status= ".$Status."<br/>";
echo "Available Time(Hrs)= ".$AvTime."<br/>";
echo "CycleTime(sec)= ".$CycleTime."<br/>";*/

$McNoStr = "'".$McNo."'";
$LotNoStr = "'".$LotNo."'";
$ItemNoStr = "'".$ItemNo."'";
$PlannedQtyStr = "'".$PlannedQty."'";
$SequenceStr = "'".$Sequence."'";
$StatusStr = "'".$Status."'";
$ProducedQtyStr = "'".$ProduceQty."'";
$AvTimeStr = "'".$AvTime."'";
$CycleTimeStr = "'".$CycleTime."'";

$sql = "INSERT INTO mcmonitoring.plandata (ID,McNo,LotNo,PlannedQty,ItemNo,Status,ProducedQty,Sequence,AvTime,CycleTime)
VALUES (NULL,$McNoStr,$LotNoStr,$PlannedQtyStr,$ItemNoStr,$StatusStr,$ProducedQtyStr,$SequenceStr,$AvTimeStr,$CycleTimeStr)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
<p>Click Continue to key data in</p>
<div id="continue">
  <form action="/bsdisplayPlan003-1.php" >
	<button type="submit" class="continue-button">Continue</button>
  </form>
</div>
<div id="exitLogin">
  <form action="/bseditor.php" >
	<button type="submit" class="exit-button">Exit</button>
  </form>
</div>

</body>
</html>

