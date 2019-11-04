<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 450px;
  left: 20px;
  width: 180px;
}
/* Back Button */
.back-button {
  background-color: #8B0000;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 450px;
  left: 210px;
  width: 180px;
}
/* list plan Button */
.DB-button {
  background-color: #aeb6bf;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 150px;
  left: 20px;
  width: 220px;
}

/* list plan Button */
.DB001-button {
  background-color: 	#2F4F4F;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 200px;
  left: 20px;
  width: 70px;
}
/* list plan Button */
.DB002-button {
  background-color: 	#2F4F4F;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 200px;
  left: 95px;
  width: 70px;
}
/* list plan Button */
.DB003-button {
  background-color: 	#2F4F4F;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 200px;
  left: 170px;
  width: 70px;
}

/* Insert production plan */
.DB2-button {
  background-color: #f8c471;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 250px;
  left: 20px;
  width: 220px;
}
/* delete production plan */
.DB3-button {
  background-color: #cc9900;
  color: #4d2600;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 300px;
  left: 20px;
  width: 220px;
}

/* sequence production plan */
.DB4-button {
  background-color: #1E90FF;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 350px;
  left: 20px;
  width: 220px;
}

/* list production Data Button */
.production-button {
  background-color: #228B22;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 300px;
  left: 280px;
  width: 220px;
}
/* list production Data Button */
.production-button001 {
  background-color: #556B2F;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 350px;
  left: 280px;
  width: 70px;
}
/* list production Data Button */
.production-button002 {
  background-color:#556B2F;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 350px;
  left: 355px;
  width: 70px;
}
/* list production Data Button */
.production-button003 {
  background-color: #556B2F;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 350px;
  left: 430px;
  width: 70px;
}
/* list member */
.mm-button {
  background-color: #aeb6bf;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 150px;
  left: 280px;
  width: 220px;
}
/* insert member */
.mm2-button {
  background-color: #f8c471;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 200px;
  left: 280px;
  width: 220px;
}
/* delete member */
.mm3-button {
  background-color: #cc9900;
  color: #4d2600;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 250px;
  left: 280px;
  width: 220px;
}
/* The popup form */
.form-popup {
  display: none;
  position: fixed;
  top: 10px;
  left: 15px;
  border: 3px solid #f1f1f1;
  z-index: 1;
}
/* The popup form */
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
  max-width: 480px;
  width: 100%;
  padding: 5px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 28%;
  padding: 5px;
  margin: 5px 0px 5px 0px;
  border: none;
  background: #D3D3D3;
}
/* Full-width input fields */
.form-container input[type=float], .form-container input[type=password] {
  width: 28%;
  padding: 5px;
  margin: 5px 0px 5px 0px;
  border: none;
  background: #D3D3D3;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, 
.form-container input[type=password]:focus,
.form-container input[type=float]:focus 
{
  background-color: #FFFF00; //yellow
  outline: none;
}

/* Set a style for the submit*/
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 20px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin:5px 0px 3px 0px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.btn:hover, 
.open-button:hover,
.back-button:hover, 
.mm-button:hover,
.mm2-button:hover,
.mm3-button:hover,
.DB-button:hover,
.DB2-button:hover,
.DB3-button:hover,
.DB4-button:hover,
.DB001-button:hover,
.DB002-button:hover,
.DB003-button:hover,
.production-button:hover ,
.production-button001:hover ,
.production-button002:hover ,
.production-button003:hover 
{
  opacity: 1;
}

</style>
</head>
<body>
<h1 style="color:DodgerBlue;"> Machine Monitoring Project</h1>
<h2 style="color:Tomato;"> Input Data Form</h2>
<p> Click Open Form for Data Input</p>
<button class="open-button" onclick="openForm()"  >Open Form</button>
<div class="form-popup" id="myForm">
  <form action="/postmysql2.php" class="form-container" method="post">
    <fieldset>
	<legend>Set up Production Plan:</legend>
    <h2>Data Form</h2>

    <label for="LotNo"><b>Lot No</b></label> 
	<input type="text" placeholder="Enter Lot No" name="LotNo" required>
	
    <label for="ItemNo"><b>Item No</b></label>
    <input type="text" placeholder="Item No" name="ItemNo" required><br>
	
    <label for="McNo"><b>Machine No</b></label>
    <input type="text" placeholder="MC No." name="McNo" required><br>
	
    <label for="StartTime"><b>Start (1=Start,0=Stop)</b></label>
    <input type="float" placeholder="1" name="StartTime" required ><br>
	
    <label for="RunTime"><b>Run (1=Run,0= Pause)</b></label>
    <input type="float" placeholder="1" name="RunTime" required><br>
	
    <label for="StopTime"><b>Stop(0=Finished,1=Running)</b></label>
    <input type="float" placeholder="0" name="StopTime" required><br>
	
	<label for="TotalQty"><b>Total Qty</b></label>
    <input type="float" placeholder="Total Qty" name="TotalQty" required>
	
    <label for="TotalDefect"><b>Defect Qty</b></label>
    <input type="float" placeholder="Total Defect Qty" name="TotalDefect" required><br>
	
    <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	</fieldset>
  </form>
</div>

<div id="backLogin">
  <form action="/bsmenu.php" >
	<button type="submit" class="back-button">Go Back</button>
  </form>
</div>

<div id="planData">
  <form action="/displayPlan.php" >
	<button type="submit" class= "DB-button" >List Plan Data</button>
  </form>
</div>

<div id="planData001">
  <form action="/displayPlan001.php" >
	<button type="submit" class= "DB001-button" >MC-001</button>
  </form>
</div>
<div id="planData002">
  <form action="/displayPlan002.php" >
	<button type="submit" class= "DB002-button" >MC-002</button>
  </form>
</div>
<div id="planData003">
  <form action="/displayPlan003.php" >
	<button type="submit" class= "DB003-button" >MC-003</button>
  </form>
</div>

<div id="updatePlan">
  <form action="/updateplanForm.php" >
	<button type="submit" class="DB2-button">Insert Production Plan</button>
  </form>
</div>

<div id="sequencePlan">
  <form action="/selectSequence.php" >
	<button type="submit" class="DB4-button">Edit Sequence Production Plan</button>
  </form>
</div>

<div id="deletePlan">
  <form action="/selectedPlan.php" >
	<button type="submit" class="DB3-button">Delete Production Plan</button>
  </form>
</div>

<div id="memberData">
  <form action="/displayMembers.php" >
	<button type="submit" class="mm-button">List Members</button>
  </form>
</div>

<div id="updateMember">
  <form action="/updatememberForm.php" >
	<button type="submit" class="mm2-button">Insert Members</button>
  </form>
</div>

<div id="deleteMember">
  <form action="/selectedMember.php" >
	<button type="submit" class="mm3-button">Delete Members</button>
  </form>
</div>

<div id="listProductionData">
  <form action="/displayProductionData.php" >
	<button type="submit" class="production-button">List Production Data</button>
  </form>
</div>

<div id="listData001">
  <form action="/displayProductionData001.php" >
	<button type="submit" class="production-button001">MC-001</button>
  </form>
</div>
<div id="listData002">
  <form action="/displayProductionData002.php" >
	<button type="submit" class="production-button002">MC-002</button>
  </form>
</div>
<div id="listData003">
  <form action="/displayProductionData003.php" >
	<button type="submit" class="production-button003">MC-003</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}
function backLogin() {
    document.getElementById("backLogin").style.display = "block";
}
function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
function DB() {
    document.getElementById("DB").style.display = "block";
}

</script>

</body>
</html>