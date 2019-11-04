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
  <h2>Defect Quantity</h2>
  <p>Enter Defect Qty</p>
  <form class="form-inline" action="/bseditPlanDefect1.php">
    <div class="form-group">
      <label for="LotNo">Lot No:</label>
      <input type="text" class="form-control" id="LotNo" placeholder="Enter Lot No." name="LotNo">
    </div>
	<div class="form-group">
      <label for="seq">Defect.:</label>
      <input type="text" class="form-control" id="Defect" placeholder="Enter Quantity" name="Defect">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
  <br>
	<a href="bsdisplayPlan001-1.php"><button type="button" class="btn btn-Success">Go Back</button>	
</div>

</body>
</html>
