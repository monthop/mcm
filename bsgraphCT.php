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
	/* middle position 
	midimg {
	  display: block;
	  margin-left: auto;
	  margin-right: auto;
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
      <a class="navbar-brand" href="#">Machine Monitoring Project</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/bsmenu.php">Home</a></li>
		<li><a href="/bseditor.php">Operation</a></li>
		<li><a href="/bsabout.php">About</a></li>
        <li class="active" ><a href="http://localhost:8080/?orgId=1" target="_blank">Grafana</a></li>
        <li class="dropdown">
		    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="/bsgraphproduction.php">productionData</a></li>
				<li><a href="/bsgraphCT.php">cycle time</a></li>
				<li><a href="/bsgauge.php">Gauge</a></li> 
			</ul>
		</li>
		<li><a href="/bscontact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/bsmenu.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
	  	  <ul class="nav navbar-nav navbar-right">
        <li><a href="/bseditor.php"><span class="glyphicon glyphicon-log-in"></span> Back</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron">
  <div class="container text-center">
    <h1>Machine Monitoring Project</h1>      
    <p>โครงการของกรมส่งเสริมอุตสาหกรรม และ มจพ</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>กราฟแสดงผลลัพธ์การผลิต</h3><br>
  <p>Cycle Time</p>
	
	<div class="row">
		<div class="col-md-7">
		  <p>MC-001</p>
			<div class="embed-responsive embed-responsive-16by9">
					<iframe src="http://localhost:3000/d-solo/INbrNT_mz/cycletime?orgId=1&from=1546923105480&to=1548522786752&panelId=2"
					width="450" height="200" frameborder="1" ></iframe>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-7">
		  <p>MC-002</p>
			<div class="embed-responsive embed-responsive-16by9">
					<iframe src="http://localhost:3000/d-solo/INbrNT_mz/cycletime?orgId=1&from=1546923105480&to=1548522786752&panelId=3"					
					width="450" height="200" frameborder="1" ></iframe>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-7">
		  <p>MC-003</p>
			<div class="embed-responsive embed-responsive-16by9">
					<iframe src="http://localhost:3000/d-solo/INbrNT_mz/cycletime?orgId=1&from=1546923105480&to=1548522786752&panelId=4"
					width="450" height="200" frameborder="1" ></iframe>
			</div>
		</div>
	</div>	
	
	
</div>
<br><br>

<footer class="container-fluid text-center">
  <p>ดำเนินโครงการโดย ดร.พสิษฐ์ ธนาโชติอนันต์กุล และทีมงาน</p>
  <p>สงวนลิขสิทธิ์ @2019</p>
</footer>

</body>
</html>
