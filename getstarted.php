<?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$submit=$_POST['submit'];
	
	$link=mysql_connect('localhost', 'root', '') or die (@mysql_error());
	
	$db=mysql_select_db("rugbyholic", $link) or die (@mysql_error());
	
	$sql="SELECT userid FROM subscriptions WHERE email='$email' AND phone='$phone'";
	
	$_SESSION['email']=$email;
	
	$result=mysql_query($sql, $link);
	
	$row=mysql_fetch_array($result);
	 
	if(mysql_num_rows($result)>0)
	{
		header('location:purchaseitems.php');
	}
	else{
		echo "Wrong Email and phone number input";
	}
?>