<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'gettutor'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

if(isset($_POST['submit']))
{
	$pemail=$_POST['email'];
	$ppass=$_POST['password'];
	$query = "SELECT COUNT(*) FROM PROFDETAILS WHERE EMAIL = '$pemail' AND PASSWORD = '$ppass'";
	if($query==1)
	{
		echo "YOU HAVE LOGGED IN";
	}
	else
	{
		echo "TRY AGAIN";
	}
}
?>