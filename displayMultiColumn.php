<!DOCTYPE html>
<html lang="en">
<head>
  <title>QC Check Sheet</title>
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
  height: 220px;
}

.tableFixHead table {
  border-collapse: collapse;
  width: 220px;
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
.forcedWidth{
    width:200px;
    word-wrap:break-word;
    display:inline-block;
}
</style>

	<div class='container'>
		<h2 style="color:Tomato;">QC Check Sheet</h2>

		<div class='row-fluid'>
			<div class='col-xs-8'>
				<div class='table-responsive'>
					<div class="forceWidth">
					<table border='1' class='table table-hover table-inverse table-bordered'>  
						<thead class = "thead-dark">
						<tr>
						<th>LotNo</th>
						<th>Sample.</th>
						<th>Name</th>
						<th>D1</th>
						<th>D2</th>
						<th>D2OC</th>
							 <th>D311 </th>
							 <th>D312 </th>
							 <th>D31OC </th>
							 <th>D321 </th>
							 <th>D322 </th>
							 <th>D322OC </th>
							 <th>H112 </th>
							 <th>H1OC </th>
							 <th>H212 </th>
							 <th>H2OC </th>
							 <th>H312 </th>
							 <th>H3OC </th>
							 <th>H412 </th>
							 <th>H4OC </th>
							 <th>H512 </th>
							 <th>H5OC </th>
							 <th>H612 </th>
							 <th>H6OC </th>
							 <th>H712 </th>
							 <th>H7OC </th>
							 <th>H812 </th>
							 <th>H8OC </th>
							 <th>H912 </th>
							 <th>H9OC </th>
							 <th>H1012 </th>
							 <th>H10OC </th>
							 <th>H1112 </th>
							 <th>H11OC </th>
							 <th>H1212 </th>
							 <th>H12OC </th>
							 <th>T1 </th>
							 <th>T2 </th>
							 <th>T3 </th>
							 <th>T4 </th>
							 <th>T5 </th>
							 <th>T6 </th>
							 <th>T7 </th>
							 <th>T8 </th>
							 <th>T9 </th>
							 <th>T10 </th>
							 <th>T11 </th>
							 <th>T12 </th>
							 <th>T13 </th>
							 <th>T14 </th>
							 <th>T15 </th>
							 <th>T16 </th>
							 <th>T17 </th>
							 <th>T18 </th>
							 <th>T19 </th>
							 <th>T20 </th>
							 <th>P1 </th>
							 <th>P2 </th> 
							 <th>P3 </th> 
							 <th>P4 </th> 
							 <th>P5 </th> 
							 <th>P6 </th> 
							 <th>P7 </th> 
							 <th>P8 </th> 
							 <th>P9 </th> 
							 <th>P10 </th> 
							 <th>P11 </th> 
							 <th>P12 </th> 
							 <th>P13 </th> 
							 <th>P14 </th> 
							 <th>P15 </th> 
							 <th>P16 </th> 
							 <th>P17 </th> 
							 <th>P18 </th> 
							 <th>P19 </th> 
							 <th>P20 </th> 
							 <th>A21 </th> 
							 <th>A22 </th> 
							 <th>A23 </th> 
							 <th>A24 </th> 
							 <th>A25 </th> 
							 <th>A26 </th> 
							 <th>A27 </th> 
							 <th>A28 </th>

						</tr>
						</thead>
        
						<tbody>

							<?Php
							include("connectAnna.php");	
							//declare variables
							 $LotNo = "";
							 $Sample ="";
							 $Name ="";
							 $D1 = "";
							 $D2 = "";
							 $D2OC = "";
							 $D311 = "";
							 $D312 = "";
							 $D31OC = "";
							 $D321 = "";
							 $D322 = "";
							 $D322OC = "";
							 $H112 = "";
							 $H1OC = "";
							 $H212 = "";
							 $H2OC = "";
							 $H312 = "";
							 $H3OC = "";
							 $H412 = "";
							 $H4OC = "";
							 $H512 = "";
							 $H5OC = "";
							 $H612 = "";
							 $H6OC = "";
							 $H712 = "";
							 $H7OC = "";
							 $H812 = "";
							 $H8OC = "";
							 $H912 = "";
							 $H9OC = "";
							 $H1012 = "";
							 $H10OC = "";
							 $H1112 = "";
							 $H11OC = "";
							 $H1212 = "";
							 $H12OC = "";
							 $T1 = "";
							 $T2 = "";
							 $T3 = "";
							 $T4 = "";
							 $T5 = "";
							 $T6 = "";
							 $T7 = "";
							 $T8 = "";
							 $T9 = "";
							 $T10 = "";
							 $T11 = "";
							 $T12 = "";
							 $T13 = "";
							 $T14 = "";
							 $T15 = "";
							 $T16 = "";
							 $T17 = "";
							 $T18 = "";
							 $T19 = "";
							 $T20 = "";
							 $P1 = "";
							 $P2 = ""; 
							 $P3 = ""; 
							 $P4 = ""; 
							 $P5 = ""; 
							 $P6 = ""; 
							 $P7 = ""; 
							 $P8 = ""; 
							 $P9 = ""; 
							 $P10 = ""; 
							 $P11 = ""; 
							 $P12 = ""; 
							 $P13 = ""; 
							 $P14 = ""; 
							 $P15 = ""; 
							 $P16 = ""; 
							 $P17 = ""; 
							 $P18 = ""; 
							 $P19 = ""; 
							 $P20 = ""; 
							 $A21 = ""; 
							 $A22 = ""; 
							 $A23 = ""; 
							 $A24 = ""; 
							 $A25 = ""; 
							 $A26 = ""; 
							 $A27 = ""; 
							 $A28 = "";
								
							$sql = "SELECT * FROM annadb.sk82 where LotNo = '2535' ;";
							$result = $conn->query($sql);

							$rows = $result->num_rows;    // Find total rows returned by database
								if($rows > 0) {
									$cols = 1;    // Define number of columns
									$counter = 1;     // Counter used to identify if we need to start or end a row
									$nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns

									echo '<table-layout:fixed align="center" cellpadding="4" cellspacing="1">';
									while ($row = $result->fetch_array()) {
										if(($counter % $cols) == 1) {    // Check if it's new row
											echo '<tr>';	
										}
											echo "<td>".$row['LotNo']."</td>";
											echo "<td>".$row['Sample']."</td>";
											echo "<td>".$row['Name']."</td>";
											echo "<td>".$row['D1']."</td>";
											echo "<td>".$row['D2']."</td>";	
											echo "<td>".$row['D2OC']."</td>";		
											 echo "<td>".$row['D311']."</td>";
											 echo "<td>".$row['D312']."</td>";
											 echo "<td>".$row['D31OC']."</td>";
											 echo "<td>".$row['D321']."</td>";
											 echo "<td>".$row['D322']."</td>";
											 echo "<td>".$row['D322OC']."</td>";
											 echo "<td>".$row['H112']."</td>";
											 echo "<td>".$row['H1OC']."</td>";
											 echo "<td>".$row['H212']."</td>";
											 echo "<td>".$row['H2OC']."</td>";
											 echo "<td>".$row['H312']."</td>";
											 echo "<td>".$row['H3OC']."</td>";
											 echo "<td>".$row['H412']."</td>";
											 echo "<td>".$row['H4OC']."</td>";
											 echo "<td>".$row['H512']."</td>";
											 echo "<td>".$row['H5OC']."</td>";
											 echo "<td>".$row['H612']."</td>";
											 echo "<td>".$row['H6OC']."</td>";
											 echo "<td>".$row['H712']."</td>";
											 echo "<td>".$row['H7OC']."</td>";
											 echo "<td>".$row['H812']."</td>";
											 echo "<td>".$row['H8OC']."</td>";
											 echo "<td>".$row['H912']."</td>";
											 echo "<td>".$row['H9OC']."</td>";
											 echo "<td>".$row['H1012']."</td>";
											 echo "<td>".$row['H10OC']."</td>";
											 echo "<td>".$row['H1112']."</td>";
											 echo "<td>".$row['H11OC']."</td>";
											 echo "<td>".$row['H1212']."</td>";
											 echo "<td>".$row['H12OC']."</td>";
											 echo "<td>".$row['T1']."</td>";
											 echo "<td>".$row['T2']."</td>";
											 echo "<td>".$row['T3']."</td>";
											 echo "<td>".$row['T4']."</td>";
											 echo "<td>".$row['T5']."</td>";
											 echo "<td>".$row['T6']."</td>";
											 echo "<td>".$row['T7']."</td>";
											 echo "<td>".$row['T8']."</td>";
											 echo "<td>".$row['T9']."</td>";
											 echo "<td>".$row['T10']."</td>";
											 echo "<td>".$row['T11']."</td>";
											 echo "<td>".$row['T12']."</td>";
											 echo "<td>".$row['T13']."</td>";
											 echo "<td>".$row['T14']."</td>";
											 echo "<td>".$row['T15']."</td>";
											 echo "<td>".$row['T16']."</td>";
											 echo "<td>".$row['T17']."</td>";
											 echo "<td>".$row['T18']."</td>";
											 echo "<td>".$row['T19']."</td>";
											 echo "<td>".$row['T20']."</td>";
											 echo "<td>".$row['P1']."</td>";
											 echo "<td>".$row['P2']."</td>"; 
											 echo "<td>".$row['P3']."</td>"; 
											 echo "<td>".$row['P4']."</td>"; 
											 echo "<td>".$row['P5']."</td>"; 
											 echo "<td>".$row['P6']."</td>"; 
											 echo "<td>".$row['P7']."</td>"; 
											 echo "<td>".$row['P8']."</td>"; 
											 echo "<td>".$row['P9']."</td>"; 
											 echo "<td>".$row['P10']."</td>"; 
											 echo "<td>".$row['P11']."</td>"; 
											 echo "<td>".$row['P12']."</td>"; 
											 echo "<td>".$row['P13']."</td>"; 
											 echo "<td>".$row['P14']."</td>"; 
											 echo "<td>".$row['P15']."</td>"; 
											 echo "<td>".$row['P16']."</td>"; 
											 echo "<td>".$row['P17']."</td>"; 
											 echo "<td>".$row['P18']."</td>"; 
											 echo "<td>".$row['P19']."</td>"; 
											 echo "<td>".$row['P20']."</td>"; 
											 echo "<td>".$row['A21']."</td>"; 
											 echo "<td>".$row['A22']."</td>"; 
											 echo "<td>".$row['A23']."</td>"; 
											 echo "<td>".$row['A24']."</td>"; 
											 echo "<td>".$row['A25']."</td>"; 
											 echo "<td>".$row['A26']."</td>"; 
											 echo "<td>".$row['A27']."</td>"; 
											 echo "<td>".$row['A28']."</td>";

										if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
											echo '</tr>';	
										}
										$counter++;    // Increase the counter
									}
									$result->free();
									if($nbsp > 0) { // Add unused column in last row
										for ($i = 0; $i < $nbsp; $i++)	{ 
											echo '<td>&nbsp;</td>';		
										}
										echo '</tr>';
									}
											echo '</table>';
								}
							?>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>