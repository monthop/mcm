<!DOCTYPE html>
<html lang="en">
<head>
  <title>McMonitor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/cssjs/css/bootstrap.min.css">
  <script src="cssjs/js/jquery.min.js"></script>
  <script src="/cssjs/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Machine Monitoring Project V4.0</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="/bsabout.php">About</a></li>
        <li><a href="/bscontact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/bslogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Machine Monitoring Project</h1>      
    <p>โครงการของกรมส่งเสริมอุตสาหกรรม</p>
  </div>
</div>

<div class="container-fluid bg-1 text-center">
  <img src="/photo/dip.jpg"  alt="DIP" width="350" height="350">
  <h3>ร่วมมือกับ</h3>
</div>
<div class="container-fluid bg-1 text-center">
  <img src="/photo/kmutnb.png" alt="TGI" width="350" height="350">
</div>
<br>
<footer class="container-fluid text-center">
  <p>ดำเนินโครงการโดย ดร.พสิษฐ์ ธนาโชติอนันต์กุล และทีมงาน</p>
  <p>สงวนลิขสิทธิ์ @2019</p>
</footer>

</body>
</html>
