<!DOCTYPE html>
<html lang="en">
<head>
  <title>BS-McHome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 20px;
    }
	// Colors
@brand-primary: #29b5a8;
@brand-secondary: #ff8300;
@gray: #6b7381;
@gray-light: lighten(@gray, 15%);
@gray-lighter: lighten(@gray, 30%);;

// Button Colors
@btn-default-color: @gray;
@btn-default-bg: @gray-lighter;

// Toggle Sizes
@toggle-default-size: 1.5rem;
@toggle-default-label-width: 4rem;
@toggle-default-font-size: .75rem;


// General Styles for Demo
body {
	font-family: 'Montserrat', 'Lato', 'Open Sans', 'Helvetica Neue', Helvetica, Calibri, Arial, sans-serif;
	color: @gray;
	background: #f2f2f2;
}
.jumbotron {
  background: @gray;
  color: @gray-lighter;
  h1 {
    color: #fff;
  }
}
.example {
  margin: 4rem auto;
  > .row {
    margin-top: 2rem;
    height: 5rem;
    vertical-align: middle;
    text-align: center;
    border: 1px solid fade(@gray-lighter,50%);
    &:first-of-type {
      border:none;
      height: auto;
      text-align: left;
    }
  }
  h3 {
    font-weight: 400;
    > small {
      font-weight: 200;
      font-size: .75em;
      color: @gray-light;
    }
  }
  h6 {
    font-weight: 700;
    font-size: .65rem;
    letter-spacing: 3.32px;
    text-transform: uppercase;
    color: @gray-lighter;
    margin: 0;
    line-height:5rem;
  }
  .btn-toggle {
    top: 50%;
    transform: translateY(-50%);
  }
}



// Mixin for Switch Colors
// Variables: @color, @bg, @active-bg
.toggle-color(@color: @btn-default-color; @bg: @btn-default-bg; @active-bg: @brand-primary;) {
  color: @color;
  background: @bg;
  &:before,
  &:after {
    color: @color;
  }
  &.active {
    background-color: @active-bg;
  }
}

// Mixin for Default Switch Styles
// Variables: @size, @margin, @color, @bg, @active-bg, @font-size
.toggle-mixin(@size: @toggle-default-size; @margin: @toggle-default-label-width; @font-size: @toggle-default-font-size;) {
  // color: @color;
  // background: @bg;
  margin: 0 @margin;
  padding: 0;
  position: relative;
  border: none;
  height: @size;
  width: @size * 2;
  border-radius: @size;
  
  &:focus,
  &.focus {
    &,
    &.active {
      outline: none;
    }
  }
  
  &:before,
  &:after {
    line-height: @size;
    width: @margin;
    text-align: center;
    font-weight: 600;
    // color: @color;
    font-size: @font-size;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: absolute;
    bottom: 0;
    transition: opacity .25s;
  }
  &:before {
    content: 'Off';
    left: -@margin;
  }
  &:after {
    content: 'On';
    right: -@margin;
    opacity: .5;
  }
  
  > .handle {
    position: absolute;
    top: (@size * .25) / 2;
    left: (@size * .25) / 2;
    width: @size * .75;
    height: @size * .75;
    border-radius: @size * .75;
    background: #fff;
    transition: left .25s;
  }
  &.active {
    transition: background-color .25s;
    > .handle {
      left: @size + ((@size * .25) / 2);
      transition: left .25s;
    }
    &:before {
      opacity: .5;
    }
    &:after {
      opacity: 1;
    }
  }
  
  &.btn-sm {
    &:before,
    &:after {
      line-height: @size - 2px;
      color: #fff;
      letter-spacing: .75px;
      left: @size * .275;
      width: @size * 1.55;
    }
    &:before {
      text-align: right;
    }
    &:after {
      text-align: left;
      opacity: 0;
    }
    &.active {
      &:before {
        opacity: 0;
      }
      &:after {
        opacity: 1;
      }
    }
  }
  
  &.btn-xs {
    &:before,
    &:after {
      display: none;
    }
  }
}



// Apply Mixin to different sizes & colors
.btn-toggle {
  
  .toggle-mixin;
  .toggle-color;
  
  &.btn-lg {
    .toggle-mixin(@size: 2.5rem; @font-size: 1rem; @margin: 5rem;);
  }
  
  &.btn-sm {
    .toggle-mixin(@font-size: .55rem; @margin: .5rem;);
  }
  
  &.btn-xs {
    .toggle-mixin(@size:1rem;@margin:0;)
  }
  
  &.btn-secondary {
    .toggle-color(@active-bg:@brand-secondary);
  }
}


  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="model.png" alt="" style = "width:20%">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="/bsabout.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/bscontact.php">Contact</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="/bslogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->

<div class="jumbotron">
  <div class="container text-center">
    <h1>Machine Monitoring Project</h1>      
    <p>โครงการของกรมส่งเสริมอุตสาหกรรม และ มจพ</p>
  </div>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="sales.jpg" class="mx-auto d-block" alt="Los Angeles" style = "width:50%">
    </div>
    <div class="carousel-item">
      <img src="production.jpg" class="mx-auto d-block" alt="Chicago" style = "width:50%">
    </div>
    <div class="carousel-item">
      <img src="management.jpg" class="mx-auto d-block" alt="New York" style = "width:50%">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Call Us or Send email for further information</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>+66.9.264.8640</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">pse.iot4.0@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

</body>
</html>
