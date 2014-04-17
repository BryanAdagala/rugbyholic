<script>
//manipulate the mobile payment options
$(function(){
$("#payment").hide();
$("#mobile_cash").change(function(e){
$("#payment").hide();
var selected=$("#mobile_cash").val();
 if(selected=="Mobile Payment")
 {
  $("#payment").show();
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
<?php
    $jina= htmlspecialchars(trim($_POST['jina']));
	$phone= htmlspecialchars(trim($_POST['phone']));
	$kitambulisho= htmlspecialchars(trim($_POST['kitambulisho']));
	$masos = htmlspecialchars(trim($_POST['masos']));
	$masufferer= htmlspecialchars(trim($_POST['masufferer']));
?>
<fieldset>
<legend><em>Step 2/4: Payment Mode</em></legend>
<form method="POST" action="" class="checkout" id="sform">
	<div><label for="payment_mode">Payment Mode
	<!--payments modes//-->
	<div><select id="mobile_cash" name="niKulipa">
		<option></option><option value="Mobile Payment">Mobile Payment</option><option value="Credit Card">credit Card</option></select></div>
	<!--mobile payment//-->	
	<div id="payment"><label for="mobile">Service Provider<select name="service">
		<option></option><option>MPESA</option>
	<option>ZAP</option><option>YU Cash</option></select></div>
	
	<!--credit card payments//-->
	<div id="credit_card">
	<div><label for="credit_card">Card Number:
	<div><input type="text" name="credit_no" /></label></div>
	<div><label for="ccv">CCV Number(3 digit figure at the back of the card)
	<input type="text" name="ccv_no" /></label></div></div></div>
	
	<input type="hidden" name="jina"  value="<?php echo $jina;?>" id="jina"/>
    <input type="hidden" name="phone" value="<?php echo $phone; ?>" id="phone"/>
    <input type="hidden" name="kitambulisho"  value="<?php echo $kitambulisho; ?>" id="kitambulisho"/>
	<input type="hidden"  id="masos"value="<?php echo $masos; ?>" name="masos" />       
    <input  type="hidden" id="masufferer" value="<?php echo $masufferer; ?>"  name="masufferer"/>
	<input  type="hidden" id="masufferer" value="<?php echo $masufferer; ?>"  name="masufferer"/>
	
	<div>
		<input class="button" type="submit" name="submit" id="ssubmit" value="Continue" />
	</div>			
</form>
</fieldset>
<script type="text/javascript">
// bind the form and provide a callback function
$('#sform').submit(function() { 
    //var jina    = $('#jina').attr('value');
	//submit the form via ajax
	$(this).ajaxSubmit({ 
		target:     '#summary', 
		url:        'bedcrumbs/checkout3-fragment.php', 
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