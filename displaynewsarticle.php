<?php
//displays the headlines
	$link=@mysql_connect('localhost', 'root', '');
		if(!$link){
			echo"<p>Unable to connect to the database at this time.</p>";
			exit();
			}
	mysql_select_db('rugbyholic', $link);
	$result=mysql_query("SELECT headlines FROM newsdetails");
		if(!$result){
			echo("<p>Error performing query:" . mysql_error(). "</p>");
			}else{
				print $result;
				exit();
			}
//displays all the news items
	$con=@mysql_connect('localhost', 'root', '');
		if(!$con){
			echo"<p>Cannot connect to db!</p>";
			exit();
			}
	mysql_select_db('rugbyholic', $con);
	$find=mysql_query('SELECT news FROM newsdetails');
	if(!$find){
			echo ("<p>Error in displaying news". mysql_error(). "</p>");
			}else{
				echo $find;
				exit();
			}
?>