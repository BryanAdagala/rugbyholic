<fieldset>
<legend><em>Step 2/3: Personal Information</em></legend>
<form method="post" action="kumalizia.php" name="" onsubmit="validatefan();">
		<div>Name:&nbsp;</div>
		<div><input type="text" name="jina" onFocus="this.value=''" style="width:135px" />*</div>
    	<div>Email address:&nbsp;</div>
    	<div><input type="text" size="25" name="email" onFocus="this.value=''" style="width:135px" />*</div>
    	<div>Phone Number:&nbsp;</div>
    	<div><input type="text" size="25" name="phone" onFocus="this.value=''" style="width:135px" />*</div>
		<div>Payment Method:&nbsp;</div>
		<div><select name="kulipa"><option></option><option>MPESA</option><option>Cash</option></select>*</div>
		
		<input type="hidden" name="masos" class="masos" />
		<input type="hidden" name="masufferer" class="masufferer" />
		<div><input type="submit" value="Book" /></div>
</form>
<form action='superseries.php'><input type="submit" value="Cancel"></form>
</fieldset>
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$masos=$_POST['vip'];
	$masufferer=$_POST['regular'];
	
	if (isset($_POST['vip'], $_POST['regular']) == true){
		$masos=$_POST['vip'];
		$masufferer=$_POST['regular'];
	}
?>