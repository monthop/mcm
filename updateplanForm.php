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

/* Button used to open the contact form - fixed at the bottom of the page */

/* Back Button */
.back-button {
  background-color: #8B0000;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 425px;
  left: 140px;
  width: 120px;
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
  top: 425px;
  left: 10px;
  width: 120px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 0;
  left: 400px;
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
  max-width: 600px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 30%;
  padding: 10px;
  margin: 5px 0 10px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, 
.form-container input[type=password]:focus 
{
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
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
.back-button:hover, .mm2-button:hover, .submit-button:hover 
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
$mcErr = $planErr = $itemErr = $lotErr = $qtyErr = $statusErr = $avtimeErr = $cycletimeErr = "";
$sequenceErr = "";
//$name = $email = $gender = $comment = $website = "";
$McNo = $LotNo = $ItemNo = $PlannedQty = $Status = $AvTime = $CycleTime = "";
$Sequence = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["McNo"])) {
    $mcErr = "Machine number is required";
  } else {
    $McNo = test_input($_POST["McNo"]);
  }
  
  if (empty($_POST["LotNo"])) {
    $lotErr = "Lot Number is required";
  } else {
    $LotNo = test_input($_POST["LotNo"]);
    // check if e-mail address is well-formed
  }
  
  if (empty($_POST["ItemNo"])) {
    $itemErr = "Item Number is required";
  } else {
    $ItemNo = test_input($_POST["ItemNo"]);
    // check if e-mail address is well-formed
  }
    
  if (empty($_POST["PlannedQty"])) {
    $qtyErr = "Plan Quantity is required";
  } else {
    $PlannedQty = test_input($_POST["PlannedQty"]);
  }
  
    if (empty($_POST["Sequence"])) {
    $sequenceErr = "Sequence is required";
  } else {
    $Sequence = test_input($_POST["Sequence"]);
  }

  if (empty($_POST["Status"])) {
    $Status = "";
	$statusErr = "Status is required";
  } else {
    $Status = test_input($_POST["Status"]);
  }
  
  if (empty($_POST["AvTime"])) {
    $Status = "";
	$statusErr = "AvTime is required";
  } else {
    $Status = test_input($_POST["AvTime"]);
  }
  
    if (empty($_POST["CycleTime"])) {
    $Status = "";
	$statusErr = "Cycle Time is required";
  } else {
    $Status = test_input($_POST["CycleTime"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Insert Plan Data</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="/insertPlanData.php">  
  Machine No.: <input type="text" name="McNo" value="<?php echo $McNo;?>" required>
  <span class="error">* <?php echo $mcErr;?></span>
  <br><br>
  Lot No.: <input type="text" name="LotNo" value="<?php echo $LotNo;?>" required>
  <span class="error">* <?php echo $lotErr;?></span>
  <br><br>
  Item No.: <input type="text" name="ItemNo" value="<?php echo $ItemNo;?>" required>
  <span class="error">* <?php echo $itemErr;?></span>
  <br><br>
  Plan Qty: <input type="text" name="PlannedQty" value="<?php echo $PlannedQty;?>" required>
  <span class="error">* <?php echo $planErr;?></span>
  <br><br>
  Sequence: <input type="text" name="Sequence" value="<?php echo $Sequence;?>" required>
  <span class="error">* <?php echo $sequenceErr;?></span>
  <br><br>

  Available MC Time: <input type="text" name="AvTime" value="<?php echo $AvTime;?>" required>
  <span class="error">*<?php echo $avtimeErr;?></span>
  <br><br>
  Ideal Cycle Time: <input type="text" name="CycleTime" value="<?php echo $CycleTime;?>" required>
  <span class="error">*<?php echo $cycletimeErr;?></span>
  <br><br>
  
  Status:
  <input type="radio" name="Status" <?php if (isset($Status) && $Status=="0") echo "checked";?> value="0">Plan to produce
  <input type="radio" name="Status" <?php if (isset($Status) && $Status=="1") echo "checked";?> value="1">Starting
  <input type="radio" name="Status" <?php if (isset($Status) && $Status=="2") echo "checked";?> value="2">Producing
  <input type="radio" name="Status" <?php if (isset($Status) && $Status=="3") echo "checked";?> value="3">Done  
  <span class="error">* <?php echo $statusErr;?></span>
  <br><br>
  <input type="submit" name="submit" class = "submit-button" value="Submit">  
</form>
<div id="backLogin">
  <form action="/dataform4.php" >
	<button type="submit" class="back-button">Go Back</button>
  </form>
</div>

</body>
</html>