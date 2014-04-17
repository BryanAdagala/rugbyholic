<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Rugbyholic</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="jquery-1.3.1.min.js"></script>
	<script type="text/javascript">
	<!--
	var image1=new Image()
	image1.src="images/505_666.jpg"
	var image2= new Image ()
	image2.src="images/250px-Kenyaclubrugbykcb.jpg"
	var image3=new Image ()
	image3.src="images/371_497.jpg"
	var image4=new Image ()
	image4.src="images/73112_458819172419_125968887419_5441815_3039330_n.jpg"
	var image5=new Image ()
	image5.src="images/hb.jpg"
	//-->
	</script>
</head>
<body>
	<div id="wrapper">
	<div id="header">
	<div id="logo">
	<h1>Rugbyholic</a></h1>
	</div>
	<div id="slogan">
	<h2>
		<a href="http://wwww.facebook.com"><img src="images/197454109.png" width="25" height="25"></a>
		<a href="http://www.twitter.com"><img src="images/Twitter-Icon.png" width="25" height="25"></a>
		<a href="http://www.youtube.com"><img src="images/youtube_icon.png" width="25" height="25"></a>
	</h2>
	</div>
	</div>
	<div id="menu">
	<ul>
		<li class="first current_page_item"><a href="index.php">Home</a></li>
		<li><a href="tournaments.php">Tournaments</a></li>
		<li><a href="devleopment.php">Development</a></li>
		<li class="last"><a href="#"></a></li>
	</ul>
	<br class="clearfix" />
	</div>
	<div id="splash">
	<img src="images/505_666.jpg" name="slide" width="550" height="300">
    <script>
	<!--
	var step=1
	function slideit (){
	if(!document.images)
	return
	document.images.slide.src=eval("image"+step+".src")
	if (step<5)
	step++
	else
	step=1
	setTimeout("slideit()", 2500)
	}
	slideit()
	//-->
	</script>
	</div>
	<br class="clearfix" />
	<div id="page">
	<div id="content">
	<div class="box">
	</div>
	<div class="box" id="content-box1">
	<h3>Subscribe</h3>
    <form method="post" action="processsubcription.php" name="subscribe" onsubmit="validatefan();">
    	<div>Name:&nbsp;</div>
    	<div><input type="text" size="25" name="email" onFocus="this.value=''" style="width:135px">*</div>
    	<div>Phone Number:&nbsp;</div>
    	<div><input type="text" size="25" name="phone" onFocus="this.value=''" style="width:135px">*</div>
    	<div>Favorite team:&nbsp;</div>
		<div>
   			<select name="favteam" onFocus="this.value=''" style="width:135px">
    			<option>Choose a team</option>
    			<option>Harlequins</option>
    			<option>Impala</option>
    			<option>Nakuru</option>
    			<option>Nondies</option>
    			<option>Meanmachine</option>
    			<option>Mwamba</option>
    			<option>Homeboyz</option>
    			<option>Strathmore</option>
    			<option>Kisumu</option>
    		</select>*
		</div><br />
		<div><input type="submit" value="Subscribe"></div>
    </form>
	<script type="text/javascript">
		function validatefan()
		{
		var a=document.forms["subscribe"]["email"].value;
		var b=document.forms["subscribe"]["phone"].value;
		var c=document.forms["subscribe"]["favteam"].value;
			if (a== null || a== "")
			{
			alert("Enter Email address");
			return false;
			}
			if (b== null || b=="")
			{
			alert("Enter Phone number");
			return false;
			}
			if (c== null || c== "")
			{
			alert("Choose a team");
			return false;
			}
		}
	</script>
	<br class="clearfix" />
	
	<table>
    <h3>HSBC Sevens</h3>
    <thead>
		<tr>
		<th>TOURNAMENT</th>
		<th>DATE</th>
		</tr>
    </thead>
    <tfoot>
        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
    </tfoot>
    <tbody>
		<tr>
        <td>Australia (Gold Coast Sevens )</td>
        <td>25 - 26 November 2011</td>
        </tr>
		<tr class="odd">
        <td>Dubai Sevens</td>
        <td>2 - 3 December 2011</td>
		</tr>
       <tr class="odd">
       <td>South Africa</td>
       <td>9 - 10 December 2011</td>
       </tr>
       <tr class="annew">
       <td>New Zealand</td>
	   <td>3 - 4 February 2012</td>
       </tr>
       <tr class="odd">
       <td>USA</td>
       <td>10 - 12 February 2012</td>
       </tr>
       <tr class="odd">
       <td>Hong Kong</td>
       <td>23 - 25 March 2012</td>
       </tr>
       <tr class="odd">
       <td>Japan</td>
       <td>31 March - 1 April 2012</td>
       </tr>
       <tr class="odd">
       <td>Scotland</td>
       <td>5 - 6 May 2012</td>
       </tr>
       <tr class="odd">
       <td>England</td>
       <td>12 - 13 May 2012 </td>
       </tr>
       </tbody>
       </table>
	</div>
	<div class="box" id="content-box2">
	<h2>
	<?php
	mysql_connect('localhost', 'root', '');
	mysql_select_db('rugbyholic');
	$head="";
	$ujumbe=mysql_query('SELECT headlines FROM newsdetails WHERE newsid=1');
	while ($row=mysql_fetch_array($ujumbe)){
		$headlines=$row['headlines'];
		$head="$headlines";
		echo $head;
	}
	?>
    </h2>
	<p>
    <?php
	mysql_connect('localhost', 'root', '');
	mysql_select_db('rugbyholic');
	//variable declared as empty to be assigned a value
	$body="";
	//selects the news field in the newsdetails table
	$habari=mysql_query('SELECT news FROM newsdetails WHERE newsid=1');
	while ($row=mysql_fetch_array($habari)){
		$news=$row['news'];
		$body="$news";
		
		echo $body;
	}
	?>
	</p>
	<br class="clearfix" />
	<h3>Featured Teams</h3>
	<ul class="section-list">
	<li class="first">
		<img class="pic alignleft" src="images/200px-Impala_RFC.png" width="70" height="70" alt="" />
		<span><b>Impala Gazzelles</b></span>
		<div><span>Is one of the most decorated rugby clubs in the local scene. Situated along ngong road, Impala club
		home of the Impala gazzelles is the place to be <div id="impala">
		<a href="impala.php">Read more...</a>
		</div></span></div>
	</li>
	<li>
		<img class="pic alignleft" src="images/220px-KCB_Rugby_Club_current_LOGO-2012.jpg" width="70" height="70" alt="" />
		<span><b>KCB</b></span>
		<div><span>Kenya Commercial Bank, is also one of the iconic rugby clubs in the Kenya rugby league, home of young and fresh talent. KCB
		have also had their fair share of glory and success <a href="#">Read more ...</a></span></div>
	</li>
	<li class="last">
		<img class="pic alignleft" src="images/kenya_harlequins_logo_300px.png" width="70" height="70" alt="" />
		<span><b>Lunchbar Quins</b></span>
		<div><span>So far so good, this is the club that has registered the best performace ever in the local rugby scene. Harlequins as they were famously
		known before changing to Lunchbar quins is one of the best clubs. Seeing players like Patrice Ambunya come from the side <a href="#">Read more ...</a></span></div>
	</li>
	</ul>
	</div>
	<br class="clearfix" />
	</div>
	<div id="sidebar">
	<div class="box">
	<div id="qp_main80176" style="border:1px solid black;margin:10px;padding:10px;padding-bottom:12px;background-color:rgb(44,97,141); overflow:hidden;">
	<div style="font-family:Arial;font-size:12px;font-weight:bold;background-color:rgb(18,50,90);width:100%;color:white">
	<div style="padding:10px">Who is your favorite player?</div></div>
	<form id="qp_form80176" action="poll.php" method="post" target="_blank" style="padding:0px;margin-top:10px">
	<div style="width:100%"><div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px">
	<input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80176" type="radio" value="1">Collins Injera</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:50%">
	<span style="display:block;padding-left:30px">
	<input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80176" type="radio" value="2">Humphrey Khayange</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:50%">
	<span style="display:block;padding-left:30px">
	<input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80176" type="radio" value="3">Lavin Asego</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:50%">
	<span style="display:block;padding-left:30px">
	<input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80176" type="radio" value="4">Felix Ayange</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:50%">
	<span style="display:block;padding-left:30px">
	<input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80176" type="radio" value="5">Nato Simiyu</span></div></div>
	<div style="padding-top:10px;clear:both">
	<input name="qp_b80176" style="width:80px;margin-right:5px" type="submit" value="Vote">
	</div>
	<input type="hidden" name="id" value="form1"/>
	<input type="hidden" name="MM_insert" value="form1" />
	</form>
	<?php require_once('connections/conn_vote.php');?>
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
	mysql_select_db($database_conn_vote, $conn_vote);
	$query_rs_vote="SELECT * FROM polls";
	$rs_vote=mysql_query($query_rs_vote, $conn_vote) or die (mysql_error());
	$row_rs_vote=mysql_fetch_assoc($rs_vote);
	$totalRows_rs_vote=mysql_num_rows($rs_vote);
	
	$resultQuestion1= mysql_query("SELECT * FROM polls WHERE favplayer='1'");
	$num_rowsQuestion1=mysql_num_rows($resultQuestion1);
	
	$resultQuestion2= mysql_query("SELECT * FROM polls WHERE favplayer='2'");
	$num_rowsQuestion2=mysql_num_rows($resultQuestion2);
	
	$resultQuestion3= mysql_query("SELECT * FROM polls WHERE favplayer='3'");
	$num_rowsQuestion3=mysql_num_rows($resultQuestion3);
	
	$resultQuestion4= mysql_query("SELECT * FROM polls WHERE favplayer='4'");
	$num_rowsQuestion4=mysql_num_rows($resultQuestion4);
	
	$resultQuestion5= mysql_query("SELECT * FROM polls WHERE favplayer='5'");
	$num_rowsQuestion5=mysql_num_rows($resultQuestion5);
	
	$percentQuestion1=ceil(($num_rowsQuestion1/$totalRows_rs_vote)*100);
	$percentQuestion2=ceil(($num_rowsQuestion2/$totalRows_rs_vote)*100);
	$percentQuestion3=ceil(($num_rowsQuestion3/$totalRows_rs_vote)*100);
	$percentQuestion4=ceil(($num_rowsQuestion4/$totalRows_rs_vote)*100);
	$percentQuestion5=ceil(($num_rowsQuestion5/$totalRows_rs_vote)*100);
	
	?>
	<!--<fieldset>
		<legend style="color:#FFF">Results</legend>
		<ul>
		<li>
			<span style="color:#FFF">Collins Injera</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion1?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion1, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion1, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Humphrey Khayange</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion2?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion2, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion2, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Lavin Asego</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion3?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion3, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion3, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Felix Ayange</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion4?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion4, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion4, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Nato Simiyu</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion5?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion5, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion5, 2); ?>%
			</div>
		</li>
		</ul>
	<h6 style="color:#FFF">Total votes:<?php echo $totalRows_rs_vote?></h6>
	</fieldset>//-->
	<?php mysql_free_result($rs_vote)?>
	</div>
	<script src="jquery-1.3.1.min.js" language="javascript"></script>
	</div>
	<div class="box">
	<div id="qp_main80384" style="border:1px solid black;margin:10px;padding:10px;padding-bottom:12px;background-color:rgb(44,97,141)">
	<div style="font-family:Arial;font-size:12px;font-weight:bold;background-color:rgb(18,50,90);width:100%;color:white"><div style="padding:10px">Which is your favorite team?</div></div>
	<form id="qp_form80384" action="team_polls.php" method="post" target="_blank" style="padding:0px;margin-top:10px">
	<div style="width:100%"><div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="1">Lunchbar Quins</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="2">Nakuru</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="3">Strathmore</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="4">Mwamba</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="5">Impala</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="6">Nondies</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="7">Meanmachine</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="8">Homeboyz</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="9">Kisumu</span></div></div>
	<div style="padding-top:10px;clear:both">
	<input name="qp_b80384" style="width:80px;margin-right:5px" type="submit" value="Vote" /></div>
	</form></div>
	<?php require_once('connections/team_vote.php');?>
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
	<!--<fieldset>
	<legend style="color:#FFF">Results</legend>
		<ul>
		<li>
			<span style="color:#FFF">Lunchbar Quins</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion1?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion1, 2); ?>%; color:#FFF;">
				<?php echo round($perQuestion1, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Nakuru</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion2?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion2, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion2, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Strathmore</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion3?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion3, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion3, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Mwamba</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion4?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion4, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion4, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Impala</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion5?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion5, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion5, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Nondies</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion6?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion6, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion6, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Meanmachine</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion7?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion7, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion7, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Homeboyz</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion8?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion8, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion8, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Kisumu</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion9?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($percentQuestion9, 2); ?>%; color:#FFF;">
				<?php echo round($percentQuestion9, 2); ?>%
			</div>
		</li>
		</ul>
	<h6 style="color:#FFF">Total votes:<?php echo $totalRows_rs_vote?></h6>
	</fieldset>//-->
	<br class="clearfix">
	</div>
	</div>
	</div>
	</div>
	<div id="page-bottom">
	<div id="page-bottom-content">
	<h3>Sponsors</h3>
        <img src="images/general_image.jpg" width="250" height="250">
    	<img src="images/Kenya-National-Sevens-team.jpg" name="slide7" width="350" height="250">
    	<img src="images/international-rugby-board-logo11.jpg" width="250" height="250">
	</div>
	<br class="clearfix" />
	</div>
</div>
<div id="footer">
	Copyright (c) 2012 rugbyholic.com. All rights reserved. <a href="adminlogin.php">Adagala</a>.
</div>
</body>
</html>