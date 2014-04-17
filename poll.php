	<?php 
	require_once('connections/conn_vote.php');
	?>
	<?php
		if(!function_exists("GetSQLValueString")){
			function GetSQLValueString($theValue, $theType, $theDefinedValue="", $theNotDefinedValue=""){
				$theValue=get_magic_quotes_gpc()? stripslashes($theValue) : $theValue;
				$theValue=function_exists("mysql_real_escape_string")?mysql_real_escape_string($theValue) : mysql_real_escape_string($theValue);
				switch($theType){
					case "text":
						$theValue=($theValue!="")? "'" .$theValue. "'" : "NULL";
						break;
					case"long":
					case "int":
						$theValue=($theValue !="")? intval($theValue) : "NULL";
						break;
					case "double":
						$theValue=($theValue !="")? "'" .doubleval($theValue). "'" : "NULL";
						break;
					case "date":
						$theValue=($theValue !="")? "'" .$theValue. "'" : "NuLL";
						break;
					case "defined":
						$theValue=($theValue !="")? $theDefinedValue : $theNotDefinedValue;
						break;
				}
				return $theValue;
			}
		}
	$editFormAction=$_SERVER['PHP_SELF'];
	if(isset($_SERVER['QUERY_STRING'])){
		$editFormAction .="?" .htmlentities($_SERVER['QUERY_STRING']);
	}
	if((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")){
		$insertSQL=sprintf("INSERT INTO polls(pollid, favplayer) VALUES(%s, %s)",
			GetSQLValueString($_POST['pollid'], "int"),
			GetSQLValueString($_POST['qp_v80176'], "text"));
		if(isset($_POST['pollid'], $_POST['qp_v80176']) == true){
			$a=$_POST['pollid'];
			$b=$_POST['qp_v80176'];
		}
		mysql_select_db($database_conn_vote, $conn_vote);
		$Result1=mysql_query($insertSQL, $conn_vote) or die (mysql_error());
		
		$insertGoTo="results.php";
		if(isset($_SERVER['QUERY_STRING'])){
			$insertGoTo .=(strpos($insertGoTo, '?')) ? "&" : "?";
			$insertGoTo .=$_SERVER['QUERY_STRING'];
		}
			header (sprintf("location: %s", $insertGoTo));
	}
	$colname_rs_vote ="-1";
	if(isset($_GET['recordID'])){
		$colname_rs_vote=$_GET['recordID'];
	}
	
	mysql_select_db($database_conn_vote, $conn_vote);
	$query_rs_vote=sprintf("SELECT * FROM polls WHERE pollid=%s", GetSQLValueString($colname_rs_vote, "int"));
	$rs_vote=mysql_query($query_rs_vote, $conn_vote) or die (mysql_error());
	$row_rs_vote=mysql_fetch_assoc($rs_vote);
	$totalRows_rs_vote=mysql_num_rows($rs_vote);
	
	header('location:index.php');
	?>
	<?php mysql_free_result($rs_vote); ?>