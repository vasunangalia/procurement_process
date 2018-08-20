<?php
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"Procurement");
$username=$_POST['username'];
$password=$_POST['password'];

$getinfo1 = "SELECT id,password FROM coordinator WHERE id = '$username' AND password='$password'";
$result = mysqli_query($con,$getinfo1);
if(mysqli_num_rows($result)==0)
{
	echo "Login Failed";
}
else
{
echo "Login successful";
session_start();
	 $_SESSION['username'] = $username;
	 $_SESSION['password'] = $password;
header("Location: verify.php");

} 
?>