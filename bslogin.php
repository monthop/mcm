<!DOCTYPE html>
<html lang="en">
<head>
  <title>McMonitor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/cssjs/css/bootstrap.min.css">
  <script src="cssjs/js/jquery.min.js"></script>
  <script src="/cssjs/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Mc Monitoring Login Form</h2>
  <form class="form-horizontal" action="/bscheckuser.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">User:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" placeholder="Enter user" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="psw">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" placeholder="Enter password" name="psw" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Submit</button>
      </div>
		<a href="/bsmenu.php" class="btn btn-default" role="button">Go Back</a>
	  
    </div>
  </form>

</div>

</body>
</html>
