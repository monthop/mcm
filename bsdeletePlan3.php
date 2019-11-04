<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

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
  top: 100px;
  left: 10px;
  width: 150px;
}
</style>
<?php
include("bsconnect.php");
$FromID = $ToID = "";

//show value
$FromID = $_GET['FromID'];
$ToID = $_GET['ToID'];


// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM mcmonitoring.plandata WHERE ID >= $FromID AND ID <= $ToID";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<div id="backLogin">
  <form action="/bsdisplayPlan003-1.php" >
	<button type="submit" class="back-button">Go Back</button>
  </form>
</div>

</body>
</html>