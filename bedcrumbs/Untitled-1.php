<div id="modal"> 
<?php

$conn= mysql_connect('localhost','root','');
$db=mysql_select_db("project",$conn);
$id=$_POST['id'];
$sql="SELECT*FROM schedule
		WHERE id='$id'";	
$query=mysql_query($sql)or die(mysql_error());
$row= mysql_fetch_array($query);
?> 
<?php
$size=36;
$siz=75;
echo"$row[id]";
echo $_POST['id'];
$s=60;
if($size=$row["size"])
{
 include('Untitled-10.html');
}
else if($siz==$row["size"])
{
 include('Untitled-11.html');
}
else if($s==$row["size"])
{
 include('Untitled-12.html');
}

	 ?>
 <div style="float:left;">
    <ul id="seatDescription">
        <li style="background: url(img/empty.PNG) no-repeat scroll 0 0 transparent;">Available Seat</li>
        <li style="background: url(img/bookd.PNG) no-repeat scroll 0 0 transparent;">Booked Seat</li>
        <li style="background: url(img/choose.PNG) no-repeat scroll 0 0 transparent;">Selected Seat</li>
    </ul>
    </div>
    <div style="clear:both;width:100%; position:absolute; top:500px; left:250px;">
        <a  style="position:absolute;top:40px; left:245px;" id="btnShowNew" class="button">Finish</a>
        </div>


</div>