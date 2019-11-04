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

<table border='1' class="table table-striped">                     
    <div class="table responsive">
        <thead>
		<tr>
		<th>ID</th>
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
		include("bsconnect.php"); 
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
			echo "0 results";
		} 
		$conn->close();
		?> 
		</tbody>
	</div>
</table>
</body>
</html>



