<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/cssjs/css/bootstrap.min.css">
  <script src="cssjs/js/jquery.min.js"></script>
  <script src="/cssjs/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Machine Monitoring Project</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/bsmenu.php">Home</a></li>
		<li><a href="/bsabout.php">About</a></li>
        <li class="active" ><a href="http://localhost:3000/?orgId=1" target="_blank">Goto Grafana</a></li>
        <li class="dropdown">
		    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="/bsgraphproduction.php">productionData</a></li>
				<li><a href="#">planData</a></li>
				<li><a href="/bsgraphCT.php">cycle time</a></li>
				<li><a href="/bsgauge.php">Gauge</a></li> 
			</ul>
		</li>

		<li><a href="/bscontact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/bsmenu.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
	  	  <ul class="nav navbar-nav navbar-right">
        <li><a href="/bseditor.php"><span class="glyphicon glyphicon-log-in"></span> Back</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Machine Monitoring Project</h1>      
    <p>โครงการของกรมส่งเสริมอุตสาหกรรม และ มจพ.</p>
  </div>
</div>

<div class="container">
  <h2>Select an operation</h2>
    <div class="dropdown">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Display Production Plan
		<span class="caret"></span></button>
		<ul class="dropdown-menu ">
		  <li><a href="/bsdisplayPlan001-1.php">MC-001</a></li>
		  <li><a href="/bsdisplayPlan002-1.php">MC-002</a></li>
		  <li><a href="/bsdisplayPlan003-1.php">MC-003</a></li>
		  <li><a href="/bsdisplayPlan.php">All Machine</a></li>
		</ul>
	</div>
	<br>
	<div class="dropdown">
		<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Display Production Data and Insert Data
		<span class="caret"></span></button>
		<ul class="dropdown-menu ">
		  <li><a href="/bsdisplayProduction001.php">Data MC-001</a></li>
		  <li><a href="/bsdisplayProduction002.php">Data MC-002</a></li>
		  <li><a href="/bsdisplayProduction003.php">Data MC-003</a></li>
		  <li><a href="/bsdisplayProduction.php">Data All Machines</a></li>
		</ul> 
	</div><br>
		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Insert Production Plan</button>


	<br>
	<div>
	  <!-- The Modal -->
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
		  
					<!-- Modal Header -->
					<div class="modal-header">
					  <h4 class="modal-title"><b>ใส่แผนการผลิต</b></h4>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
			
					<!-- Modal body -->
					<div class="modal-body">
						<form method="post" action="bsinsertPlandata.php">  
						<label for="McNo">หมายเลขเครื่อง:</label>
						<select name="McNo" class="form-control" >
						  <option selected>McNo (หมายเลขเครื่อง)</option>
						  <option value="MC-001">MC-001</option>
						  <option value="MC-002">MC-002</option>
						  <option value="MC-003">MC-003</option>
						</select>
					
						<div class="form-group">
							<label for="LotNo">Lot No.:</label>
							<input type="text" class="form-control" id="LotNo" placeholder="เลขล็อต หรือ เลขขคำสั่งซื้อ" name="LotNo">
						</div>
						
						<div class="form-group">
							<label for="ItemNo">Part No.:</label>
							<input type="text" class="form-control" id="ItemNo" placeholder="รหัสสินค้า/ชิ้นส่วน" name="ItemNo">
						</div>
						
						<div class="form-group">
							<label for="PlannedQty">Planned Qty:</label>
							<input type="text" class="form-control" id="PlannedQty" placeholder="จำนวนสั่งผลิต" name="PlannedQty">
						</div>
						
						<div class="form-group">
							<label for="Sequence">Sequence No:</label>
							<input type="text" class="form-control" id="Sequence" placeholder="ลำดับการผลิต" name="Sequence">
						</div>
						
						<div class="form-group">
							<label for="AvTime">Available Time (Hr):</label>
							<input type="text" class="form-control" id="AvTime" placeholder="จำนวนชม.การทำงานของเครื่อง" name="AvTime">
						</div>
						
						<div class="form-group">
							<label for="CycleTime">Ideal Cycle Time (Sec.):</label>
							<input type="text" class="form-control" id="CycleTime" placeholder="เวลาที่ใช้ผลิต(วินาที)ต่อชิ้น" name="CycleTime">
						</div>
					
						<label for="Status">Status:</label>
							<select name="Status" class="form-control" >
							  <option selected>สถานะการผลิต</option>
							  <option value="0">ยังไม่ผลิต</option>
							  <option value="1">เปิดเครื่อง</option>
							  <option value="2">กำลังผลิต</option>
							  <option value="3">ผลิตเสร็จ</option>
							</select>
							<br>
							<input type="submit" name="submit" class = "submit-button" value="Submit">  
						</form>
					</div>
				</div>	
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
			  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	
		<br>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3">Export Production Data</button>
		<!-- The Modal -->
		<div class="modal" id="myModal3">
			<div class="modal-dialog">
				<div class="modal-content">
				
				<!-- Modal Header -->
					<div class="modal-header">
					  <h4 class="modal-title"><b>Export Excel Files</b></h4>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
			
					<!-- Modal body -->
					<div class="modal-body">
						<form method="post" action="bsexportExcel.php">  
							<label for="ovenID">หมายเลขเครื่อง :</label>
						
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="McNo" id="McNo" value="MC-001">
							  <label class="form-check-label" for="Status">McNo#1</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="McNo" id="McNo" value="MC-002">
							  <label class="form-check-label" for="Status">McNo #2</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="McNo" id="McNo" value="MC-003">
							  <label class="form-check-label" for="Status">McNo #3</label>
							</div>
							
							<label for="beginDate">วันที่เริ่มต้น (yyyy-mm-dd)</label>
							  <input type="date" name="beginDate"><br>
							  
							<label for="endDate">วันที่สุดท้าย (yyyy-mm-dd)</label>
							  <input type="date" name="endDate">
												
							<br>
							<input type="submit" name="submit" class = "submit-button" value="Submit">  
						</form>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
					  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>  <!--Modal content-->
			</div> <!-- Modal dialog -->
		</div> <!--class Modal -->
</div>		
<br>	 
<div class='container'>
	<a href="bssequence.php"><button type="button" class="btn btn-info">Edit Production Sequence and Planned Qty</button>
	<a href="bsdeleteSelect.php"><button type="button" class="btn btn-danger">Delete Production Plan</button><br><br>
	<a href="bsgraphmenu.php"><button type="button" class="btn btn-info">Visualization</button>	
	<a href="bsmember.php"><button type="button" class="btn btn-Danger">Add User</button>	
	<a href="bsmenu.php" class="btn btn-default" role="button">Go Back</a>

</div>

</body>
</html>