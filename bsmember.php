<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert A Member</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/cssjs/css/bootstrap.min.css">
  <script src="cssjs/js/jquery.min.js"></script>
  <script src="/cssjs/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Insert Member Name</h2>
  <form action="/bsinsertMember.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<div class='container'>
<br>
	<a href="/bseditor.php" class="btn btn-info" role="button">Go Back</a>
</div>
</body>
</html>
 
