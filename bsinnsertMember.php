<!DOCTYPE html>
<html>
<head>
<title>PHP Get Results</title>
</head>


<body>
<h1 style="color:DodgerBlue;">Machine Monitoring Project</h1>
<h2 style="color:Tomato;">Update members to mySQL</h2>

<?php

include("connectArduinoMc.php");
$Username = $Password = $Name = $Status = " ";

//show all parameters
echo "Data to members mySQL","<br/>";
foreach($_POST as $key => $value){
	echo $key, ' => ', $value, "<br/>";
}
//show value
$Uname = $_POST['Username'];
$Password = $_POST['Password'];
$Name = $_POST['Name'];
$Status = $_POST['Status'];

$UsernameStr = "'".$Uname."'";
$PasswordStr = "'".$Password."'";
$NameStr = "'".$Name."'";
$StatusStr = "'".$Status."'";


$sql = "INSERT INTO mcmonitoring.members (ID,UserName,Password,Name,Status)
VALUES (NULL,$UsernameStr,$PasswordStr,$NameStr,$StatusStr)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
<p>Click Continue to key data in</p>

<div id="exitLogin">
  <form action="/machine.php" >
	<button type="submit" class="exit-button">Exit</button>
  </form>
</div>

<div id="continue">
  <form action="/dataform4.php" >
	<button type="submit" class="continue-button">Continue</button>
  </form>
</div>

</body>
</html>

