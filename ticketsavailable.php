<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Administrator::Tickets</title>
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
		<li><a href="ticketsavailable.php">Tickets & Ratings</a></li>
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
	<h3>Tickets</h3>
	<br class="clearfix" />
	<div class="box" id="content-box2">
	<h3>Ratings</h3>
	<?php
		$player=$_POST['player'];
		
		mysql_connect('localhost', 'root', '');
		
		$sql=("INSERT INTO ratings(player) VALUES ('$player') ");
		mysql_select_db('rugbyholic');
		mysql_query($sql);
		header('location:ticketsavailable.php');
	?>
	</div>
	<br class="clearfix" />
	<form action="ticketsavailable.php" method="post">
	Player:<input type="text" name="player" /><br />
	<input type="submit" value="Add" />
	</form>
	</div>
	<div id="sidebar">
	<div class="box">
	</div>
	<div class="box">
	<div class="date-list">
	<h3>Impala Flood Lit Tournament</h3>
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
