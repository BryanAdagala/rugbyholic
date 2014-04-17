<?php
	
	$team=$_POST['team'];
	$played=$_POST['played'];
	$won=$_POST['won'];
	$drawn=$_POST['drawn'];
	$lost=$_POST['lost'];
	$bonus=$_POST['bonus'];
	$points=$_POST['points'];
	
	$link=mysql_connect('localhost', 'root', '');
	$sql=("INSERT INTO ess(team, played, won, drawn, lost, bonus, points)
	VALUES('$team', '$played', '$won', '$drawn', '$lost', '$bonus', '$points')");
	
	mysql_select_db('rugbyholic');
	mysql_query($sql);
	echo mysql_error();
	include 'standings.php';
?>