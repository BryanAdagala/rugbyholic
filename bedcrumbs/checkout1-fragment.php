<?php session_start(); ?>
<script>
$(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#0066FF"});
  });
  
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#000"});
  });
  
  $(".button").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
	  var jina = $("input#jina").val();
		if (jina == "") {
      $("label#jina_error").show();
      $("input#jina").focus();
      return false;
    }	
	var phone = $("input#phone").val();
		if (phone == "") {
      $("label#phone_error").show();
      $("input#phone").focus();
      return false;
    }
	var kitambulisho = $("input#kitambulisho").val();
		if (kitambulisho == "") {
      $("label#kitambulisho_error").show();
      $("input#kitambulisho").focus();
      return false;
    }
	var id = $("input#id").val();
		if (id == "") {
      $("label#id_error").show();
      $("input#id").focus();
      return false;
    }
	});
    });
</script>
<fieldset>
<legend><em>Step 1/4: Personal Info & Ticket type</em></legend>
<h2>Personal Info</h2>
<form method="POST" action="" class="checkout" id="pform">
	<div>Name:&nbsp;</div>
	<div><input type="text" name="jina" onFocus="this.value=''" style="width:135px" id="jina"/>*</div>
	<label class="error" style="color:#F00;position:absolute; left:500px; top:270px;" for="jina" id="jina_error">Please provide a name</label> 
	
    <div>Phone Number:&nbsp;</div>
    <div><input type="text" size="25" name="phone" onFocus="this.value=''" id="phone"style="width:135px" />*</div>
	<label class="error" style="color:#F00;position:absolute; left:500px; top:270px;" for="phone" id="phone_error">Please provide a phone number</label> 
	
	<div>ID No:&nbsp;</div>
	<div><input type="text" size="25" name="kitambulisho" onFocus="this.value=''" id="kitambulisho" style="width:135px"/>*</div>
	<label class="error" style="color:#F00;position:absolute; left:500px; top:270px;" for="kitambulisho" id="kitambulisho_error">Please provide your national identification number</label> 
	
	<h2>Ticket type</h2>
	<div><label for="vip" >VIP:</label></div>
	<div><select name="masos"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
		<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
		<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
		<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
		</select> x 1000</div>
	<div><label for="regular">REGULAR:</label></div>
	<div><select name="masufferer"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
		<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
		<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
		<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
		</select> x 500</div> 
	<div></div>
	<!--<div><label for="niKulipa">Payment Method:</label></div>
	<div><select name="niKulipa"><option></option><option>Cash</option><option>MPESA</option>
	</select></div>	//-->
	<div class="buttonRow">
		<input class="button" type="submit" name="submit" id="psubmit" value="Continue" />
	</div>
</form>
</fieldset>
<script type="text/javascript">
// bind the form and provide a callback function
$('#pform').submit(function() { 

	//submit the form via ajax
	$(this).ajaxSubmit({
	    target:     '#personalInfo', 
		url:        'bedcrumbs/checkout2-fragment.php', 
		success:    function() { 
			var tabSet = $('ul.navTabs');
			tabSet.tabs("enable", 1);
			tabSet.tabs("select", 1);
		}
	});
	//don't actually submit the form normally
	return false; 
});
</script>