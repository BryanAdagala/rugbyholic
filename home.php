<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Homepage</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">
	function getVote(int)
	{
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
	}
	xmlhttp.open("GET","poll_vote.php?vote="+int,true);
	xmlhttp.send();
	}
	</script>
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
	<script>
	//manipulate the mobile payment options
	$(function(){
	$("#impala").hide();
	$("#gazelless").change(function(e){
	$("#impala").hide();
	var selected=$("#impala").val();
		if(clicked=="<a href=''></a>")
		{
			$("#gazelles").show();
		}
	});
	});
	//manipulate the credit card selection options
	$(function(){
	$("#credit_card").hide();
	$("#mobile_cash").change(function(e){
	$("#credit_card").hide();
	var selected=$("#mobile_cash").val();
	if(selected=="Credit Card")
	{
		$("#credit_card").show();
	}
	});
	});
</script>
</head>
<body>
	<div id="wrapper">
	<div id="header">
	<div id="logo">
		<h1><a href="#">Rugbyholic</a></h1>
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
		<li class="first current_page_item"><a href="home.php">Home</a></li>
		<li class="last"><a href="tournaments.php">Tournamets</a></li>
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
	<?php
		mysql_connect('localhost','root','');
		mysql_select_db('rugbyholic');
			
		$sql=("SELECT * FROM team_polls");
		$choose=mysql_query($sql);
		$number=mysql_num_rows($choose);
	?>
    <div>Favorite team:&nbsp;</div>
	<div>
	<?php
		echo '<select name="teamid">';
		for($i=0; $i<=$number; $i++){
		while ($row=mysql_fetch_array($choose)){
				
	?>
	<option value="<?php echo "$row[teamid]";?>"><?php echo "$row[favteam]"; ?></option>
	<?php
	}
	}
	echo "</select>";
	mysql_close();		
	?>
	</div>
	<br />
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
	<br />
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
	<br />
		<li class="first">
		<img class="pic alignleft" src="images/200px-Impala_RFC.png" width="70" height="70" alt="" />
		<span><b>Impala Gazzelles</b></span>
		<div><span>Is one of the most decorated rugby clubs in the local scene. Situated along ngong road, Impala club
		home of the Impala gazzelles is the place to be <div><a href="#" id="gazelles">Read more...</a></div>
		<div id="impala">Impala RFC has a player number of 150, 100 being the numbers in the team's academy. The coaching team of Impala RFC is comprised of the head coach
		assisted with the assistant coach and a fitness and conditionning coach. Impala also boasts of organizing and hosting their own tournaments such as the floodlit impala tournament.
		Impala club was started in 1968 and won their first title which was the chairman's cup in 1969.</div>
		</span></div>
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
	</div>
	<br class="clearfix" />
	</div>
	<div id="sidebar">
	<div class="box">
	<div id="poll">
	<h3>Who is your favorite player?</h3>
	<form>
	<input type="radio" name="vote" value="0" onclick="getVote(this.value)" />Brian Nyikuli<br />
	<input type="radio" name="vote" value="1" onclick="getVote(this.value)" />Biko Adema<br />
	<input type="radio" name="vote" value="2" onclick="getVote(this.value)" />Leon Adongo<br />
	<input type="radio" name="vote" value="3" onclick="getVote(this.value)" />Humphrey Khayange<br />
	<input type="radio" name="vote" value="4" onclick="getVote(this.value)" />Collins Injera<br />
	<input type="radio" name="vote" value="5" onclick="getVote(this.value)" />Ken Isindu<br />
	<input type="radio" name="vote" value="6" onclick="getVote(this.value)" />Edwin Salamba<br />
	<input type="radio" name="vote" value="7" onclick="getVote(this.value)" />Polycap Odhiambo<br />
	</form>
	</div>
	</div>
	<div class="box">
	<h3>Which team is your favorite?</h3>
	<form>
	<input type="radio" name="team_vote" value="8" onclick="getVote(this.value)" />Kenya Harlequins<br />
	<input type="radio" name="team_vote" value="9" onclick="getVote(this.value)" />Impala<br />
	<input type="radio" name="team_vote" value="10" onclick="getVote(this.value)" />Nakuru<br />
	<input type="radio" name="team_vote" value="11" onclick="getVote(this.value)" />Nondies<br />
	<input type="radio" name="team_vote" value="12" onclick="getVote(this.value)" />Strathmore<br />
	<input type="radio" name="team_vote" value="13" onclick="getVote(this.value)" />Mwamba<br />
	<input type="radio" name="team_vote" value="14" onclick="getVote(this.value)" />Homboyz<br />
	<input type="radio" name="team_vote" value="15" onclick="getVote(this.value)" />Meanmachnine<br />
	</form>
	<br />
	<h3>Which is your favorite Kenya Cup Franchaise?</h3>
	<form>
	<input type="radio" name="vote" value="0" onclick="getVote(this.value)" />Rhinos<br />
	<input type="radio" name="vote" value="1" onclick="getVote(this.value)" />Cheetahs<br />
	<input type="radio" name="vote" value="2" onclick="getVote(this.value)" />Ruwenzori<br />
	<input type="radio" name="vote" value="3" onclick="getVote(this.value)" />Sharks<br />
	<input type="radio" name="vote" value="4" onclick="getVote(this.value)" />Victoria<br />
	<input type="radio" name="vote" value="5" onclick="getVote(this.value)" />Buffaloes<br />
	<input type="radio" name="vote" value="6" onclick="getVote(this.value)" />Lions<br />
	<input type="radio" name="vote" value="7" onclick="getVote(this.value)" />Coastal Bulls<br />
	</form>
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
	<div id="page-bottom-sidebar"></div>
	<br class="clearfix" />
	</div>
</div>
<div id="footer">
	Copyright (c) 2012 .All rights reserved. Design by <a href="adminlogin.php">Adagala</a>.
</div>
</body>
</html>