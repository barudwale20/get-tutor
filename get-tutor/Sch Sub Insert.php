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

	$a ;$b; $c; $d; $e; $f; $g;

	
	
	if(isset($_POST['Science']))
	{
		$a=$_POST['Science'];
	}	
	else
	{
		$a='';
	}
	if(isset($_POST['Maths']))
	{
		$b=$_POST['Maths'];
	}
	else
	{
		$b='';
	}	
	if(isset($_POST['Computer']))
	{
		$c=$_POST['Computer'];
	}	
	else
	{
		$c='';
	}
	
	if(isset($_POST['History']))
	{
		$d=$_POST['History'];
	}
		
	else
	{
		$d='';
	}
	
	if(isset($_POST['Geography']))
	{
		$e=$_POST['Geography'];
	}
	
	else
	{
		$e='';
	}
		
	if(isset($_POST['SS']))
	{
		$f=$_POST['SS'];
	}	
	
	else
	{
		$f='';
	}
	
	if(isset($_POST['English']))
	{
		$g=$_POST['English'];
	}
	else
	{
		$g='';
	}
	
	

	if(isset($_POST['Morning']))
	{
		$k=$_POST['Morning'];
	}
	else
	{
		$k='';
	}
	
	if(isset($_POST['Afternoon']))
	{
		$l=$_POST['Afternoon'];
	}
	else
	{
		$l='';
	}
	
	if(isset($_POST['Evening']))
	{
		$m=$_POST['Evening'];
	}
	else
	{
		$m='';
	}
	
	
	
	$allsub = $a.$b.$c.$d.$e.$f.$g;
	echo $allsub;
	
	$allTime=$k.$l.$m;
	echo $allTime;
	
	
	echo $_SESSION['uname'];
	$aa=$_SESSION['uname'];
	}


$query = "INSERT INTO profschsub (email,Subject,Time) VALUES ('$aa','$allsub','$allTime')"; 
$data = mysql_query ($query)or die(mysql_error());

if($data)
{
	?><script>alert("Subjects added Successfully!")</script><?php
	header("location:Professor_Homepage.html");
}

?>