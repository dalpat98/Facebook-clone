<?php
$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["mobile"];
$pass=$_POST["pass"];
$day=$_POST["day"];
$month=$_POST["month"];
$year=$_POST["year"];
$gender=$_POST["gender"];

$con=mysqli_connect("localhost","root","","facebook");
$r=mysqli_query($con,"insert into data(FirstName,Surname,Email,Password,Day,Month,Year,Gender)
    values('$name','$surname','$email','$pass','$day','$month','$year','$gender')");
?>