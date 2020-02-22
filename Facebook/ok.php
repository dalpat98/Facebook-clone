<?php
session_start();
$id=$_SESSION["idd"];
	
	$con=mysqli_connect("localhost","root","","facebook");
	
$r=move_uploaded_file($_FILES["dapsa"]["tmp_name"],"images/".$_FILES["dapsa"]["name"]);
if($r)
{
	echo "uploaded successfully";
	$name=$_FILES["dapsa"]["name"];
	echo "<br>Name=",$name;
	$r=mysqli_query($con,"insert  into profie_pic(user_id,pics)values('$id','$name')");
	if($r)
		;
	else
		echo mysqli_error($con);
}
else
	echo "Error !";
?>