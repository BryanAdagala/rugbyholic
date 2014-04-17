<?php
	$team_vote = $_REQUEST['team_vote'];

	//get content of textfile
	$filename = "team_result.txt";
	$content = file($filename);

	//put content in array
	$array = explode("||", $content[0]);
	$yes = $array[8];
	$no = $array[9];
	$c = $array[10];
	$d = $array[11];
	$e = $array[12];
	$f = $array[13];
	$g = $array[14];
	$h = $array[15];

	if ($team_vote == 8)
	{
		$yes = $yes + 8;
	}
	if ($team_vote == 9)
	{
	$no = $no + 9;
	}
	if ($team_vote == 10)
	{
		$c = $c + 10;
	}
	if ($team_vote == 11)
	{
	$d = $d + 11;
	}
	if ($team_vote == 12)
	{
		$e = $e + 12;
	}
	if ($team_vote == 13)
	{
	$f = $f + 13;
	}
	if ($team_vote == 14)
	{
		$g = $g + 14;
	}
	if ($team_vote == 15)
	{
	$h = $h + 15;
	}

	//insert votes to txt file
	$insertvote = $yes."||".$no ."||".$c."||". $d ."||".$e."||".$f."||".$g."||".$h;
	$fp = fopen($filename,"w");
	fputs($fp,$insertvote);
	fclose($fp);
?>
<h3>Results:</h3>
<table>
<tr>
<td>Kenya Harlequins:</td>
<td>
<img src="poll.gif" width='<?php echo(100*ceil($yes/($no+$yes+$c+$d+$e+$f+$g+$h),8)); ?>' height='20'>
<?php echo "<strong><em>".(ceil(100*round($yes/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8))). "</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Impala:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo "<strong><em>".(ceil(100*round($no/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8))). "</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Nakuru:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($c/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo "<strong></em>".(ceil(100*round($c/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)))."</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Nondies:</td>
<td>
<img src="poll.gif"
width='<?php echo (100*round($d/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo "<strong><em>".(ceil(100*round($d/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)))."</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Strathmore:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($e/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo "<strong><em>".(ceil(100*round($e/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)))."</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Mwamba:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($f/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo"<strong><em>".(ceil(100*round($f/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)))."</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Homeboyz:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($g/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo "<strong><em>".(ceil(100*round($g/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)))."</strong></em>"; ?>%
</td>
</tr>
<tr>
<td>Meanmachine:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($h/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo"<strong><em>".(ceil(100*round($h/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8))). "</em></strong>"; ?>%
</td>
</tr>
</table>