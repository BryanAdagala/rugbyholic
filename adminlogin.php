<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Administrator</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
		
	<div id="wrapper">
	<div id="header">
	<div id="logo">
	<h1>Rugbyholic Admin Pannel</h1>
	</div>
	<div id="slogan">
	</div>
	</div>
	<div id="menu">
	<br class="clearfix" />
	</div>
	<div id="splash">
	<h3>Admin Credentials</h3>
	<form method="post" action="adminlogin.php" name="myform" onSubmit="validatelog();">
	<table width="300" border="0" align="center" cellspaciing="2" cellpadding="0">
	<tr>
		<td width="125" valign="middle">
    	<div align="right">Username:&nbsp;</div></td>
    	<td width="150" valign="top"><input type="text" size="25" name="username" onFocus="this.value=''" style="width:150px"></td>
    	<td width="25" valign="middle"><div align="center">*</div></td>
    </tr>
	<tr>
		<td valign="middle">
    	<div align="right">Password:&nbsp;</div></td>
    	<td valign="top"><input type="password" size="25" name="password" onFocus="this.value=''" style="width:150px"></td>
    	<td valign="middle"><div align="center">*</div></td>
   	 </tr>
	<tr>
    	<td valign="top"><div align="right"></div></td>
		<td valign="top"><div align="right"><input type="submit" name="submit" value="Login"></div></td>
    	<td valign="top">&nbsp;</td>
	</tr>
	</table>
	</form>
    <?php
	session_start ();
	error_reporting(E_ALL ^ E_NOTICE);
	$username=$_POST['username'];
	$password=$_POST['password'];
	$submit=$_POST['submit'];
	
	$link=mysql_connect ('localhost', 'root', '')or die(@mysql_error());
	
	$db=mysql_select_db("rugbyholic", $link)or die(@mysql_error ());
	
	$sql=("SELECT adminid FROM admin
	WHERE username='$username'AND password='$password'");
	
	$_SESSION['username']=$username;
	
	$result=mysql_query($sql,$link);

	$row=mysql_fetch_array($result);
	if ($submit){
		
	if(mysql_num_rows($result)>0)
	{
		header('location:admin.php');
	}
	else
	{
		echo 'Wrong user name and password!!';
	}
	}
	?>
	<script type="text/javascript">
	function validatelog(){
		var a=document.forms["myform"]["username"].value;
		var b=document.forms["myform"]["password"].value;
		if (a== null || a== ""){
			alert("Enter Username");
			return false;
		}
		if (b== null || b==""){
			alert("Enter Password");
			return false;
		}
		}
	</script>
	<br class="clearfix" />
</body>
</html>
