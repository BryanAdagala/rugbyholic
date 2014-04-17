<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$jina=$_POST["jina"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$kitambulisho=$_POST["kitambulisho"];
	$masos=$_POST["masos"];
	$masufferer=$_POST["masufferer"];
	$niKulipa=$_POST["niKulipa"];
	
	mysql_connect('localhost', 'root', '');
	mysql_select_db('rugbyholic');
	
	$sql=("INSERT INTO tickets(jina, email, phone, kulipa, kitambulisho, masos, masufferer)
	VALUES('$jina', '$email', '$phone', '$niKulipa', '$kitambulisho', '$masos', '$masufferer' )");
	mysql_query($sql);
	
 if(!mysql_query($sql))
 {
 echo "Failed";
 }
 else
 {
 echo "success";
 }

?>