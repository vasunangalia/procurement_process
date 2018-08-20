<?php
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"Procurement");
$username=$_POST['username'];
$password=$_POST['password'];

$check = mysqli_query($con,"SELECT id,password FROM admin WHERE id='$username' AND password='$password'");
$row = mysqli_num_rows($check);
if($row==0)
{
echo "Username and password incorrect";
}
else
{
echo "Login successful";
header("Location: adminentry.php");
} 
?>