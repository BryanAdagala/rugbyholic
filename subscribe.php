	<?php

    $elgon= htmlspecialchars(trim($_POST['elgon']));
	$bamburi= htmlspecialchars(trim($_POST['bamburi']));
	$chairmans= htmlspecialchars(trim($_POST['chairmans']));
	$floodiez = htmlspecialchars(trim($_POST['floodiez']));
	
	/*$select=$_POST['selected'];
	$noseats=$_POST['noseats'];
	$schedid=$_POST['schedid'];*/

	/*echo $fname;
	echo $noseats;
	echo $select;
	echo $schedid;*/

	?>
	<h3>Subscribe</h3>
    <form method="post" action="breadcrumbs/ensure.php" id="sform" name="subscribe" onsubmit="validatefan();">
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
	
	<script type="text/javascript">
	// bind the form and provide a callback function
	$('#sform').submit(function() { 
    var fname     = $('#fname').attr('value');
	var lname     = $('#lname').attr('value');
	//submit the form via ajax
	$(this).ajaxSubmit({ 
		target:     '#orderReview', 
		url:        'bedcrumbs/checkout4-fragment.php', 
		success:    function() { 
			var tabSet = $('ul.navTabs');
			tabSet.tabs("enable", 2);
			tabSet.tabs("select", 2);
		}
	});

	//don't actually submit the form normally
	
	return false; 
	});
	</script>