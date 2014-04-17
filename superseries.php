<html>
<head>
	<title>Tickets</title>
</head>
<body>
<fieldset>
	<legend><em>Step 1/3: Choose ticket type</em></legend>
	<form action="providedetails.php" method="POST">
	<div><label for="vip">VIP:</label></div>
	<div><select name="masos" class="masos"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
		<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
		<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
		<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
		</select> x 1000</div>
	<div><label for="regular">REGULAR:</label></div>
	<div><select name="masufferer" class="masufferer"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
		<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
		<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
		<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
		</select> x 500</div>
	<div></div>
	<div><input type="submit" name="tuendelee" value="Next"/></div>
	</form>
	<form action='tournaments.php'><input type='submit' value='Back'></form>
</fieldset>
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$masos=$_POST['vip'];
	$masufferer=$_POST['regular'];
	
	if(isset($_POST['vip'], $_POST['regular']) == true){
		$masos=$_POST['vip'];
		$masufferer=$_POST['regular'];
	}
?>
</body>
</html>