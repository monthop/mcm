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
		<h2 style="color:Tomato;">Production Data All Machines</h2>

		<div class='row-fluid'>
			<div class='col-xs-8'>
				<div class='table-responsive'>
					<div class="tableFixHead">
					<table border='1' class='table table-hover table-inverse table-bordered table-sm '>  
						<thead class = "thead-dark">
						<tr>
						<th>ID</th>
						<th>timestamp</th>
						<th>McNo</th>
						<th>LotNo</th>
						<th>ItemNo</th>
						<th>StartTime</th>
						<th>RunTime</th>
						<th>StopTime</th>
						<th>TotalQty</th>
						<th>TotalDefect</th>
						<th>CycleTime</th>
						</tr>
						</thead>
        
						<tbody>
							<?php
							include("bsconnect.php"); 
							//declare variables
							$ID = $McNo = $ItemNo = $LotNo = "";
							$PlannedQty = $Status = $StartDateTime = $RunDateTime = $StopDateTime = $ProducedQty = "";
							$AQty = $AvTime = $CycleTime = $TotalDefect = "";

							$sql = "SELECT * FROM mcmonitoring.productiondata ORDER BY McNo,LotNo DESC;";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while($row = mysqli_fetch_array($result))
								{
									echo "<tr>";
									echo "<td>".$row['ID']."</td>";
									echo "<td>".$row['timestamp']."</td>";
									echo "<td>".$row['McNo']."</td>";
									echo "<td>".$row['LotNo']."</td>";
									echo "<td>".$row['ItemNo']."</td>";
									echo "<td>".$row['StartTime']."</td>";
									echo "<td>".$row['RunTime']."</td>";
									echo "<td>".$row['StopTime']."</td>";
									echo "<td>".$row['TotalQty']."</td>";
									echo "<td>".$row['TotalDefect']."</td>";
									echo "<td>".$row['Qty']."</td>";
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
	  <br>
	  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
		Insert Production Data
	  </button>
	<!-- The Modal -->
	  <div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
		  
			<!-- Modal Header -->
			<div class="modal-header">
			  <h4 class="modal-title"><b>ใส่ผลผลิต</b></h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body">

				<form method="post" action="bspostmysql2-001.php">  
				
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
						<label for="ItemNo">Item/Part No.:</label>
						<input type="text" class="form-control" id="ItemNo" placeholder="เลขล็อต หรือ เลขขคำสั่งซื้อ" name="ItemNo">
					</div>
					
					<div class="form-group">
						<label for="StartTime">Start Time:</label>
						<select name="StartTime" class="form-control" >
							<option selected>สถานะเครื่อง</option>
							<option value=0>ยังไม่เปิดเครื่อง</option>
							<option value=1>เปิดเครื่อง</option>
						</select>
					</div>
					<div class="form-group">
						<label for="RunTime">Run Time:</label>
						<select name="RunTime" class="form-control" >
							<option selected>สถานะการผลิต</option>
							<option value=0>ยังไม่ผลิต</option>
							<option value=1>กำลังผลิต</option>
						</select>
					</div>
					<div class="form-group">
						<label for="StopTime">Stop Time:</label>
						<select name="StopTime" class="form-control" >
							<option selected>สถานะการผลิต</option>
							<option value=0>ยังไม่จบงาน</option>
							<option value=1>จบงาน</option>
						</select>
					</div>

					<div class="form-group">
						<label for="TotalQty">จำนวนผลิตทั้งหมด:</label>
						<input type="text" class="form-control" id="TotalQty" placeholder="ใส่จำนวนที่ผลิตได้ทั้งหมด" name="TotalQty">
					</div>
					<div class="form-group">
						<label for="TotalDefect">จำนวนผลิตเสีย:</label>
						<input type="text" class="form-control" id="TotalDefect" placeholder="ใส่จำนวนที่ผลิตเสีย" name="TotalDefect">
					</div>

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
	<a href="/bsdeleteData.php" class="btn btn-warning" role="button">Delete Record</a>
	<a href="/bseditor.php" class="btn btn-info" role="button">Go Back</a>	
	</div>
	<br>
</body>
</html>



