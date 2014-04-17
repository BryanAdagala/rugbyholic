<?php
	
	$team=$_POST['team'];
	
	$link=mysql_connect('localhost', 'root', '');
	$sql=("INSERT INTO team_polls(favteam) VALUES('$team')");
	
	mysql_select_db('rugbyholic');
	mysql_query($sql);
	echo mysql_error();
	include 'registerTeam.php';
?>