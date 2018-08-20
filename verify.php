<?php

$con = mysqli_connect("localhost","root","");

$db = mysqli_select_db($con,"Procurement");
echo '<html>
   <head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      
    	<style>
  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button2{
	position: absolute;
	top:74%;
	border-radius: 12px;
	left:45%;
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);} 	

	.panel-heading {
    padding: 5px 50px;
}

.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}
img{
-webkit-transition: -webkit-transform .8s ease-in-out;
transition: transform .8s ease-in-out;
}
img:hover{
-webkit-transform: rotate(360deg);
transform: rotate(360deg);
}
.img-circle{
	position: absolute;
	top: 3%;
	left :0%;
}
.profile-img {
	width: 96px;
	height: 96px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}
        </style>
       <body>
   	<div style="background:white; height:200px;"> <span text-align="center">
	<h4 align="center" style="font-family:calibri">Rashtreeya Sikshana Samithi Trust</h4>
	<h2 align="center"style="color:slategray;font-family:calibri;"><strong>R V College of Engineering</strong></h2>
	<p align="center" style="font-family:calibri">Autonomous Institution under Visvesvaraya Technological University, Belagavi
	<br>Approved By AICTE, New Delhi, Accredited By NBA, New Delhi
	<br>R V Vidyanikethan Post, Mysore Road, Bengaluru-560059</p>
	<h2 align="center" style="color:slategray;font-family:calibri"><strong>Procurement Process</strong></h2></span></div>
	
	<span style="position:absolute;top:0%;left:85%;"><br>Phone:080-67178020/21<br>080-67178026/8164<br>Fax:080-28600337<br>Website:www.rvce.edu.in<br>Email ID: principal@rvce.edu.in</span>
           
	  <img src="https://upload.wikimedia.org/wikipedia/en/a/a7/RVCE_New_Logo.JPG" class="img-circle" alt="Cinque Terre" width="150" height="150"> 
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">PROCUREMENT PROCESS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="scroll active"><a href="#"><span class="glyphicon glyphicon-user"></span>Send Request</a></li>
		<li class="scroll"><a href="abc11.php"><span class="glyphicon glyphicon-user"></span>Check Response</a></li>
      </ul>
	   <form class="navbar-form navbar-right"> 
        <li class="scroll"><a href="adminlogin.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>+9++9++9999+++9999999
	  </form>
	  </div>
	  </div>
	  
	  
    </div>
  </div>
</nav>
  <html>
	<body>
	<form method="post" action="select1.php">
	<input type="radio" name="request" value="hardware">Hardware Request<br><br>
	  <input type="radio" name="request" value="software">Software Request<br><br>
	    <input type="submit" value="submit">
		</form>
</body>
</html>  
</body>
    </head>
</html>';
?>
</center>

