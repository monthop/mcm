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
        <li class="active" ><a href="http://localhost:8080/?orgId=1" target="_blank">Goto Grafana</a></li>
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
    <p>โครงการของกรมส่งเสริมอุตสาหกรรม และสถาบันไทย-เยอรมัน</p>
  </div>
</div>

<div class="container">
  <h2>Select an operation</h2>
  
    <div class="dropdown">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Display Production Plan
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
		  <li><a href="/bsdisplayPlan001-1.php">MC-001</a></li>
		  <li><a href="/bsdisplayPlan002-1.php">MC-002</a></li>
		  <li><a href="/bsdisplayPlan003-1.php">MC-003</a></li>
		  <li><a href="/bsdisplayPlan-1.php">All Machine</a></li>
		</ul>
	</div>
	<br>
    <div class="dropdown">	
	  	<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Display Production Data
		<span class="caret"></span></button>
		<ul class="dropdown-menu dropdown-menu-middle">
		  <li><a href="/bsdisplayProduction001.php">Data MC-001</a></li>
		  <li><a href="/bsdisplayProduction002.php">Data MC-002</a></li>
		  <li><a href="/bsdisplayProduction003.php">Data MC-003</a></li>
		  <li><a href="/bsdisplayProduction.php">Data All Machine</a></li>
		</ul>
	</div>
	<br>
	<div>
		<!-- Button to Open the Modal -->
	  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
		Insert Production Plan
	  </button>

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
			<!-- Modal footer -->
			<div class="modal-footer">
			  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
	  </div>
	</div>
	
	<br>
	  <a href="bssequence.php"><button type="button" class="btn btn-warning">Edit Production Sequence</button><br><br>
	  <a href="bsgraphmenu.php"><button type="button" class="btn btn-info">Visualization</button>	
	  <a href="bsmember.php"><button type="button" class="btn btn-Danger">Add User</button>		
      
</div>


<div class='container'>
	<br>
	<a href="/bsmenu.php" class="btn btn-default" role="button">Go Back</a>
</div>

</body>
</html>