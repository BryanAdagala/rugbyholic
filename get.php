<?php
		mysql_connect('localhost', 'root', '') or die (mysql_error());
		mysql_select_db('rugbyholic') or die (mysql_error());
		
		$imageid=addslashes($_REQUEST['imageid']);
		
		$picha="";
		
		$image=mysql_query ("SELECT * FROM uploads WHERE imageid=$imageid");
		$image=mysql_fetch_assoc($image);
		while ($row=mysql_fetch_array($image)){
		$image=$row['image'];
		$image=$image['image'];
		$picha="$image";
		echo $picha;
		}
		
		header("Content-type: image/jpeg");
?>