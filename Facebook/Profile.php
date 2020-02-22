<?php
session_start();
if(!isset($_SESSION["idd"]))
	header("location:dalpat1.php");

?>
<!DOCTYPE html>
<html>
<head>
      <title>Profile</title>
	  <link rel="stylesheet" type="text/css" href="new2.css">
</head>
<body>
<div class="top">
  <div class="under"><center>Facebook</center>
  </div>
</div>
<div class="menu">
   <div class="links">
   <table cellpadding=10 cellspacing=0 align='center' border=0 height=40px width='100%'>
   <tr>
   <td><a href="upload.php">&nbsp;&nbsp;&nbsp;&nbsp;Upload file</a></td>
   <td><a href="Profile.php">Profie</a></td>
   <td><a href="#">Need Help</a></td>
   <td><a href="#">Notifications</a></td>
   <td><a href="logout.php">Log Out</a></td>
   </tr>
   </table>
   </div>
</div>
<div class="boddy">
<?php
	$id=$_SESSION["idd"];
	
	$con=mysqli_connect("localhost","root","","facebook");
	
	$r=mysqli_query($con,"select * from data where id='$id'");
	echo "<br/><fieldset  style='width:600px;margin:auto;height:600px'>";
	if($row=mysqli_fetch_array($r))
	{
		echo "<table border='0'  align='center'  cellspacing=0
 height=500  width=300		cellpadding=10>";
		
		$rr=mysqli_query($con,"select * from  profie_pic  where user_id='$id'");
		
		$rows=mysqli_fetch_row($rr);
		echo "<tr><td  align='center' colspan='2'>User   Profile</td></tr>";
		
		echo "<tr><td  colspan='2'  align='center'><image src='images/$rows[2]'
		height=200 width=200  style='border-radius:20px'>";
		echo "<tr><td>First Name</td><td>$row[1]</td></tr>";
		echo "<tr><td>Last Name</td><td>$row[2]</td></tr>";
		echo "<tr><td>Email</td><td>$row[3]</td></tr>";
		echo "<tr><td>DOB</td><td>$row[5]-$row[6]-$row[7]</td></tr>";
		
		
	}
?>
</fieldset>
</table>	
</div>
</body>