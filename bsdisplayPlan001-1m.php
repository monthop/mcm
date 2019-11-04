<!DOCTYPE html>
<html lang="en">
<head>
  <title>BMcPlan Tab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
.tableFixHead {
  overflow-y: auto;
  height: 580px;
}

.tableFixHead table {
  border-collapse: collapse;
  width: 100%;
}

.tableFixHead th,
.tableFixHead td {
  padding: 8px 16px;
}

.tableFixHead th {
  position: sticky;
  top: 0;
  background: #eee;
}
</style>

	<div class='container'>
		<h2 style="color:Tomato;">Production Plan for MC-001</h2>

		<div class='row-fluid'>
			<div class='col-xs-8'>
				<div class='table-responsive'>
					<div class="tableFixHead">
					<table border='1' class='table table-hover table-inverse table-bordered table-sm '>  
						<thead class = "thead-dark">
						<tr>
						<th>ID</th>
						<th>timestamp</th>
						<th>LotNo</th>
						<th>McNo</th>
						<th>ItemNo</th>
						<th>PlannedQty</th>
						<th>Status</th>
						<th>Sequence</th>
						<th>Start</th>
						<th>Run</th>
						<th>Stop</th>
						<th>ProducedQty</th>
						<th>CT</th>
						<th>AvailableTime</th>
						<th>Ideal CT</th>
						<th>Defect</th>
						</tr>
						</thead>
        
						<tbody>
							<?php
							include("bsconnectm.php"); 
							//declare variables
							$ID = $McNo = $ItemNo = $LotNo = "";
							$PlannedQty = $Status = $StartDateTime = $RunDateTime = $StopDateTime = $ProducedQty = "";
							$AQty = $AvTime = $CycleTime = $TotalDefect = "";

							$sql = "SELECT * FROM mcmonitoring.plandata WHERE McNo = 'MC-001' ORDER BY ID DESC;";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while($row = mysqli_fetch_array($result))
								{
									echo "<tr>";
									echo "<td>".$row['ID']."</td>";
									echo "<td>".$row['timestamp']."</td>";
									echo "<td>".$row['LotNo']."</td>";
									echo "<td>".$row['McNo']."</td>";
									echo "<td>".$row['ItemNo']."</td>";
									echo "<td>".$row['PlannedQty']."</td>";
									echo "<td>".$row['Status']."</td>";
									echo "<td>".$row['Sequence']."</td>";
									echo "<td>".$row['StartDateTime']."</td>";
									echo "<td>".$row['RunDateTime']."</td>";
									echo "<td>".$row['StopDateTime']."</td>";
									echo "<td>".$row['ProducedQty']."</td>";
									echo "<td>".$row['AQty']."</td>";
									echo "<td>".$row['AvTime']."</td>";
									echo "<td>".$row['CycleTime']."</td>";
									echo "<td>".$row['TotalDefect']."</td>";
									echo "</tr>";
								}
							} else {
								//echo "0 results";
							} 
							$conn->close();
							?> 
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class='container'>
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

				<form method="post" action="bsinsertPlandata001m.php">  
				
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

	<a href="/bssequence1m.php" class="btn btn-warning" role="button">Edit Sequence</a>
	<a href="/bsdeleteSelect1m.php" class="btn btn-success" role="button">Delete Record</a>
	<a href="/bseditorm.php" class="btn btn-info" role="button">Go Back</a>
</div>

</body>
</html>



