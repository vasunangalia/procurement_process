<?php

$con = mysqli_connect("localhost","root","");

$db = mysqli_select_db($conc,"Procurement");

$resource = $_POST['request'];
if($resource=='hardware')
{
header("Location: hardrequest.php");
}
elseif($resource=='software')
{
header("Location: softrequest.php");
}
?>
