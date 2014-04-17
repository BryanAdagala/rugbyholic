<?php
	$bonga=$_POST['bonga'];
	$uname=$_POST['uname'];
	
	$link=mysql_connect('localhost', 'root', '');
	$sql=("INSERT INTO kubonga(user, bonga)
	VALUES('$uname', '$bonga')");
	
	mysql_select_db('rugbyholic');
	mysql_query($sql);
	echo mysql_error();
	header ('location:tournaments.php');
?>