<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'gettutor'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 
session_start();

if(isset($_POST['Submit']))
{
	$uname=$_POST['email'];
	$pass=$_POST['opassword'];
	$npass=$_POST['npassword'];
	
	$query = "SELECT PASSWORD as pwd FROM PROFDETAILS WHERE EMAIL LIKE '$uname' "; 
	$data = mysql_query ($query)or die(mysql_error());
	
	
	if($data){
  $result = mysql_fetch_assoc($data);
  }
  
  echo $pass;
  echo $result['pwd'];

	if($pass==$result['pwd'])
	{
		echo "changing...";
		$query = "UPDATE PROFDETAILS SET PASSWORD = '$npass' WHERE EMAIL LIKE '$uname' "; 
		$data = mysql_query ($query)or die(mysql_error());
		header("location:Professor_Homepage.html");
		$al="Password has been changed successfully!";
		echo "<script type='text/javascript>alert('$al');</script>";
		
	}
	
	else
	{
		header("location:Change Password.html");
		echo "Please Retry !";
	}

}


?>