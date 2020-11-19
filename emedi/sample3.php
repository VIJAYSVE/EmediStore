<!DOCTYPE html>
<html>
<head>
<title>invoice</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {
    font-family: "Lato", sans-serif;
	background-color:	#008B8B;
}

.sidenav {
    height: 100%;
    width: 18%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #ffffb3;
    overflow-x: hidden;
    transition: 0.1s;
    padding-top: 60px;
	
}

.sidenav .closebtn {
	width:100%;
    position: absolute;
    top: 0;
    left: 0.2px;
    font-size: 30px;
	border:2px solid black;
	border-radius:20px;
	box-shadow: 0px 10px 10px #888888;
}

.button_open{
	width:60px;
	background-color:#00b3b3;
	border:1px solid white;
	}

#main {
    transition: margin-left .50s;
    padding: 0px;
	margin-left:18%;
	height:100%;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

	
.background{
	margin:60px;
	padding-top:0px;
	padding-bottom:50px;
	padding-left:50px;
	padding_right:80px;
	background-image: url(img/background.png);
	height:400px;
	width: 700px;
	background-repeat:no-repeat;
	background-size: 100% 100%;
	border:2px solid orange;
	box-shadow: 10px 10px 10px #888888;
	}
	
	
.sidenav h2 {
	font-size:25px;
  text-align: left;
  margin-left:30px;
  color:cyan;
}
.sidenav input {
  display: block;
  visibility: hidden;
}
.sidenav label {
	width:70%;
  display: block;
  padding: 0.5em;
  text-align: center;
  border: 1px solid black;
  color: red;
   background-color: green;
   box-shadow: 0px 10px 10px #888888;
}
.sidenav label:hover {
  color: #000;
}
.sidenav label::before {
  font-family: Consolas, monaco, monospace;
  font-weight: bold;
  font-size: 15px;
  content: "+";
  vertical-align: text-top;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-right: 0px;
  
}
.sidenav #expand {
  height: 0px;
  width:80%;
  overflow: hidden;
  transition: height .4s;
  background-color: orange;
   box-shadow: 10px 10px 5px #888888;
}

.sidenav #newinvoice{
	background-color:grey;
	}
.sidenav #toggle:checked ~ #expand {
  height: 120px;
}
.sidenav #toggle:checked ~ label::before {
  content: "-";
}
.sidenav #toggle1:checked ~ #expand {
  height: 120px;
}
.sidenav #toggle1:checked ~ label::before {
  content: "-";
  }
.sidenav #toggle2:checked ~ #expand {
  height: 120px;
}
.sidenav #toggle2:checked ~ label::before {
  content: "-";
  }
.sidenav #toggle3:checked ~ #expand {
  height: 120px;
  
}
.sidenav #toggle3:checked ~ label::before {
  content: "-";
  }



div.gallery {
    margin-left:50px;
	margin-top:50px;
    border: 1px solid #ccc;
    float: left;
    width: 150px;
	-webkit-transition: width .2s, height .2s, -webkit-transform .02s; /* Safari */
    transition: width .2s, height .2s, transform .02s;
}

div.gallery:hover {
    border: 1px solid #777;
	background-color:#f2f2f2;
	 -webkit-transform: rotate(10deg); /* Safari */
    transform: rotate(10deg); 
}

div.gallery img {
    width: 100%;
    height: auto;
}
div.middle {
  position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}
div.gallery_text {
  background-color: #4CAF50;
  color: white;
  font-size: 12px;
  padding: 10px 10px;
}



</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <button type="button" href="javascript:void(0)" class="closebtn" autofocus onclick="closeNav()">Collapse</button>
  <center>
  <input id="toggle" type="checkbox" checked>
  <label for="toggle">Invoices</label>
  <div id="expand">
    <section id="newinvoice">
      <a href="javascript:window.open('ebill.html','mywindowtitle','width=1360,height=650')"><h2>New Invoice</h2></a>
    </section>
	<section>
      <h2>Invoices List</h2>
    </section>
  </div>
  </center><br/><br/><br/>
  
  <center>
  <input id="toggle1" type="checkbox" checked>
  <label for="toggle1">Items</label>
  <div id="expand">
    <section id="newinvoice">
      <a href=""><h2>Add Item</h2></a>
    </section>
	<section>
      <h2>Open List</h2>
    </section>
  </div>
  </center><br/><br/><br/>
  
   <center>
  <input id="toggle2" type="checkbox" checked>
  <label for="toggle2">Stock</label>
  <div id="expand">
    <section id="newinvoice">
      <a href=""><h2>Check Stock</h2></a>
    </section>
	<section>
      <h2>Order Stock</h2>
    </section>
  </div>
  </center><br/><br/><br/>
  
   <center>
  <input id="toggle3" type="checkbox" checked>
  <label for="toggle3">Invoices</label>
  <div id="expand">
    <section id="newinvoice">
      <a href=""><h2>New Invoice</h2></a>
    </section>
	<section>
      <h2>Invoices List</h2>
    </section>
  </div>
  </center><br/></br><br/></br><br/></br>
  </div>

<div id="main">
  <button autofocus class="button_open"><span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span></button>
  
  <nav class="navbar navbar-inverse" style="background-color:#008080; border:1px solid white; padding:5px; float:right; width:94%;">
  <div class="container-fluid">
    <div class="navbar-header" style="margin-left:10%;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">E-MediStore</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-home" style="padding-right:5px;"></span> About</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-earphone" style="padding-right:5px;"></span>LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
  <br/><br/><br/><br/>
  
  
	<div class="background">
	
		<div class="gallery">
		  <a target="_blank" href="www.google.com">
			<img src="images/newinvoice.png" alt="Trolltunga Norway" width="200" height="300">
		  </a>
		  <div class="middle">
			<div class="gallery_text">New Invoice</div>
		  </div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="img_forest.jpg">
			<img src="images/newinvoice.png" alt="Forest" width="200" height="300">
		  </a>
		  <div class="middle">
			<div class="gallery_text">Add Item</div>
		  </div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="img_lights.jpg">
			<img src="images/newinvoice.png" alt="Northern Lights" width="200" height="300">
		  </a>
		  <div class="middle">
			<div class="gallery_text">Item List</div>
		  </div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="img_mountains.jpg">
			<img src="images/newinvoice.png" alt="Mountains" width="200" height="300">
		  </a>
		  <div class="middle">
			<div class="gallery_text">New Invoice</div>
		  </div>
		</div>
		
		<div class="gallery">
		  <a target="_blank" href="img_lights.jpg">
			<img src="images/newinvoice.png" alt="Northern Lights" width="200" height="300">
		  </a>
		  <div class="middle">
			<div class="gallery_text">Order</div>
		  </div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="img_mountains.jpg">
			<img src="images/newinvoice.png" alt="Mountains" width="200" height="300">
		  </a>
		  <div class="middle">
			<div class="gallery_text">New Invoice</div>
		  </div>
		</div>
		
	</div>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
</body>
</html> 
