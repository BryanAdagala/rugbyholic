<?php
	$vote = $_REQUEST['vote'];

	//get content of textfile
	$filename = "poll_result.txt";
	$content = file($filename);

	//put content in array
	$array = explode("||", $content[0]);
	$yes = $array[0];
	$no = $array[1];
	$c = $array[2];
	$d = $array[3];
	$e = $array[4];
	$f = $array[5];
	$g = $array[6];
	$h = $array[7];

	if ($vote == 0)
	{
		$yes = $yes + 1;
	}
	if ($vote == 1)
	{
	$no = $no + 1;
	}
	if ($vote == 2)
	{
		$c = $c + 2;
	}
	if ($vote == 3)
	{
	$d = $d + 3;
	}
	if ($vote == 4)
	{
		$e = $e + 4;
	}
	if ($vote == 5)
	{
	$f = $f + 5;
	}
	if ($vote == 6)
	{
		$g = $g + 6;
	}
	if ($vote == 7)
	{
	$h = $h + 7;
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
<td>Brian Nyikuli:</td>
<td>
<img src="poll.gif" width='<?php echo(100*ceil($yes/($no+$yes+$c+$d+$e+$f+$g+$h),8)); ?>' height='20'>
<?php echo "<strong><em>".(ceil(100*round($yes/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8))). "</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Biko Adema:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo "<strong><em>".(ceil(100*round($no/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8))). "</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Leon Adongo:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($c/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo "<strong></em>".(ceil(100*round($c/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)))."</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Humphrey Khayange:</td>
<td>
<img src="poll.gif"
width='<?php echo (100*round($d/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo "<strong><em>".(ceil(100*round($d/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)))."</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Collins Injera:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($e/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo "<strong><em>".(ceil(100*round($e/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)))."</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Ken Isindu:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($f/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo"<strong><em>".(ceil(100*round($f/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)))."</em></strong>"; ?>%
</td>
</tr>
<tr>
<td>Edwin Salamba:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($g/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo "<strong><em>".(ceil(100*round($g/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)))."</strong></em>"; ?>%
</td>
</tr>
<tr>
<td>Polycap Odhiambo:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($h/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8)); ?>'
height='20'>
<?php echo"<strong><em>".(ceil(100*round($h/($no+$yes+$c+$d+$d+$e+$f+$g+$h),8))). "</em></strong>"; ?>%
</td>
</tr>
</table>