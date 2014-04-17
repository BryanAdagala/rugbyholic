<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Tournaments</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div id="wrapper">
	<div id="header">
	<div id="logo">
	<h1>Rugbyholic</h1>
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
		<li class="last"><a href="tournaments.php">Tournaments</a></li>
	</ul>
	<br class="clearfix" />
	</div>
	<div id="splash">
	<iframe width="560" height="315" src="http://www.youtube.com/embed/dWwmJGJ7jIA" frameborder="0" allowfullscreen></iframe>
	</div>
	<br class="clearfix" />
	<div id="page">
	<div id="content">
	<div class="box">
	</div>
	
	<div class="box" id="content-box1">
	<h3>Ongoing Tournaments</h3>
	<img class="pic alignleft" src="images/Bamburi-Rugby-Super-Series.jpg" width="70" height="70" alt="" />
	<div><span><b>
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series="";
		//sql query for selecting field entries
		$name=mysql_query('SELECT  tournamentname FROM tournaments WHERE tournamentid=1');
		while ($row=mysql_fetch_array($name)){
		$tournamentname=$row['tournamentname'];
		$super_series_name="$tournamentname";
		echo $super_series_name;
		}
		?>
		</b></span></div>
		<div><span><b>Date:
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series="";
		//sql query for selecting field entries
		$tarehe=mysql_query('SELECT  date FROM tournaments WHERE tournamentid=1');
		while ($row=mysql_fetch_array($tarehe)){
		$date=$row['date'];
		$super_series_date="$date";
		echo $super_series_date;
		}
		?>
		</b></span></div>
		<div><span><b>Time:
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series_time="";
		//sql query for selecting field entries
		$wakati=mysql_query('SELECT  time FROM tournaments WHERE tournamentid=1');
		while ($row=mysql_fetch_array($wakati)){
		$time=$row['time'];
		$super_series_time="$time";
		echo $super_series_time;
		}
		?>
		</b></span></div>
		<div><span><b>Venue:
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series_grao="";
		//sql query for selecting field entries
		$rfu=mysql_query('SELECT  venue FROM tournaments WHERE tournamentid=1');
		while ($row=mysql_fetch_array($rfu)){
		$venue=$row['venue'];
		$super_series_grao="$venue";
		echo $super_series_grao;
		}
		?>
		</b></span></div>
		<div>
		<span>
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series="";
		//sql query for selecting field entries
		$bamburi=mysql_query('SELECT  description FROM tournaments WHERE tournamentid=1');
		while ($row=mysql_fetch_array($bamburi)){
		$description=$row['description'];
		$super_series="$description";
		echo $super_series;
		echo "<form action='checkout.php'><div><input type='submit' name='' value='Book'></div></form>";
		}
		?>
		</span>
		</div>
	</li>
	</div>
	<div class="box" id="content-box2">
	<h3>Upcoming Tournaments</h3>
	<ul class="section-list">
		<img class="pic alignleft" src="images/elgon cup-poster 2009.JPG" width="70" height="70" alt="" />
		<span><b>
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series="";
		//sql query for selecting field entries
		$name=mysql_query('SELECT  tournamentname FROM tournaments WHERE tournamentid=2');
		while ($row=mysql_fetch_array($name)){
		$tournamentname=$row['tournamentname'];
		$super_series_name="$tournamentname";
		echo $super_series_name;
		}
		?></b></span>
		<div><span><b>Date:
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series="";
		//sql query for selecting field entries
		$tarehe=mysql_query('SELECT  date FROM tournaments WHERE tournamentid=2');
		while ($row=mysql_fetch_array($tarehe)){
		$date=$row['date'];
		$super_series_date="$date";
		echo $super_series_date;
		}
		?>
		</b></span></div>
		<div><span><b>Time:
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series_time="";
		//sql query for selecting field entries
		$wakati=mysql_query('SELECT  time FROM tournaments WHERE tournamentid=2');
		while ($row=mysql_fetch_array($wakati)){
		$time=$row['time'];
		$super_series_time="$time";
		echo $super_series_time;
		}
		?>
		</b></span></div>
		<div><span><b>Venue:
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series_grao="";
		//sql query for selecting field entries
		$rfu=mysql_query('SELECT  venue FROM tournaments WHERE tournamentid=2');
		while ($row=mysql_fetch_array($rfu)){
		$venue=$row['venue'];
		$super_series_grao="$venue";
		echo $super_series_grao;
		}
		?>
		</b></span></div>
		<div><span>
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series="";
		//sql query for selecting field entries
		$bamburi=mysql_query('SELECT  description FROM tournaments WHERE tournamentid=2');
		while ($row=mysql_fetch_array($bamburi)){
		$description=$row['description'];
		$super_series="$description";
		echo $super_series;
		echo "<div><button>Book</button></div>";
		}
		?>
		</span></div>
		<img class="pic alignleft" src="images/Safaricom 7's.jpg" width="70" height="70" alt="" />
		<span><b>
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series="";
		//sql query for selecting field entries
		$name=mysql_query('SELECT  tournamentname FROM tournaments WHERE tournamentid=3');
		while ($row=mysql_fetch_array($name)){
		$tournamentname=$row['tournamentname'];
		$super_series_name="$tournamentname";
		echo $super_series_name;
		}
		?>
		</b></span>
		<div><span><b>Date:
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series="";
		//sql query for selecting field entries
		$tarehe=mysql_query('SELECT  date FROM tournaments WHERE tournamentid=3');
		while ($row=mysql_fetch_array($tarehe)){
		$date=$row['date'];
		$super_series_date="$date";
		echo $super_series_date;
		}
		?>
		</b></span></div>
		<div><span><b>Time:
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series_time="";
		//sql query for selecting field entries
		$wakati=mysql_query('SELECT  time FROM tournaments WHERE tournamentid=3');
		while ($row=mysql_fetch_array($wakati)){
		$time=$row['time'];
		$super_series_time="$time";
		echo $super_series_time;
		}
		?>
		</b></span></div>
		<div><span><b>Venue:
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series_grao="";
		//sql query for selecting field entries
		$rfu=mysql_query('SELECT  venue FROM tournaments WHERE tournamentid=3');
		while ($row=mysql_fetch_array($rfu)){
		$venue=$row['venue'];
		$super_series_grao="$venue";
		echo $super_series_grao;
		}
		?>
		</b></span></div>
		<div><span>
		<?php
		//make a connection to the server and select a db
		mysql_connect('localhost', 'root', '');
		mysql_select_db('rugbyholic');
		//variable decalarations
		$super_series="";
		//sql query for selecting field entries
		$bamburi=mysql_query('SELECT  description FROM tournaments WHERE tournamentid=3');
		while ($row=mysql_fetch_array($bamburi)){
		$description=$row['description'];
		$super_series="$description";
		echo $super_series;
		echo "<div><button>Book</button></div>";
		}
		?>
		</span></div>
	</ul>
	<br class="clearfix" />
	</div>
	<br class="clearfix" />
	</div>
	<div id="sidebar">
	<div class="box">
	<h3>Post a comment</h3>
	<form method="post" action="comments.php">
	<table>
	<tr>
	<td><div><label>Name:</label></div></td>
	</tr>
	<tr>
	<td><div><input type="text" name="uname" /></div></td>
	</tr>
	<tr>
	<td><div>Comment:</div></td>
	</tr>
	<tr>
	<td><div><textarea name="bonga"></textarea></div></div></td>
	</tr>
	<tr>
	<td><div><input type="submit" name="submit" id="submit"value="Comment"></div></td>
	</tr>
	</form>
	</table>
	<p>
	</div>
	<div class="box">
	<h3></h3>
	<div class="date-list">
	<?php
	//establish connection to db
	$dbcnx = @mysql_connect("localhost", "root", "") or die( "Unable to connect to the database server at this time." );
	
	//select database
	if (! @mysql_select_db("rugbyholic") ) {
    echo( "<P>Unable to locate the joke database at this time.</P>" );
    exit();
	}
	
	//variable declaration
	$comment="";
	$comment2="";
	
	//sql query that selects items from the db and displays to web page
	$sql = mysql_query("SELECT * FROM kubonga");
	while ($row=mysql_fetch_array($sql)){
		$bonga=$row['bonga'];
		$user=$row['user'];
		
		$comment="$bonga";
		$comment2="$user";
		
		echo '<em><b>'.$user.'</b></em>';
		echo "<p>" .$bonga. "</p>";
	}
	?>
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
	Copyright (c) 2012 rugbyholic.com. All rights reserved. Design by <a href="adminlogin.php">Adagala</a>.
</div>
</body>
</html>
