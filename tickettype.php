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
		<li class="last"><a href="tournaments.php">Tournaments</a></li>
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
    	<div>Email address:&nbsp;</div>
    	<div><input type="text" size="25" name="email" onFocus="this.value=''" style="width:135px"></div>
    	<div>Phone Number:&nbsp;</div>
    	<div><input type="text" size="25" name="phone" onFocus="this.value=''" style="width:135px"></div>
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
    		</select>
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
	<br class="clearfix"/>
	<h3>Ticket type</h3>
	<?php
	
	error_reporting(E_ALL ^ E_NOTICE);
	
    $elgon= htmlspecialchars(trim($_POST['elgon']));
	$bamburi= htmlspecialchars(trim($_POST['bamburi']));
	$chairmans= htmlspecialchars(trim($_POST['chairmans']));
	$floodiez= htmlspecialchars(trim($_POST['floodiez']));
	
	echo $elgon;
	echo $bamburi;
	echo $chairman;
	echo $floodiez;
	?>
	<form action="">
	<input type="radio" name="" value="">VIP<br />
	<input type="radio" name="" value="">REGULAR<br />
	
	<input type="hidden" name="elgon"  value="<?php echo $elgon?>" id="elgon"/>
	<input type="hidden" name="bamburi"  value="<?php echo $bamburi?>" id="bamburi"/>
	<input type="hidden" name="chairmans"  value="<?php echo $chairmans?>" id="chairmans"/>
	<input type="hidden" name="floodiez"  value="<?php echo $floodiez?>" id="floodiez"/>
	<input type="submit" value="Choose"/>
	</form>
	<!--<h3>Join the fan fraternity</h3>
	<form method="post" action="getstarted.php" name="formsubscribe" onsubmit="validateuser();">
		<div>Email address:</div>
        <div><input type="text" name="email" size="25"/></div>
    	<div>Phone number:</div>
        <div><input type="password" name="phone" size="25"/></div>
		<div><input type="submit" value="Join" /></div>
	</form>
	<script type="text/javascript">
			function validateuser()
			{
			var x=document.forms["formsubscribe"]["email"].value;
			var y=document.forms["formsubscribe"]["phone"].value;
			if (x== null || x== "")
			{
			alert("Enter Email address");
			return false;
			}
			if (y== null || y=="Choose a team")
			{
			alert("Enter Phone number");
			return false;
			}
			}
	</script>//-->
	</div>
	<div class="box" id="content-box2">
	<h2>
	<?php
		$link=@mysql_connect('localhost', 'root', '');
		if(!$link){
			echo "<p>Unable to connect to db</p>";
			exit();
		}
		if(!mysql_select_db('rugbyholic')){
			echo "<p>Welcome to rugbyholic, Keep it Fanatic</p>";
			exit();
		}
	?>
    <?php
	$head="";
	$result=mysql_query('SELECT headlines FROM newsdetails WHERE newsid=5');
	while ($row=mysql_fetch_assoc($result)){
		$headlines=$row['headlines'];
		$head="$headlines";
		echo $head;
	}
	?>
    </h2>
	<p>
    <?php
	$link=@mysql_connect('localhost', 'root', '');
	if(!$link){
		echo "<p>Unable to connect to db</p>";
		exit();
	}
	if(!mysql_select_db('rugbyholic')){
		echo "<p>Welcome to rugbyholic, Keep it Fanatic</p>";
		exit();
	}
	?>
    <?php
	$body="";
	$habari=mysql_query('SELECT news FROM newsdetails WHERE newsid=5');
	while ($row=mysql_fetch_array($habari)){
		$news=$row['news'];
		$body="$habari";
		echo $news;
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
	<h3>Player polls</h3>
	<form>
	<input type="radio" name="" value="" />Collins Injers<br />
	<input type="radio" name="" value="" />Humphrey Khayange<br />
	<input type="radio" name="" value="" />Felix Ayange<br />
	<input type="radio" name="" value="" />Lavin Asego<br />
	<input type="radio" name="" value="" />Nato Simiyu<br />
	<input type="submit" value="Vote"/>
	</form>
	</div>
	<div class="box">
	<h3>Team polls</h3>
	<div class="date-list">
	<form>
		<input type="radio"/>Lunchbar Quins<br />
		<input type="radio"/>Strathmore Leos<br />
		<input type="radio"/>KCB<br />
		<input type="radio"/>Impala<br />
		<input type="submit" value="Vote"/>
    </form>
	<br class="clearfix">
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