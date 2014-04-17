<?php 
	require_once('connections/team_vote.php');
?>
<?php
	if(!function_exists("GetSQLValueString")){
		function GetSQLValueString($theValue, $theType, $theDefinedValue="", $theNotDefinedValue=""){
				$theValue=get_magic_quotes_gpc()? stripslashes($theValue) : $theValue;
				$theValue=function_exists("mysql_real_escape_string")?mysql_real_escape_string($theValue) : mysql_real_escape_string($theValue);
				switch($theType){
				case "text":
					$theValue=($theValue!="")? "'".$theValue. "'" : "NULL";
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
					$theValue=($theValue !="") ? $theDefinedValue : $theNotDefinedValue;
					break;
				}
			return $theValue;
		}
	}
	mysql_select_db($team_db_conn, $team_conn);
	$query_vote=("SELECT * FROM team_polls");
	$vote=mysql_query($query_vote, $team_conn) or die (mysql_error());
	$row_vote=mysql_fetch_assoc($vote);
	$totalRows_vote=mysql_num_rows($vote);
	
	$teamQuestion1= mysql_query("SELECT * FROM team_polls WHERE favteam='1'");
	$num_rowsQuestion1=mysql_num_rows($teamQuestion1);
	
	$teamQuestion2= mysql_query("SELECT * FROM team_polls WHERE favteam='2'");
	$num_rowsQuestion2=mysql_num_rows($teamQuestion2);
	
	$teamQuestion3= mysql_query("SELECT * FROM team_polls WHERE favteam='3'");
	$num_rowsQuestion3=mysql_num_rows($teamQuestion3);
	
	$teamQuestion4= mysql_query("SELECT * FROM team_polls WHERE favteam='4'");
	$num_rowsQuestion4=mysql_num_rows($teamQuestion4);
	
	$teamQuestion5= mysql_query("SELECT * FROM team_polls WHERE favteam='5'");
	$num_rowsQuestion5=mysql_num_rows($teamQuestion5);
	
	$teamQuestion6= mysql_query("SELECT * FROM team_polls WHERE favteam='6'");
	$num_rowsQuestion6=mysql_num_rows($teamQuestion6);
	
	$teamQuestion7= mysql_query("SELECT * FROM team_polls WHERE favteam='7'");
	$num_rowsQuestion7=mysql_num_rows($teamQuestion7);
	
	$teamQuestion8= mysql_query("SELECT * FROM team_polls WHERE favteam='8'");
	$num_rowsQuestion8=mysql_num_rows($teamQuestion8);
	
	$teamQuestion9= mysql_query("SELECT * FROM team_polls WHERE favteam='9'");
	$num_rowsQuestion9=mysql_num_rows($teamQuestion9);
	
	$perQuestion1=ceil(($num_rowsQuestion1/$totalRows_vote)*100);
	$perQuestion2=ceil(($num_rowsQuestion2/$totalRows_vote)*100);
	$perQuestion3=ceil(($num_rowsQuestion3/$totalRows_vote)*100);
	$perQuestion4=ceil(($num_rowsQuestion4/$totalRows_vote)*100);
	$perQuestion5=ceil(($num_rowsQuestion5/$totalRows_vote)*100);
	$perQuestion6=ceil(($num_rowsQuestion6/$totalRows_vote)*100);
	$perQuestion7=ceil(($num_rowsQuestion7/$totalRows_vote)*100);
	$perQuestion8=ceil(($num_rowsQuestion8/$totalRows_vote)*100);
	$perQuestion9=ceil(($num_rowsQuestion9/$totalRows_vote)*100);
	
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
		$insertSQL=sprintf("INSERT INTO team_polls(teamid, favteam) VALUES(%s, %s)",
			GetSQLValueString($_POST['teamid'], "int"),
			GetSQLValueString($_POST['qp_v80384'], "text"));
		if(isset($_POST['pollid'], $_POST['qp_v80384']) == true){
			$a=$_POST['teamid'];
			$b=$_POST['qp_v80384'];
		}
		mysql_select_db($team_db_conn, $team_conn);
		$Result1=mysql_query($insertSQL, $team_conn) or die (mysql_error());
		
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
	
	mysql_select_db($team_db_conn, $team_conn);
	$query_vote=sprintf("SELECT * FROM team_polls WHERE teamid=%s", GetSQLValueString($colname_rs_vote, "int"));
	$vote=mysql_query($query_vote, $team_conn) or die (mysql_error());
	$row_vote=mysql_fetch_assoc($vote);
	$totalRows_vote=mysql_num_rows($vote);
	
	header('location:index.php');
	?>
	<?php mysql_free_result($vote); ?>