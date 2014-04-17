<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Fanzone</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">
	<!--
	var image1=new Image()
	image1.src="images/http-__i1.ytimg.com_vi_HSNUhKeJ1V0_hqdefault.jpg"
	var image2= new Image ()
	image2.src="images/safaricom sevens 239.jpg"
	var image3=new Image ()
	image3.src="images/FLAGS FANS CU.jpg"
	//-->
	</script>
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
			<li class="first current_page_item"><a href="purchaseitems.php">Home</a></li>
			<li class="last"><a href="logoutuser.php">Logout</a></li>
		</ul>
	<br class="clearfix" />
	</div>
	<div id="splash">
	<img src="images/http-__i1.ytimg.com_vi_HSNUhKeJ1V0_hqdefault.jpg" name="slide" width="550" height="300">
    <script>
	<!--
	var step=1
	function slideit (){
	if(!document.images)
	return
	document.images.slide.src=eval("image"+step+".src")
	if (step<3)
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
	<h3>Select an item</h3>
		<form method="post" action="">
			<input type="radio" name="" value="placard" />Placard<br />
			<input type="radio" name="" value="banner" />Banner<br />
			<input type="radio" name="" value="scarf" />Scarf<br />
			<input type="radio" name="" value="tshirt" />T-Shirt<br />
			<input type="radio" name="" value="head band" />Head band<br />
			<input type="radio" name="" value="wrist band" />Wrist band<br />
			<input type="radio" name="" value="wig" />Wig<br />
			<input type="submit" value="Order">
		</form>
	</div>
	<div class="box" id="content-box2">
		<h3>Upload a file</h3>
	<form method="post" action="purchaseitems.php" enctype="multipart/form-data">
	<table>
	<tr>
		<td  width="150" valign="top"><div align="right"><input type="file" name="image" id="image" size="16" /></div></td>
		<td valign="top"><div align="right"></div></td>
		<td valign="top"><div align="right"><input type="submit" value="Upload"></div></td>
	</tr>
	</table>
	</form>
	<br class="clearfix" />
	<?php
		//connect to db
		mysql_connect('localhost', 'root', '') or die (mysql_error());
		
		//selects db
		mysql_select_db('rugbyholic') or die (mysql_error());
	
		//file properties
		$file=$_FILES['image']['tmp_name'];
		if (!isset($_FILES['image']['tmp_name']))
			echo "Please select an image";
		else
		{
			$image = addslashes(@file_get_contents($_FILES['image']['tmp_name']));
			$imagename= addslashes($_FILES['image']['name']);
			$imagesize=@getimagesize($_FILES['image']['tmp_name']);
			
			if ($imagesize==FALSE)
				echo "Browse for an image first";
			else
			{
				if (!$insert=mysql_query("INSERT INTO uploads VALUES ('', '$imagename', '$image')"))
				echo "Problem uploading image";
				else
				{
					$lastid=mysql_insert_id();
					echo "Image upload successful. <p /><img src=get.php?id=$lastid>";
				}
			}
		}
	?>
	</div>
	<br class="clearfix" />
	</div>
	<div id="sidebar">
	<div class="box">
	<h3>Get tickets</h3>
	<form>
	<input type="radio" name="" value="">Elgon/VIctoria Cup<br />
	<input type="radio" name="" value="">Bamburi Super Series<br />
	<input type="radio" name="" value="">Chairman's Cup<br />
	<input type="radio" name="" value="">Impala Floodiez<br />
	<input type="submit" value="Choose"/>
	</form>
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
	Copyright (c) 2012 rugbyholic.com. All rights reserved. Design by <a href="http://www.techinteractive.co.ke/">Adagala</a>.
</div>
</body>
</html>
