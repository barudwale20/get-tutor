<!DOCTYPE html>
<html>
<head>
<style>



.head{
	text-align: center;
	background-color:powderblue;
	padding: 50px 10px;
	background-color:#EAECEE  ;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #B5E61D;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #FFB300;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #ECEFF1}

.dropdown:hover .dropdown-content {
    display: block;
	
	

		
</style>
</head>
<body>

<div align="right" class="1">
  <font color="#5D6D7E"> <span style="float:left; font-size:25px"> GETTUTOR.COM </span></font>
</div>
<br><br>
<ul>
  <li><a class="active" href="Student_Homepage.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="Timetablestu.html">Time Table</a></li>
  <li><a href="What%20you%20want%20to%20learn.php">My Subjects</a></li>
  <li><a href="#notification">Notifications</a></li>
  

  
  <span style="float:left;"><li class="dropdown">
    <a href="#" class="dropbtn">My Account</a>
    <div class="dropdown-content">
      <a href="#">Edit Profile</a>
      <a href="Change%20Password Stud.html">Change Password</a>
      <a href="logout.php">Log Out</a>
    </div>
  </li></span>
</ul>
<br><br><br>
<center>

<div class="head">
<h1><font face="Cooper Black" color="#6C3483">YOUR SEARCH RESULTS FOR SCHOOL SUBJECT <?php echo $_POST['subject'] ?><br></h1>
</div>

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
	$a;$b;
	
	$a=$_POST['subject'];
	$_SESSION['esub']=$a;
	$b=$_POST['time'];
	$_SESSION['etime']=$b;
	
	$query = "SELECT EMAIL as ema FROM PROFSCHSUB WHERE SUBJECT LIKE '%$a%' AND TIME LIKE '%$b%'"; 
	$data = mysql_query ($query)or die(mysql_error());
	//echo $data;
	if($data)
	{	$ck=1;
		while ($row=mysql_fetch_array($data))
		{
			echo '<form action="enrollsch.php" method="POST"><center><table><tr><td>'.$row['ema'].'</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td><button name="enroll" type="submit" value="'.$row['ema'].'">Enroll</td></tr></table></center></form>'.'<br>';
			$ck++;
		}
	}
	/*elseif(mysqli_num_rows($data)==0)
	{
		$nosr="No such tutor for your request";
		echo $nosr;
	}*/

}
?>

</body>
</html>