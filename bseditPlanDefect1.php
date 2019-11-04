<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Machine Monitoring Project</h1>      
    <p>โครงการของกรมส่งเสริมอุตสาหกรรม และสถาบันไทย-เยอรมัน</p>
  </div>
</div>

<?php

 function okForm() {
    //echo "goto data form";
	header("Location: /bsdisplayPlan001-1.php");
}

include("bsconnect.php");

//show value
$LotNo = $_GET['LotNo'];
$defect = $_GET['Defect'];
$LotNoStr = '"'.$LotNo.'"';
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "UPDATE mcmonitoring.plandata SET TotalDefect = $defect WHERE LotNo = $LotNoStr;";

if ($conn->query($sql) === TRUE) {
	okForm();
    //echo "Plan updated successfully";
} else {
    echo "Error updating plan: " . $conn->error;
}
$conn->close();
?>
<div class='container'>
	<a href="/bssequence1.php" class="btn btn-info" role="button">Go Back</a>
</div>

</body>
</html>