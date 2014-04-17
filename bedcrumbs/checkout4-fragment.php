<?php

    $jina= htmlspecialchars(trim($_POST['jina']));
	$phone= htmlspecialchars(trim($_POST['phone']));
	$kitambulisho= htmlspecialchars(trim($_POST['kitambulisho']));
	$masos= htmlspecialchars(trim($_POST['masos']));
    $masufferer= htmlspecialchars(trim($_POST['masufferer']));
	$niKulipa=htmlspecialchars(trim($_POST['niKulipa']));
	$hesabu=htmlspecialchars(trim($_POST['hesabu']));
	$totals=htmlspecialchars(trim($_POST['total']));
	
	 
?>
<fieldset>
<legend>Step 4/4: Review of general information</legend>
<form method="POST" action="nunuaTicket.php" class="checkout" id="rform">
      <h3>Name: <?php echo $jina;?></h3>
      <h5>Phone: <?php echo $phone;?></h5>
      <h5>ID NO: <?php echo $kitambulisho;?></h5>
      <h5>Tickets Bought: <?php echo $hesabu;?></h5>
      <h5>Amount Spent: <?php echo $totals;?></h5>
	  
	 	<input type="hidden" name="jina"  value="<?php echo $jina ?>" id="name"/>
        <input type="hidden" name="phone" value="<?php echo $phone ?>" id="phone"/>
        <input type="hidden" name="kitambulisho"  value="<?php echo $kitambulisho ?>" id="kitambulisho"/>
        <input type="hidden" name="masos"  value="<?php echo $masos ?>" id="masos" />       
        <input type="hidden" name="masufferer"  value="<?php echo $masufferer ?>"  id="masufferer" />
		<input type="hidden" name="hesabu"  value="<?php echo $hesabu ?>" id="hesabu" />       
        <input type="hidden" name="total"  value="<?php echo $total ?>"  id="total" />
	<div>
		<input class="button" type="submit" name="submit" id="rsubmit" value="Buy" />
	</div>			
</form>
</fieldset>
<script type="text/javascript">
// bind the form and provide a callback function
$('#rform').submit(function() { 

	//submit the form via ajax
	$(this).ajaxSubmit({ 
		target:     '#print',  
		url:        'bedcrumbs/nunuaTicket.php', 
		success:    function(data) { 
		  $("#rform").html("<div id='message'>Thank you</div>")
		  $("#message").show()
		  
		}
		
	});

	//don't actually submit the form normally
	
	return false; 
});
</script>
