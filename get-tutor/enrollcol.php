<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'gettutor'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

if(isset($_POST['enroll']))
{
	session_start();
	$stud=$_SESSION['uname'];
	$teach=$_POST['enroll'];
	$sub=$_SESSION['esub'];
	$time=$_SESSION['etime'];
	
	$query = "INSERT INTO ENROLLMENTCOL VALUES('$stud','$teach','$sub','$time')"; 
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
		echo ("You have been enrolled succsessfully!").'<br>';
		echo '<a href="Student_Homepage.html"><input type="submit" name="OK" value="OK"></a>';
	}
	
	
}

?>