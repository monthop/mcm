<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
 <?php 

 function dataForm() {
    //echo "goto data form";
	header("Location: /bseditor.php");
}
function goBack(){
    //echo "goto data form";
	header("Location: /bsmenu.php");
}

include("bsconnect.php"); 
 //show all parameters


echo "Check user name and password","<br/>";
//foreach($_POST as $key => $value){
//	echo $key, ' => ', $value, "<br/>";
//}
//show value
$email = $_GET['email'];
$Password = $_GET['psw'];

session_start();

echo "email= ",$email,"</br>";
echo "Password= ",$Password,"</br>";

$sql = "SELECT * FROM mcmonitoring.members WHERE email='$email' AND Password='$Password';";
$result = $conn->query($sql);

if (!$result) {
    printf("Error: %s\n");
    exit();
}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["Username"]. " - Password " . $row["Password"]. "<br>";
		dataForm();
    }
} 
else {
    echo "0 results","</br></br>";
	$notFound = "&lt;b&gt;Username or Password incorrect !!!&lt;/b&gt;";
	echo htmlspecialchars_decode($notFound);
}

$conn->close();

?>

<h2>Press GoBack for Login Again.</h2>

<form action="/bsmenu.php">
  <input type="submit" class = "button"name="GoBack" value= "GoBack" > 
</form>

</body>
</html>
