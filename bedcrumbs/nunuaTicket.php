<?php
	//error_reporting(E_ALL ^ E_NOTICE);
	$jina=$_POST["jina"];
	$phone=$_POST["phone"];
	$kitambulisho=$_POST["kitambulisho"];
	$masos=$_POST["masos"];
	$masufferer=$_POST["masufferer"];
	
	mysql_connect('localhost', 'root', '');
	mysql_select_db('rugbyholic');
	
	$sql=("INSERT INTO tickets(jina,phone,id, vip, regular)
	VALUES('$jina', '$phone', '$kitambulisho', '$masos', '$masufferer' )");
	
	$get_phone_no=mysql_query("SELECT phone FROM tickets WHERE phone='$phone'");
	$get=mysql_fetch_array($get_phone_no);
	
	$rec=$get['phone'];
    $receiver="+254$rec";
	
	$get_purchase=mysql_query("SELECT * FROM tickets");
	$as=mysql_fetch_array($get_purchase);
	$jina=$as['jina'];
	$kitambulisho=$as['id'];
	$masos=$as['vip'];
	$masufferer=$as['regular'];
	
	$sms=mysql_query("INSERT INTO ozekimessageout(receiver, msg, status) 
	VALUES('$receiver', '$jina your purchase is successful. ID NO:$kitambulisho VIP ticket(s):$masos Regular ticket(s): $masufferer', 'send')");

 
	 if(!mysql_query($sql)){
		echo "Failed to purchase";
	}else{
		echo "Success, you will receive an sms shortly";
	}

?>