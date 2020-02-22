<?php
session_start();

$con=mysqli_connect("localhost","root","","facebook");
$username=$_POST["email"];
$key=$_POST["password"];
$r=mysqli_query($con,"select * from data where Email='$username' and Password='$key' ");

if($row=mysqli_fetch_array($r)){
	$_SESSION["idd"]=$row[0];
	header("location:new1.php");
	
}
else
{
	$_SESSION["err"]="Invalid Username or Password";
	header("location:dalpat1.php");
}
?>