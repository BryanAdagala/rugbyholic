    <?php
	session_start ();
	error_reporting(E_ALL ^ E_NOTICE);
	$username=$_POST['username'];
	$password=$_POST['password'];
	$submit=$_POST['submit'];
	
	$link=mysql_connect ('localhost', 'root', '')or die(@mysql_error());
	
	$db=mysql_select_db("rugbyholic", $link)or die(@mysql_error ());
	
	$sql="SELECT adminid FROM admin
	WHERE username='$username'AND password='$password'";
	
	$_SESSION['username']=$username;
	
	$result=mysql_query($sql,$link);
	//$id=mysql_result($result,'', 'adminid');
	
	//$_SESSION['id']=$id;
	//echo $_SESSION['id'];

	$row=mysql_fetch_array($result);
	if ($submit){
		
	if(mysql_num_rows($result)>0)
	{
		header('location:admin.php');
	}
	else
	{
		echo 'Wrong user name and password!!';
		//header('location:adminlogin.php');
	}
	}
	?>