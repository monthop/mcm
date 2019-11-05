<?php
include("bsconnect.php");
$McNo = "";
$beginDate = "";
$endDate = "";
//Change the password to match your configuration
  $link = mysqli_connect("db", "admin", "admin@2019", "mcmonitoring");
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  //echo "<br>";
	$McNo = $_POST["McNo"];
	$beginDate = $_POST["beginDate"];
	$endDate = $_POST["endDate"];
	
	//echo $ovenID;
	//echo "<br>";
	//echo $beginDate;
	//echo "<br>";
	//echo $endDate;
	//echo "<br>";
	
	$McNoStr = "'".$McNo."'";
	$beginDateStr = "'".$beginDate."'";
	$endDateStr = "'".$endDate."'";
	
	$header = "McNo";

    $delimiter = ",";
	$filename = $header . $McNo . '-' . date('Ymd') . ".csv";
	
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
    
	//set column headers
	$fields = array('ID', 'timestamp', 'LotNo', 'ItemNo', 'McNo', 'StartTime', 'RunTime', 'BreakTime', 'StopTime', 'TotalQty', 'TotalDefect', 'Qty');
	fputcsv($f, $fields, $delimiter);
	$sql = "SELECT * FROM productiondata WHERE productiondata.timestamp >= $beginDateStr AND productiondata.timestamp <= $endDateStr;";
	$result = $link->query($sql);
	if ($result->num_rows > 0) {
			// output data of each row
		while($row = $result->fetch_assoc()) {
			$lineData = array($row['ID'], $row['timestamp'], $row['LotNo'], $row['ItemNo'], $row['McNo'], $row['StartTime'], $row['RunTime'], $row['BreakTime'], $row['StopTime'], $row['TotalQty'], $row['TotalDefect'], $row['Qty']);
			fputcsv($f, $lineData, $delimiter);		
		}
		//move back to beginning of file
		fseek($f, 0);
		//set headers to download file rather than displayed
		header('Content-Type: text/csv');
		header('Content-Disposition: attachment; filename="' . $filename . '";');
	 
		//output all remaining data on a file pointer
		fpassthru($f);
		
	} else {
		echo "0 results";
	}

$conn->close();
?> 


