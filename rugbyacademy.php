<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Fixtures</title>
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
		<li><a href="rugbyacademy.php">Academy</a></li>
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
	<h3>Schools Rugby</h3>
	<form method="post" action="" name="">
	<div><label for="school"><b>School:</b></label></div>
	<div><input type="text" name="shule" size="" /></div>
	<div><label for="information"><b>Information:</b></label></div>
	<div><textarea name="info" size=""></textarea></div>
	<div></div>
	<div><input type="submit" name="submit" value="Update"></div>
	</tr>
	</table>
	</form>
	<br class="clearfix" />
	<!--<?php
	$unganisha= @mysql_connect("localhost", "root", "");
	if (!$unganisha) {
    echo( "<P>Unable to connect to the database server at this time.</P>" );
    exit();
	}
	if (! @mysql_select_db("rugbyholic") ) {
    echo( "<P>Unable to locate the joke database at this time.</P>" );
    exit();
	}
	
	//variable declarations
	$rank1="";
	$rank2="";
	$rank3="";
	$rank4="";
	$rank5="";
	$rank6="";
	$rank7="";
	
	//sql query that selects content from table
	$sql = mysql_query("SELECT * FROM log");
	while ($row=mysql_fetch_array($sql)){
		$team=$row['team'];
		$logid=$row['logid'];
		$played=$row['played'];
		$won=$row['won'];
		$drawn=$row['drawn'];
		$lost=$row['lost'];
		$bonus=$row['bonus'];
		$points=$row['points'];
		
		$rank1="$team";
		$rank2="$played";
		$rank3="$won";
		$rank4="$drawn";
		$rank5="$lost";
		$rank6="$bonus";
		$rank7="$points";
		
		echo "<table>
		<tr><td><b>TEAM:</b></td><td>$rank1</td></tr>
		<tr><td><b>PLAYED:</b></td><td>$rank2</td></tr>
		<tr><td><b>WON:</b></td><td>$rank3</td></tr>
		<tr><td><b>DRAWN:</b></td><td>$rank4</td></tr>
		<tr><td><b>LOST:</b></td><td>$rank5</td></tr>
		<tr><td><b>BONUS:</b></td><td>$rank6</td></tr>
		<tr><td><b>POINTS:</b></td><td> $rank7</td></tr>
		<tr><td><a href='delog.php?essid=".$logid."'>Delete</a></td></tr></table>";
	}
	?>//-->
	</div>
	<div class="box" id="content-box2">
	<h3>Club Rugby</h3>
	<form method="post" action="essupdate.php" name="">
	<div><label for="team"><b>Team:</b></label></div>
	<div><input type="text" name="team" size="" /></div>
	<div><label for="played"><b>Information:</b></label></div>
	<div><textarea name="played"></textarea></div>
	<div align="right"></div>
	<div><input type="submit" name="submit" value="Update"></div>
	</form>
	<br />
	<!--<?php
	$dbconn= @mysql_connect("localhost", "root", "");
	if (!$dbconn) {
    echo( "<P>Unable to connect to the database server at this time.</P>" );
    exit();
	}
	if (! @mysql_select_db("rugbyholic") ) {
    echo( "<P>Unable to locate the joke database at this time.</P>" );
    exit();
	}
	
	//variable declarations
	$ess1="";
	$ess2="";
	$ess3="";
	$ess4="";
	$ess5="";
	$ess6="";
	$ess7="";
	
	//sql query that selects content from table
	$sql = mysql_query("SELECT * FROM ess");
	while ($row=mysql_fetch_array($sql)){
		$team=$row['team'];
		$essid=$row['essid'];
		$played=$row['played'];
		$won=$row['won'];
		$drawn=$row['drawn'];
		$lost=$row['lost'];
		$bonus=$row['bonus'];
		$points=$row['points'];
		
		$ess1="$team";
		$ess2="$played";
		$ess3="$won";
		$ess4="$drawn";
		$ess5="$lost";
		$ess6="$bonus";
		$ess7="$points";
		
		
		echo "<table>
		<tr><td><b>TEAM:</b></td><td>$ess1</td></tr>
		<tr><td><b>PLAYED:</b></td><td>$ess2</td></tr>
		<tr><td><b>WON:</b><td>$ess3</td></tr>
		<tr><td><b>DRAWN:</b></td><td>$ess4</td></tr>
		<tr><td><b>LOST:</b></td><td>$ess5</td></tr>
		<tr><td><b>BONUS:</b></td><td>$ess6</td></tr>
		<tr><td><b>POINTS:</b></td><td>$ess7</td></tr>
		<tr><td><a href='essdel.php?essid=".$essid."'>Delete</a></td></tr>
		</table>";
	}
	?>//-->
	</div>
	<br class="clearfix" />
	</div>
	<div id="sidebar">
	<div class="box">
	<!--<h3>Poll statistics</h3>//-->
	</div>
	<div class="box">
	<div class="date-list">
	<h3>Womens Rugby</h3>
	<form method="post" action="" name="">
	<div><label for="team"><b>Team:</b></label></div>
	<div><input type="text" name="kulabu" size="" /></div>
	<div><label for="information"><b>Information:</b></label></div>
	<div><textarea name="info" size=""></textarea></div>
	<div></div>
	<div><input type="submit" name="submit" value="Update"></div>
	</tr>
	</table>
	</form>
	<br />
	<!--<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("rugbyholic");
	$kru1="";
	$kru2="";
	$kru3="";
	$kru4="";
	$kru5="";
	$tourna= mysql_query("SELECT * FROM tournaments");
	while ($row=mysql_fetch_array($tourna)){
		$tournamentid=$row['tournamentid'];
		$tournamentname=$row['tournamentname'];
		$date=$row['date'];
		$time=$row['time'];
		$venue=$row['venue'];
		$description=$row['description'];
		
		$kru1="$tournamentname";
		$kru2="$date";
		$kru3="$time";
		$kru4="$venue";
		$kru5="$description";
		
		echo "<table>
		<tr><td><b>TOURNAMENT:</b></td><td>$kru1</td></tr>
		<tr><td><b>DATE:</b></td><td>$kru2</td></tr>
		<tr><td><b>TIME:</b><td>$kru3</td></tr>
		<tr><td><b>VENUE:</b></td><td>$kru4</td></tr>
		<tr><td><b>DESCRIPTION:</b></td><td>$kru5</td></tr>
		<tr><td><a href='addtournament.php?tournamentid=".$tournamentid."'>Delete</a></td></tr>
		</table>";
	}
	?>//-->
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
