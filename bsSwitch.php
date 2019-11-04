<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>


<style>

.onoffswitch {
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch-checkbox {
    display: none;
}
.onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 20px;
}
.onoffswitch-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch-inner:before {
    content: "ON";
    padding-left: 10px;
    background-color: #34A7C1; color: #FFFFFF;
}
.onoffswitch-inner:after {
    content: "OFF";
    padding-right: 10px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch-switch {
    display: block; width: 18px; margin: 6px;
    background: #FFFFFF;
    position: absolute; top: 0; bottom: 0;
    right: 56px;
    border: 2px solid #999999; border-radius: 20px;
    transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0px; 
}
</style>



<body>

<div class="container">
  <h2>Bootstrap Switch Button</h2>
  <p class="page-header">Simple Toggle Buttons for Bootstrap 3</p>
  <h4>Large</h4>
  <div class="btn-group btn-toggle"> 
    <a href ="http://192.168.43.198/humion" button class="btn btn-lg btn-default">ON</button></a>
    <a href ="http://192.168.43.198/humioff" button class="btn btn-lg btn-primary active">OFF</button></a>
  </div>
  <p>  </p>
  <div class="onoffswitch">
    
	<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <a href ="http://192.168.43.198/humion" span class="onoffswitch-inner"></span></a>
        <a href ="http://192.168.43.198/humioff" span class="onoffswitch-switch"></span></a>
    </label>
  </div>

</div>


  
</body>
</html>




