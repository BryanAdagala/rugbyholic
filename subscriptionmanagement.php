<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Administrator</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.3.1.min.js"></script>
</head>
<body>
	<div id="wrapper">
	<div id="header">
	<div id="logo">
	<h1>Rugbyholic Admin Pannel</h1>
	</div>
	<div id="slogan">
	</div>
	</div>
	<div id="menu">
	<ul>
		<li class="first current_page_item"><a href="admin.php">News feeds</a></li>
        <li><a href="#">Comments & Uploads</a></li>
		<li class="last"><a href="subscriptionmanagement.php">Subscriptions</a></li>
		<li class="last"><a href="tournamentmanagement.php">Fixtures & Log</a></li>
		<li class="last"><a href="logadminout.php">Logout</a></li>
	</ul>
	<br class="clearfix" />
	</div>
	<div id="splash">
	</div>
	<br class="clearfix" />
	<div id="page">
	<div id="content">
	<div class="box">
	</div>
	<div class="box" id="content-box1">
	</div>
	<div class="box" id="content-box2">
		<?php
	// Connect to the database server
	$dbcnx = @mysql_connect("localhost", "root", "");
	if (!$dbcnx) {
    echo( "<P>Unable to connect to the database server at this time.</P>" );
    exit();
	}
	// Select the jokes database
	if (! @mysql_select_db("rugbyholic") ) {
    echo( "<P>Unable to locate the joke database at this time.</P>" );
    exit();
	}
	?>
	<?php
	// Request the list of all the users
	$user_list1="";
	$user_list2="";
	$user_list3="";
	$sql = mysql_query("SELECT * FROM subscriptions");
	while ($row=mysql_fetch_array($sql)){
		$email=$row['email'];
		$phone=$row['phone'];
		$favteam=$row['favteam'];
		$user_list1="$email";
		$user_list2="$phone";
		$user_list3="$favteam";
		echo 
		"<table cellspacing='10' border='0' cellpadding='5' colspan='5'>
		<tr><td>$user_list1</td></tr>
		<tr><td>$user_list2</td></tr>
		<tr><td>$user_list3</td>
		</tr>
		<tr><td><button action='delete.php'>Delete</button></td></tr>
		</table>";
	}
	?>
	</div>
	<br class="clearfix" />
	</div>
	<div id="sidebar">
	<div class="box">
	</div>
	<div class="box">
	<div class="date-list">
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
	Copyright (c) 2012 rugbyholic.com. All rights reserved. <a href="adminpannel.php">Adagala</a>.
</div>
</body>
</html>

