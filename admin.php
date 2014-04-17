<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Home</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.3.1.min.js"></script>
</head>
<body>
	<div id="wrapper">
	<div id="header">
	<div id="logo">
	<h1>Rugbyholic Control Pannel</h1>
	</div>
	<div id="slogan">
	</div>
	</div>
	<div id="menu">
	<ul>
		<li class="first current_page_item"><a href="admin.php">Home</a></li>
		<li><a href="standings.php">Standings</a></li>
		<li><a href="registerTeam.php">Register team</a></li>
		<li class="last"><a href="logadminout.php">Logout</a></li>
	</ul>
	<br class="clearfix" />
	</div>
	<div id="splash">
	<img src="images/rugbyholic(1025x288).jpg" height="300" />
	</div>
	<br class="clearfix" />
	<div id="page">
	<div id="content">
	<div class="box">
	</div>
	<div class="box" id="content-box1">
	<h3>News feed</h3>
	<form action="processnews.php" method="post" name="myform" onsubmit="validatenews();">
	<div><label for="headlines">Headlines:</label></div>
	<div><textarea type="text" name="headlines" id="headlines"></textarea></div>
	<div><label for="news">News:</label></div>
	<div><textarea type="text" name="news" id="news"></textarea></label></div>
	<div><input type="submit" value="Update"/></div>
	</form>
	<script type="text/javascript">
	function validatenews(){
		var a=document.forms["myform"]["headlines"].value;
		var b=document.forms["myform"]["news"].value;
		if (a== null || a== ""){
			alert("Enter Headline");
			return false;
		}
		if (b== null || b==""){
			alert("Enter News article");
			return false;
		}
		}
	</script>
	<br />
	<?php
	mysql_connect("localhost", "root", "") or die("Unable to connect to the database server at this time." );
	mysql_select_db("rugbyholic") or die( "Unable to locate the database at this time." );
	
	//pagination variable declarations
	$per_page=6;
	$pages_query=mysql_query("SELECT  COUNT ('userid') FROM subscriptions");
	//$pages=ceil(mysql_result($pages_query,0)/$per_page);
	$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start=($page - 1) * $per_page;
	
	// Request the list of all the 
	$news_list1="";
	$news_list2="";
	$news_list3="";
	
	//sql query that gets items from the db
	$sql = mysql_query("SELECT * FROM newsdetails LIMIT $start, $per_page");
	while ($row=mysql_fetch_assoc($sql)){
		$newsid=$row['newsid'];
		$headlines=$row['headlines'];
		$news=$row['news'];
		
		$news_list1="$headlines";
		$news_list2="$news";
		
		echo "<table cellspacing='10' border='0' cellpadding='5' colspan='5'>
		<tr><td><b>HEADLINES:</b></td><td>$news_list1</td></tr>;
		<tr><td><b>NEWS:</b></td><td>$news_list2</td></tr>;
		<td><a href='delnews.php?newsid=".$newsid."'>Delete</a></td>
		</table>";
		}
	
	/*if ($pages >=1 && $page <= $pages){
		for ($x=1; $x<=$pages; $x++){
			echo ($x == $page) ? '<strong><a href="?page='.$x.'">'.$x.'</a></strong>': '<a href="?page='.$x.'">'.$x.'</a>';
		}
	}*/
	?>
	</div>
	<div class="box" id="content-box2">
	<h3>Subscriptions</h3>
	<?php
	// Connect to the database server
	$conn = @mysql_connect("localhost", "root", "") or die("Unable to connect to the database server at this time." );
	
	// Select the database
	$choose=@mysql_select_db("rugbyholic") or die( "Unable to locate the database at this time." );
	
	//pagination variable declarations
	$per_page=6;
	$pages_query=mysql_query("SELECT  COUNT ('userid') FROM subscriptions");
	//$pages=ceil(mysql_result($pages_query,0)/$per_page);
	$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start=($page - 1) * $per_page;
	
	// Request the list of all the 
	$user_list1="";
	$user_list2="";
	$user_list3="";
	
	//sql query that gets items from the db
	$sql = mysql_query("SELECT * FROM subscriptions LIMIT $start, $per_page");
	while ($row=mysql_fetch_assoc($sql)){
		$email=$row['email'];
		$userid=$row['userid'];
		$phone=$row['phone'];
		$favteam=$row['teamid'];
		$user_list1="$email";
		$user_list2="$phone";
		$user_list3="$favteam";
		echo "<table cellspacing='10' border='0' cellpadding='5' colspan='5'>
		<tr><td><b>EMAIL:</b></td><td>$user_list1</td></tr>";
		echo"<tr><td><b>PHONE:</b></td><td>$user_list2</td></tr>";
		echo"<tr><td><b>TEAM:</b></td><td>$user_list3</td>";
		echo "<tr><td><hr /></td></tr>";
		echo "</tr>";
		echo "<td><a href='delete.php?userid=".$userid."'>Delete</a></td>
		</table>";
	}
	
	/*if ($pages >=1 && $page <= $pages){
		for ($x=1; $x<=$pages; $x++){
			echo ($x == $page) ? '<strong><a href="?page='.$x.'">'.$x.'</a></strong>': '<a href="?page='.$x.'">'.$x.'</a>';
		}
	}*/
	?>
	</div>
	<br class="clearfix" />
	</div>
	<div id="sidebar">
	<div class="box">
	<!--<h3>Poll statistics</h3>//-->
	</div>
	<div class="box">
	<div class="date-list">
	<h3>Comments</h3>
	<?php
	$dbcon = @mysql_connect("localhost", "root", "");
	if (!$dbcon) {
    echo( "<P>Unable to connect to the database server at this time.</P>" );
    exit();
	}
	if (! @mysql_select_db("rugbyholic") ) {
    echo( "<P>Unable to locate the joke database at this time.</P>" );
    exit();
	}
	?>
	<?php
	$maoni="";
	$maoni2="";
	
	$sql = mysql_query("SELECT * FROM kubonga");
	
	while ($row=mysql_fetch_array($sql)){
		$user=$row['user'];
		$bonga=$row['bonga'];
		$kubongaid=$row['kubongaid'];
		
		$maoni="$bonga";
		$maoni2="$user";
		echo 
		"<table cellspacing='10' border='0' cellpadding='5' colspan='5'>
		<tr><td><b>$maoni2</b></td></tr>
		<tr><td>$maoni</td></tr>
		</tr>
		<tr><td><a href='delcomment.php?kubongaid=".$kubongaid."'>Delete</a></td></tr>
		</table>";
	}
	?>
	<br class="clearfix"/>
	</div>
	</div>
	</div>
	<br class="clearfix" />
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
