<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Subscribe</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><img src="images/rugbyholic(601x317).jpg" width="250" height="150" />Rugbyholic</a></h1>
		</div>
		<div id="slogan">
			<h2>
			<a href="subscribe.php">Register</a>
            <a href="gettingstarted.php">Login</a>
            </h2>
		</div>
	</div>
	<div id="menu">
		<ul>
        <li><a href="index.php">Home</a></li>
        </ul>
		<br class="clearfix" />
	</div>
	<div id="splash">
	<h3>Getstarted</h3>
    <form method="post" action="getstarted.php" name="formsubscribe" onsubmit="validateuser();">
    	<div>Email address:</div>
        <div><input type="text" name="email" size="25"/></div>
    	<div>Password:</div>
        <div><input type="password" name="phone" size="25"/></div>
		<div><input type="submit" value="Login" /></div>
	</form>
	<script type="text/javascript">
			function validateuser()
			{
			var x=document.forms["formsubscribe"]["email"].value;
			var y=document.forms["formsubscribe"]["phone"].value;
			if (x== null || x== "")
			{
			alert("Enter Email address");
			return false;
			}
			if (y== null || y=="Choose a team")
			{
			alert("Enter Phone number");
			return false;
			}
			}
	</script>
	<br class="clearfix" />
</body>
</html>

