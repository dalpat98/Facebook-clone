<?php
session_start();
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
   <td><a href="upload.php">&nbsp;&nbsp;&nbsp;&nbsp;Upload File</a></td>
   <td><a href="Profile.php">Profie</a></td>
   <td><a href="post.php">News Feeds</a></td>
   <td><a href="logout.php">Log Out</a></td>
   </tr>
   </table>
   </div>
</div>
<div class="boddy">
<table  align='center' style='width:500px;'>
	<?php
		$con=mysqli_connect("localhost","root","","facebook");
		$id=$_SESSION["idd"];
		$r=mysqli_query($con,"select * from add_post");
		while($row=mysqli_fetch_array($r))
		{
			
			$rr=mysqli_query($con,"select * from profie_pic where user_id='$row[1]'");
			
			$rows=mysqli_fetch_row($rr);
			echo "<tr><td>";
			echo "<image src='images/$rows[2]' height=40 width=40><br/>";
			echo $row[2],"<hr/></td></tr>";
		}
	
	?>
	</table>
</div>
</body>