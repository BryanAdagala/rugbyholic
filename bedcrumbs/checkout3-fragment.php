<?php
	$jina= htmlspecialchars(trim($_POST['jina']));
	$phone= htmlspecialchars(trim($_POST['phone']));
	$kitambulisho= htmlspecialchars(trim($_POST['kitambulisho']));
	$masos= htmlspecialchars(trim($_POST['masos']));
    $masufferer= htmlspecialchars(trim($_POST['masufferer']));
	$niKulipa=htmlspecialchars(trim($_POST['niKulipa']));
	$service=htmlspecialchars(trim($_POST['service']));

?>
<fieldset>
<legend>Step 3/4: Review Payment</legend>
<?php
	echo "<strong>Payment mode:</strong>" .$niKulipa. "<br />";
	echo "<strong>Service provider:</strong>" .$service. "<br />";
	
	$hesabu=($masos+$masufferer);
	$yote=($masos*1000 + $masufferer*500);
?>
<form method="POST" action="" class="checkout" id="bform">
		<input type="hidden" name="jina"  value="<?php echo $jina ?>" id="name"/>
        <input type="hidden" name="phone" value="<?php echo $phone ?>" id="phone"/>
        <input type="hidden" name="kitambulisho"  value="<?php echo $kitambulisho ?>" id="kitambulisho"/>
        <input type="hidden" name="masos"  value="<?php echo $masos ?>" id="masos" />       
        <input type="hidden" name="masufferer"  value="<?php echo $masufferer ?>"  id="masufferer" />
		<input type="hidden" name="niKulipa" value="<?php echo $niKulipa?>" id="niKulipa" />
		<input type="hidden" name="service" value="<?php echo $service?>" id="services">
		<input type="hidden" name="hesabu"  value="<?php echo $hesabu ?>" id="hesabu" />       
        <input type="hidden" name="total"  value="<?php echo $yote ?>"  name="total" />
	<div>
		<input class="button" type="submit" name="submit" id="bsubmit" value="Confirm" />
	</div>
</form>
</fieldset>
<script type="text/javascript">
// bind the form and provide a callback function
$('#bform').submit(function() { 

	//submit the form via ajax
	$(this).ajaxSubmit({ 
		target:     '#print', 
		url:        'bedcrumbs/checkout4-fragment.php', 
		success:    function() { 
			var tabSet = $('ul.navTabs');
			tabSet.tabs("enable", 3);
			tabSet.tabs("select", 3);
		}
	});

	//don't actually submit the form normally
	return false; 
});
</script>