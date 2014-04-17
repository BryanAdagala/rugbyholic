<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$conn= mysql_connect('localhost','root','');
$db=mysql_select_db("project",$conn);

    $fname= htmlspecialchars(trim($_POST['name']));
	$email = htmlspecialchars(trim($_POST['email']));
	$idno= htmlspecialchars(trim($_POST['idno']));
	$phone= htmlspecialchars(trim($_POST['phone']));
	$schedid= htmlspecialchars(trim($_POST['schedid']));
	$seat= htmlspecialchars(trim($_POST['selected']));
     $noseats= htmlspecialchars(trim($_POST['noseats']));
	 
 $sqlite="SELECT SUM(noseats) AS tot ,size FROM book,schedule WHERE book.schedid='$schedid' AND schedule.id='$schedid'";
  $query=mysql_query($sqlite)or die(mysql_error());
 
$row= mysql_fetch_array($query);
$tot=$row['tot'];
$siz=$row['size'];
$remain=($siz-$tot);
if($noseats <= $remain  )
{
	 
 $sql='INSERT INTO book SET
  name="'.$fname.'",
  schedid="'.$schedid.'",
 email="'.$email.'",
 phoneno="'.$phone.'",
 time= curtime(),
 bookdate=curdate(),
 noseats="'.$noseats.'",
 seats="'.$seat.'",
 idno="'.$idno.'"';

   if(!mysql_query($sql,$conn))
 {
  echo  "error reserving";
 }
 else
 {
 $sq="SELECT SUM(noseats) AS total ,size FROM book,schedule WHERE book.schedid='$schedid' AND schedule.id='$schedid'";
  $query=mysql_query($sq)or die(mysql_error());
 
 $row= mysql_fetch_array($query);
$total=$row['total'];
$size=$row['size'];
if($total<=$size)
{
$rem=($size-$total);

if($rem==!0){
 $upd="UPDATE schedule SET seat='$rem' WHERE id='$schedid' ";
 $query=mysql_query($upd)or die(mysql_error());
 if(!$query)
 {
	 echo"Update fail";
}
 else
 {
	 
	 //echo "Booked Succesfully";
	 $hee="SELECT *FROM book,schedule
		WHERE book.idno='$idno'
		AND book.phoneno='$phone'
		AND schedule.id='$schedid'
		AND book.state =''";		
$query=mysql_query($hee)or die(mysql_error());
 $cn=mysql_num_rows($query);
 $row= mysql_fetch_array($query);
 if($cn>0)
 {
	$tick= $row['Ticketno'];
		$quer="UPDATE book SET state='booked' WHERE Ticketno='$tick' "; 
		$query=mysql_query($quer)or die(mysql_error());
	?>
    <p>Here is Your Ticket</p>
    <table width="750" height="280" border="2" bordercolor="#0099FF" >
             <tr   height="70"> 
                <td colspan="5">
            
				<p>TICKET NO:<?php echo"$row[Ticketno] "; ?></p>
                <p>NAME:<?php echo"$row[name] "; ?></p>
               
                </td>
            </tr>
            <tr  height="70">
                <td width="150">
                <p>FROM</p>
                <p><?php echo"$row[origin] "; ?></p>
                </td>
                 <td width="150">
                  <p>TO</p>
                <p><?php echo"$row[Destination] "; ?></p>
                 </td>
                  <td width="150">
                     <p>SEAT NO</p>
                <p><?php echo"$row[seats] "; ?></p>
                  </td>
                   <td width="150">
                      <p>ID NO</p>
                <p><?php echo"$row[idno] "; ?></p>
                   </td>
                    <td width="150">
                       <p>MOBILE NO</p>
                <p><?php echo"$row[phoneno] "; ?></p>
                    </td>
            </tr>
            <tr  height="70">
                <td width="150">
                       <p>DATE OF ISSUE</p>
                <p><?php echo"$row[bookdate] "; ?></p>
                </td> 
                <td width="150">
                       <p>DATE OF TRAVEL</p>
                <p><?php echo"$row[date] "; ?></p>
                </td>
                <td width="150">
                       <p>FARE PAID</p>
                <p><?php echo"$row[Fare] "; ?></p>
                </td>
                <td width="150" colspan="5">
                       <p>CHILD AGE</p>
                <p><?php echo"N/A"; ?></p>
                </td>
            </tr>
            <tr  height="70">
                <td width="150">
                       <p>MOBILE NO</p>
                <p><?php echo"$row[phoneno] "; ?></p></td>
                 <td width="150">
                        <p>DEPARTURE TIME</p>
                <p><?php echo"$row[Deptime] "; ?></p>
                 </td>
                  <td width="150" colspan="3">
                         <p>MOBILE NO</p>
                <p><?php echo"$row[phoneno] "; ?></p>
                  </td>
            </tr>
    </table>
    <?php
 }
 else
 {
	 echo "fuck off";
 }
	 }
}
else{
	
	$up="UPDATE schedule SET seats='$rem',state='full' WHERE id='$schedid' ";
	$que=mysql_query($up)or die(mysql_error());
	 if(!$que)
 {
	 echo"Update fail";
}
 else{
	 echo "Update successful";
	 }
}
}
else{
	echo"Bus is already full";
}
 }
}
else if($remain>0)
{
echo "U've choosen many seats than those in database.please choose atmost $remain seats";	
}
else
{
	echo"Bus is already full";
}

?>


</body>
</html>