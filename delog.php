<?php
	if(isset($_GET['logid'])){
	//sets the id to be deleted
		$deleteid=$_GET['logid'];
	
	//establishes a db connetion
		$conn=mysql_connect('localhost', 'root', '');
		
	//selects the db
		$db=mysql_select_db('rugbyholic');
		
	//variable declaration of exactly what db is to be deleted
		$idtodelete=$_GET['logid'];
		
	//sql query that ensures the delete takes place
		$sql=("DELETE FROM log WHERE logid='$idtodelete'LIMIT 1");
		$sq=mysql_query($sql) or die(mysql_error());
	}
	
	//incase the sql query fails to execute or executes the messages below are displayed
	if (!$sq){
		echo "Delete unsuccessful";
	}else{
		echo "Delete successful";
	}
	header("location:standings.php");
?>