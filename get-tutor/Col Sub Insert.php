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

	$a ;$b; $c; $d; $e; $f; $g; $h; $i; $j;

	
	
	if(isset($_POST['Physics']))
	{
		$a=$_POST['Physics'];
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
	if(isset($_POST['Chemistry']))
	{
		$c=$_POST['Chemistry'];
	}	
	else
	{
		$c='';
	}
	
	if(isset($_POST['Biology']))
	{
		$d=$_POST['Biology'];
	}
		
	else
	{
		$d='';
	}
	
	if(isset($_POST['CS']))
	{
		$e=$_POST['CS'];
	}
	
	else
	{
		$e='';
	}
		
	if(isset($_POST['Mechanics']))
	{
		$f=$_POST['Mechanics'];
	}	
	
	else
	{
		$f='';
	}
	
	if(isset($_POST['EVS']))
	{
		$g=$_POST['EVS'];
	}
	else
	{
		$g='';
	}
	
	if(isset($_POST['Astrophysics']))
	{
		$h=$_POST['Astrophysics'];
	}
	else
	{
		$h='';
	}
	
	if(isset($_POST['Language']))
	{
		$i=$_POST['Language'];
	}
	else
	{
		$i='';
	}
	
	if(isset($_POST['Networking']))
	{
		$j=$_POST['Networking'];
	}
	else
	{
		$j='';
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
	
	
	
	$allsub = $a.$b.$c.$d.$e.$f.$g.$h.$i.$j;
	echo $allsub;
	
	$allTime=$k.$l.$m;
	echo $allTime;
	
	
	echo $_SESSION['uname'];
	$aa=$_SESSION['uname'];
	}


$query = "INSERT INTO profcolsub (email,Subject,Time) VALUES ('$aa','$allsub','$allTime')"; 
$data = mysql_query ($query)or die(mysql_error());

if($data)
{
	?><script>alert("Subjects added Successfully!")</script><?php
	header("location:Professor_Homepage.html");
}
?>