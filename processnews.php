<?php
	//variable declarations
	$headlines=$_POST['headlines'];
	$news=$_POST['news'];
	
	//Connect to db
	$link= mysql_connect ('localhost', 'root', '');
	
	//sql query that add data to db
	$sql=("INSERT INTO newsdetails(headlines, news) 
	VALUES('$headlines', '$news')");
	
	//selects db to add info to
	mysql_select_db('rugbyholic');
	
	//executes sql query
	mysql_query($sql);
	
	//returns error message
	echo mysql_error();
	
	include 'admin.php';
?>