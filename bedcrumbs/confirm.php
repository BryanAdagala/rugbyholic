<?php
session_start();
$_SESSION['jina']=$fname;
$_SESSION['email']=$lname;
$_SESSION['phone']=$mname;
$_SESSION['kitambulisho']=$email;
$_SESSION['masos']=$phone;
$_SESSION['masufferer']=$masufferer;
$_SESSION['niKulipa']=$niKulipa;

echo $jina;
echo $email;
echo $phone;
echo $kitambulisho;
echo $masos;
echo $masufferer;
echo $niKulipa;
/*echo $visa;*/
?>