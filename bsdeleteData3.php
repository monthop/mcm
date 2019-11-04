<!DOCTYPE html>
<html lang="en">
<head>
  <title>delete production data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Selection Record to delete</h2>
  <form class="form-inline" action="/bsdeleteProduction3.php">
    <div class="form-group">
      <label for="FromID">From ID No:</label>
      <input type="text" class="form-control" id="FromID" placeholder="Enter ID No." name="FromID">
    </div>
    <div class="form-group">
      <label for="ToID">To ID no.:</label>
      <input type="text" class="form-control" id="ToID" placeholder="Enter Sequence No." name="ToID">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
  <br>
	<a href="bsdisplayProduction003.php"><button type="button" class="btn btn-Success">Go Back</button>	
</div>

</body>
</html>
