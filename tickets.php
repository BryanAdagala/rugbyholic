	<?php
	//error_reporting(E_ALL ^ E_NOTICE);
	if(isset($_POST['submitted'])){
		$tournamentname=$_POST['tournamentname'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$venue=$_POST['venue'];
		$description=$_POST['description'];
	}
	
	$tournamentname=$_POST['tournamentname'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$venue=$_POST['venue'];
	$description=$_POST['description'];
	
	mysql_connect('localhost', 'root', '') or die ('Could not connect to server');
	$query=("INSERT INTO tournaments(tournamentname, date, time, venue, description) VALUES('$tournamentname','$date','$time', '$venue', '$description')");
	mysql_select_db('rugbyholic') or die ('Could not find db');
	mysql_query($query);
	
	include "standings.php";
	?>