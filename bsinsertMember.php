<!DOCTYPE html>
<html>
<head>
<title>PHP Get Results</title>

  <title>Insert A Member</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>


<body>
<h1 style="color:DodgerBlue;">Machine Monitoring Project</h1>
<h2 style="color:Tomato;">Update members to mySQL</h2>

<?php

include("connectArduinoMc.php");
$Username = $Password = $Name = $Status = " ";

//show all parameters
echo "Data to members mySQL","<br/>";
foreach($_GET as $key => $value){
	echo $key, ' => ', $value, "<br/>";
}
//show value
$Uname = $_GET['email'];
$Password = $_GET['pwd'];

$UsernameStr = "'".$Uname."'";
$PasswordStr = "'".$Password."'";


$sql = "INSERT INTO mcmonitoring.members (ID,email,Password)
VALUES (NULL,$UsernameStr,$PasswordStr)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
<p>Click Continue to key data in</p>

<div class='container'>
	<a href="/bseditor.php" class="btn btn-info" role="button">Go Back</a>
</div>

</body>
</html>

