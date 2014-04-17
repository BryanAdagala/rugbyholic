<?php
	
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$favteam=$_POST['teamid'];
	
	$link=mysql_connect('localhost', 'root', '');
	
	//inserts data from the froms to the table subscriptions
	$sql=("INSERT INTO subscriptions(email, phone, teamid)
	VALUES('$email', '$phone', '$favteam')");
	
	mysql_select_db('rugbyholic');
	mysql_query($sql);
	echo mysql_error();
	//inital subscription
	$get_phone_no=mysql_query("SELECT phone FROM subscriptions WHERE phone='$phone' AND teamid='$favteam'");
	$get=mysql_fetch_array($get_phone_no);
	
	$rec=$get['phone'];
    $receiver="+254$rec";
	
	$get_team=mysql_query("SELECT * FROM team_polls WHERE teamid='$favteam'");
	$query=mysql_fetch_array($get_team);
	$fav=$query['favteam'];
	
	$result=mysql_query("SELECT * FROM log WHERE teamid='$favteam' ");
	$que=mysql_fetch_array($result);
	$played=$que['played'];
	$won=$que['won'];
	$points=$que['points'];
	
	
	$sms=mysql_query("INSERT INTO ozekimessageout(receiver, msg, status) 
	VALUES('$receiver', 'You have subscribed to $fav RFC the current standings are Played: $played, Won:$won, Points:$points', 'send')");
	
	
	//send sms with relevant information on subscription
	include 'home.php';
?>