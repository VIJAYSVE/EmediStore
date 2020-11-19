<!DOCTYPE html>
<html>
<head>
<title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
var check = function() {
      if (document.getElementById('password').value ==
          document.getElementById('confirm_password').value) {
          document.getElementById('message').style.background= 'green';
          document.getElementById('message').checked = 'checked';
      } else {
      		document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'not matching';
      }
  }
</script>



<style>
body{
	background:url(background.png);
	}
	
li{
	font-size:20px;
	}
li:hover{
	color:green;
	}


input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

#option {
    width: 50%;
	background-color:#79d2a6;
	font-size:16px;
	float:right;
    padding: 12px 20px;
    margin: 20px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 40px;
    box-sizing: border-box;
}

label{
	float:left;
	font-size:15px;
	}

input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 50%;
	font-size:20px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 20px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
	border:2px solid orange;
	
}

h2{
	color:#003333;
	}
h1{
	font-size:26px;
	margin:10px;
	color:orange;
	margin-top:30px;
	}
.box {
	float:right;
	text-align:center;
	margin:50px;
    border-radius: 5px;
    background-color: #ffdab3;
    padding: 20px;
	width:400px;
	box-shadow: 0px 10px 10px #888888;
	
}


#login{
	width:50%;
	height:70px;
	float:left;
	background-color:#ff704d;
	}
#signup{
	width:50%;
	height:70px;
	float:right;
	background-color:#79a6d2;
	}


#message {
  width: 28px;
  height: 28px;
  position: relative;
  margin-top: 50px;
  background: #fcfff4;
  }
  



</style>
<body>
<nav class="navbar navbar-inverse" style="background-color:#009999; padding:7px; border:white;">
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
        <li><a href="#"><span class="glyphicon glyphicon-home" style="padding-right:5px;"></span> Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-earphone" style="padding-right:5px;"></span>Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="box">
<div id="login">
<h2><a href="login.html">Login</a></h2>
</div>
<div id="signup">
<h2>SignUp</h2>
</div>
<h1>SignUp</h1>
  <form action="/action_page.php" method="post">
	
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="firstname" placeholder="First Name" required>
	
	<label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" placeholder="Last Name" required>
	
	<label for="email">Email:</label>
    <input type="text" id="email" name="email" placeholder="Email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Password" size="20" required onkeyup='check();'>
	
	<label for="confirm_password"> Confirm Password:</label>
   <span><input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" size="20" required onkeyup='check();'>
	<!--<input id='message' type="checkbox" value=""></span>-->

	<label for="mobile">Phone:</label>
    <input type="text" id="phone" name="phone" placeholder="Phone" size="10" required>
  
    <input type="submit" value="Register">
  </form>
</div>
</div>


</body>
</html>
