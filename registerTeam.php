<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Team registration</title>
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
		<li><a href="registerTeam.php">Registrations</a></li>
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
	<h3>Kenya Cup Log</h3>
	<form method="post" action="processteam.php" name="">
	<table width="250" border="0" cellspacing="2" cellpadding="0">
	<tr>
		<td width="125" valign="middle"><div><label for="team">Team</label></div></td>
		<td width="150" valign="top"><div align="right"><input type="text" name="team" size="" /></div></td>
	</tr>
	<tr>
		<td valign="top"><div align="right"></div></td>
		<td valign="top"><div align="right"><input type="submit" name="submit" value="Register"></div></td>
	</tr>
	</table>
	</form>
	<br class="clearfix" />
	</div>
	<div class="box" id="content-box2">
	<h3>Type here</h3>
	</div>
	<br class="clearfix" />
	</div>
	<div id="sidebar">
	<div class="box">
	<!--<h3>Poll statistics</h3>//-->
	</div>
	<div class="box">
	<div class="date-list">
	<h3>Type here</h3>
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
