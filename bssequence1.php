<!DOCTYPE html>
<html lang="en">
<head>
  <title>Plan Sequence</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Adjust Production Sequence</h2>
  <p>Each plan will be loaded by sequence number and ID number</p>
  <form class="form-inline" action="/bseditPlan1.php">
    <div class="form-group">
      <label for="ID">ID No:</label>
      <input type="text" class="form-control" id="ID" placeholder="Enter ID No." name="ID">
    </div>
    <div class="form-group">
      <label for="seq">Sequence no.:</label>
      <input type="text" class="form-control" id="Sequence" placeholder="Enter Sequence No." name="Sequence">
    </div>
	<div class="form-group">
      <label for="seq">PlannedQty.:</label>
      <input type="text" class="form-control" id="PlannedQty" placeholder="Enter Quantity" name="PlannedQty">
    </div>

    <button type="submit" class="btn btn-info">Submit</button>
  </form>
  <br>
	<a href="bsdisplayPlan001-1.php"><button type="button" class="btn btn-Success">Go Back</button>	
</div>

</body>
</html>
