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
  top: 258px;
  left: 170px;
  width: 150px;
}
/* Submit Button */
.submit-button {
  background-color: #3CB371;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 258px;
  left: 10px;
  width: 150px;
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
  max-width: 600px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 30%;
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
.form-container .btn:hover, .open-button:hover,
.back-button:hover, .mm2-button:hover 
{
  opacity: 1;
}
/* Add some hover effects to buttons */
.mm-button:hover,.DB-button:hover, .mc-button:hover {
  opacity: 20;
}
</style>
 

<?php
// define variables and set to empty values
$usernameErr = $passwordErr = $nameErr = $websiteErr = $statusErr ="";
//$name = $email = $gender = $comment = $website = "";
$Username = $Password = $Name = $Status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Username"])) {
    $usernameErr = "Username is required";
  } else {
    $Username = test_input($_POST["Username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$Username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["Password"])) {
    $passwordErr = "Password is required";
  } else {
    $Password = test_input($_POST["Password"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$Password)) {
      $nameErr = "Only letters, numbers and white space allowed"; 
    }
	
  }
    
  if (empty($_POST["Name"])) {
    $nameErr = "Name is required";
  } else {
    $Name = test_input($_POST["Name"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$Name)) {
      $nameErr = "Only letters, numbers and white space allowed"; 
    }
  }

  if (empty($_POST["Status"])) {
    $Status = "";
	$statusErr = "Status is required";
  } else {
    $Status = test_input($_POST["Status"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Insert members</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="/insertMembermySQL.php">  
  Username: <input type="text" name="Username" value="<?php echo $Username;?> " required>
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Password: <input type="text" name="Password" value="<?php echo $Password;?>" required>
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Name: <input type="text" name="Name" value="<?php echo $Name;?>" required>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Status:
  <input type="radio" name="Status" <?php if (isset($Status) && $Status=="user") echo "checked";?> value="user">User
  <input type="radio" name="Status" <?php if (isset($Status) && $Status=="manager") echo "checked";?> value="manager">Manager
  <input type="radio" name="Status" <?php if (isset($Status) && $Status=="admin") echo "checked";?> value="admin">Admin  
  <span class="error">* <?php echo $statusErr;?></span>
  <br><br>
  <input type="submit" class ="submit-button" value="Submit">  
</form>
<div id="backLogin">
  <form action="/dataform4.php" >
	<button type="submit" class="back-button">Go Back</button>
  </form>
</div>

</body>
</html>