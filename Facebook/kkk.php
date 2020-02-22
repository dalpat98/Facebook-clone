<?php
session_start();
$id=$_SESSION["idd"];
$text=$_POST["text"];
	
$con=mysqli_connect("localhost","root","","facebook");
$r=mysqli_query($con,"insert into add_post(user_id,post_text) values('$id','$text')");
if($r)
{
	header("location:post.php");
	
	}
else
	echo mysqli_error($con);
?>