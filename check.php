<?php

$conc = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conc,"Procurement");

if(!$conc)
{
	echo "Not connected";
}
echo '   <html>
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
      <a class="navbar-brand" href="adminentry.php">Procurement Process</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="scroll active"><a href="#"><span class="glyphicon glyphicon-user"></span>Software Request </a></li>
        <li class="scroll"><a href="hardcheck.php"><span class="glyphicon glyphicon-user"></span>Hardware Request</a></li>
		
      </ul>
	  <form class="navbar-form navbar-right"> 
        <li class="scroll"><a href="adminlogin.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>+9++9++9999+++9999999
	  </form>
    </div>
  </div>
</nav>
  <html>
	<body>
</body>
</html>  
</body>
    </head>
</html> ';
?>
<h4 align='center'>AVAILABLE RESOURCES:</h4>

<table border=\"0\" style="width:100%">
	<thead>
	<tr>
		<th>Package Id</th>
		<th>Software Id</th>
		<th>Sender Id</th>
		<th>Name</th>
		<th>License</th>
		<th>Version</th>
		<th>Estimate Cost</th>
		<th>Date</th>
		<br>
	</tr>
	</thead>
	<tbody>
	<?php
		$pack = mysqli_query($conc,"SELECT * FROM package WHERE hid=''");
		while($row1=mysqli_fetch_assoc($pack))
		{
		$sid = $row1['sid'];
		$ab = mysqli_query($conc,"SELECT name,license,version FROM software WHERE id='$sid'");
		if(mysqli_num_rows($ab)==0){
				echo "<tr><td>No Software requests present</tr></td>";
			}
		else{
			
			while($row = mysqli_fetch_assoc($ab)) {
				echo "<tr><td>{$row1['pid']}</td><td>$sid</td><td>{$row1['senderid']}</td><td>{$row['name']}</td><td>{$row['license']}</td><td>{$row['version']}</td><td>{$row1['estcost']}</td><td>{$row1['date']}</td>";
				}
			}
			}
			echo "</table><br><br><br>";
?>
<html>
<body>
<form method='post'>
	Package Id:<br>
<?php
	echo "<input name=\"pid\" list=\"psid1\">
  <datalist id=\"psid1\">";	
  $pid1 = mysqli_query($conc,"SELECT pid FROM package WHERE hid=''");
  if(!$pid1)
  {
  echo "No query";
  }
while($r1=mysqli_fetch_assoc($pid1))
{                  
      echo "<option value='".$r1['pid']."'>";
                
}
echo "</datalist><br>"; 
?>
	Status:<br>
	<input type='text' name='status'><br><br>
	<select name="avail">
    <option value="available">Available</option>
    <option value="not">Not available</option>
  </select><br><br>
  <select name="send">
    <option value="sent">Item Sent</option>
    <option value="nsent">Not Sent</option>
  </select><br><br>
  <input type='submit' name='submit'><br>
	<br>
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
$pid=$_POST['pid'];
$status=$_POST['status'];
$avail = $_POST['avail'];
$send = $_POST['send'];
if($avail=='available')
{
$avail1=1;
}
else
{
$avail1=0;
}
if($send=='sent')
{
$send1=1;
}
else
{
$send1=0;
}
$check = mysqli_query($conc,"SELECT sent FROM package WHERE pid='$pid' AND sent='1'");
if(mysqli_num_rows($check)!=0)
{
echo "<p style='color:red'>Response already sent</p>";
}
else
{
$sel = mysqli_query($conc,"UPDATE package SET status='$status' WHERE pid='$pid' AND hid=''");
$sel1 = mysqli_query($conc,"UPDATE package SET response='$avail1' WHERE pid='$pid' AND hid=''");
$sel1 = mysqli_query($conc,"UPDATE package SET sent='$send1' WHERE pid='$pid' AND hid=''");
if(!$sel and !sel1)
{
echo "<p>Response not Sent</p>";
}
else
{
echo "<h3>Response Sent</h3>";
}
}
}
?>	