<!DOCTYPE html>
<html>
<head>
      <title>Facebook-login or sign up</title>
	  <link rel="stylesheet" type="text/css" href="dalpat.css">
</head>
<script>
       function vali()
	   {
	       x=document.myform.name.value;
	       y=document.myform.surname.value;
	       z=document.myform.mobile.value;
	       k=document.myform.pass.value;
	       l=document.myform.day.value;
	       m=document.myform.month.value;
	       n=document.myform.year.value;
	       p=document.myform.gender.value;
		   if(x=="")
		   {
		      alert("Enter First Name");
			  return false;
		    }
			if(y=="")
		   {
		      alert("Enter Surname");
			  return false;
		    }
			if(z=="")
		   {
		      alert("Enter Mobile Number or Email");
			  return false;
		    }
			if(k=="")
		   {
		      alert("Enter Password");
			  return false;
		    }
			if(l=="")
		   {
		      alert("Select day");
			  return false;
		    }
			if(m=="")
		   {
		      alert("Select month");
			  return false;
		    }
			if(n=="")
		   {
		      alert("Select year");
			  return false;
		    }
			if(p=="")
		   {
		      alert("Select Gender");
			  return false;
		    }
			return true;
		}
		 function login()
	     {
	       a=document.logina.email.value;
	       b=document.logina.password.value;
		   if(a=="")
		   {
		      alert("Enter Username");
			  return false;
		    }
			if(b=="")
		   {
		      alert("Enter Password");
			  return false;
		    }
			return true;
		 }
</script>
<?php
session_start();
?>
<body>
<form  name='logina' action='login.php' method='post' onsubmit='return login()'>
    <header>
	  <div class="header-block">
	  <div class="logo">
	  <img src="logo.png" alt="facebook">
	  </div>
	  <div class="facebook-login">
	    <div class="email">
		<label>Email or Phone</label><br>
		<input type="text" name="email" value="">
	    </div>
		<div class="password">
		<label>Password</label><br>
		<input type="password" name="password" value=""><br>
		<a href="https://www.facebook.com/login/identify/?ctx=recover&ars=royal_blue_bar">Forgotten account?</a>
	    </div>
		<div class="login-button">
		<input type="submit" name="" value="Log In">
	    </div>
	  </div>
	  </div>
	</header>
</form>
<?php
		      if(isset($_SESSION["err"]))
				  echo $_SESSION["err"];	
		?>
	   <div class="content-block clearflix">
	   <div class="facebook-connect">
	   <p>Facebook helps you connect and share with the<br>people in your life.</p>
	   <img src="world.png">
	   </div>
	   <div class="create-account">
	   <h2>Create an Account</h2>
	   <p class="free">It's free and always will be</p>
	   <div class="account">
	       <form  name='myform' action='new1.php' method='post' onsubmit='return vali()'>
		   <input type="text" name="name" value="" placeholder="First name">
		   <input type="text" name="surname" value="" placeholder="Surname"><br>
		   <input type="text" name="mobile" value="" class="mobile" placeholder="Mobile number or email address"><br>
		   <input type="password" name="pass" value="" class="password" placeholder="New password">
		   <br><br><br><br>
			<p><label>Birthday</label></p><br>
			 <select name='day'>
			  <option value=''>Day</option>
			  <option value='1'>1</option>
			  <option value='2'>2</option>
			  <option value='3'>3</option>
			  <option value='4'>4</option>
			  <option value='5'>5</option>
			  </select>
			  <select name='month'>
			  <option value=''>Month</option>
			  <option value='jan'>jan</option>
			  <option value='feb'>feb</option>
			  <option value='mar'>mar</option>
			  <option value='apr'>apr</option>
			  <option value='may'>may</option>
			  </select>
			  <select name='year'>
			  <option value=''>Year</option>
			  <option value='2018'>2018</option>
			  <option value='2017'>2017</option>
			  <option value='2016'>2016</option>
			  <option value='2015'>2015</option>
			  <option value='2014'>2013</option>
			  </select>
			  <span class="why-do-i"><a href="#">Why do i need to provide my date of birth?</a></span><br>
			  
			  <input type="radio" name="gender" value="Female"><label>Female</label>
			  <input type="radio" name="gender" value="Male"><label>Male</label><br/>
			  
			  <span class="by-clicking">By clicking Sign Up, you agree to our<a href="#">Terms,Data Policy</a>and<br>
			        <a href="">Cookie Policy.</a>
			        You may recieve SMS notifictions from Us and<br/> can opt out at any time.
			  </span><br>
			  <input type="submit" name="" value="Sign Up"><br>
			  <p><a href="">Create a Page</a> for a celebrity,band or business</p><br>
			  </form>
	   </div>
	   </div>
	   </div>
	   <div id='footer'><br/>
		   <hr align='center' width='50%'>
          <p><a href=''>Sign Up</a>&nbsp;<a href=''>Log In</a>&nbsp;<a href=''>Messenger</a>&nbsp;
		   <a href=''>Facebook Lite</a>&nbsp;<a href=''>Watch</a>&nbsp;<a href=''>People</a>&nbsp;
		   <a href=''>Profiles</a>&nbsp;<a href=''>pages</a>&nbsp;<a href=''>page categories</a>&nbsp;
		   <a href=''>Events</a>&nbsp;<a href=''>Places</a>&nbsp;<a href=''>Games</a>&nbsp;
		   <a href=''>Locations</a>&nbsp;<a href=''>Marketplace</a></p><p>
		   <a href=''>Groups</a>&nbsp;
		   <a href=''>Instagram</a>&nbsp;<a href=''>Local</a>&nbsp;<a href=''>Fundraisers</a>&nbsp;
		   <a href=''>services</a>&nbsp;<a href=''>About</a>&nbsp;<a href=''>Create Ad</a>&nbsp;
		   <a href=''>Create page</a>&nbsp;<a href=''>Developers</a>&nbsp;<a href=''>Careers</a>&nbsp;
		   <a href=''>Privacy</a>&nbsp;<a href=''>Cookies</a>&nbsp;<a href=''>AdChoices</a>&nbsp;
		   <a href=''>Terms</a></p><p>
		   <a href=''>AccountSecurity</a>&nbsp;<a href=''>LoginHelp</a>&nbsp;<a href=''>Help</a>&nbsp;
           </p><p>Facebook©2019</p>
		</div>	
</body>
<?php
$_SESSION["err"]="";
?>
</html>