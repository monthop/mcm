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

/* Add some hover effects to buttons */
.back-button:hover 
{
  opacity: 1;
}

</style>
<?php
include("connectArduinoMc.php");

//show value
$FromID = $_POST['FromID'];
$ToID = $_POST['ToID'];

// sql to delete a record
$sql = "DELETE FROM mcmonitoring.members WHERE ID >= $FromID AND ID <= $ToID";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<div id="backLogin">
  <form action="/dataform4.php" >
	<button type="submit" class="back-button">Go Back</button>
  </form>
</div>
</body>
</html>