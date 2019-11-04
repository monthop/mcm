<!DOCTYPE html>
<html lang="en">
<head>
  <title>McMonitor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    <p>โครงการของกรมส่งเสริมอุตสาหกรรม และสถาบันไทย-เยอรมัน</p>
  </div>
</div>

<div class="container-fluid bg-1 text-center">
  <img src="dip.jpg"  alt="DIP" width="350" height="350">
  <h3>ดำเนินการโดย</h3>
</div>
<div class="container-fluid bg-1 text-center">
  <img src="TGI.jpg" alt="TGI" width="350" height="350">
  <h3>ดำเนินการโดย</h3>
</div>

<div class="container-fluid bg-3 text-center">    
  <h3>ประเภทของเซนเซอร์ และ Output</h3><br>
  <div class="row">
    <div class="col-sm-3 text left">
      <p>นับจำนวนด้วย Proximity switch</p>
      <img src="proximity.png" class="img-responsive" style="width:50%" alt="Image">
    </div>
    <div class="col-sm-3 text left"> 
      <p>นับจำนวนด้วย  Laser Light</p>
      <img src="laser.png" class="img-responsive" style="width:50%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>นับความยาวด้วย Rotary encoder</p>
      <img src="encoder.png" class="img-responsive" style="width:50%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>ตรวจวัดอุณหภูมิ และความชื้น</p>
      <img src="tempHumi.png" class="img-responsive" style="width:50%" alt="Image">
    </div>
	<div class="col-sm-3">
      <p>ตรวจวัดอัตราการไหลของของเหลว</p>
      <img src="flow.png" class="img-responsive" style="width:50%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>อ่านค่าด้วย RS485</p>
      <img src="rs485.png" class="img-responsive" style="width:50%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>ตรวจวัดความสั่นสะเทือน</p>
      <img src="vibration.png" class="img-responsive" style="width:50%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>การแสดงผลทางกราฟ Visualization</p>
	  <img src="graph.png" class="img-responsive" style = "width:70%" alt="Image">
    </div>
  </div>
</div>*/

<br>
<footer class="container-fluid text-center">
  <p>ดำเนินโครงการโดย ดร.พสิษฐ์ ธนาโชติอนันต์กุล และทีมงาน</p>
  <p>สงวนลิขสิทธิ์ @2019</p>
</footer>

</body>
</html>