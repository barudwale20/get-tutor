<!DOCTYPE html>
<html>
<head>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #1A5276;
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

.brightness {
			filter: brightness(0.8);
			-webkit-filter: brightness(0.8);
			-moz-filter: brightness(0.8);
			-o-filter: brightness(0.8);
			-ms-filter: brightness(0.8);
		}
		img.brightness:hover{
			filter: brightness(1);
			-webkit-filter: brightness(1);
			-moz-filter: brightness(1);
			-o-filter: brightness(1);
			-ms-filter: brightness(1);
		}
	
		
		
</style>
</head>
<body>

<div align="right" class="1">
  <font color="#5D6D7E"> <span style="float:left; font-size:25px"> GETTUTOR.COM </span></font>
  
</div>
<br><br>
<ul>
  <li><a class="active" href="Professor_Homepage.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="Timetable.html">Time Table</a></li>
  <li><a href="What%20you%20can%20teach.html">My Subjects</a></li>
  <li><a href="#notification">Notifications</a></li>
  
  <span style="float:left;"><li class="dropdown">
    <a href="#" class="dropbtn">Materials</a>
    <div class="dropdown-content">
      <a href="http://nptel.ac.in/">NPTEL</a>
      <a href="http://www.ncert.nic.in/index.html">NCERT</a>
    </div>
  </li></span>
  
  <span style="float:left;"><li class="dropdown">
    <a href="#" class="dropbtn">My Account</a>
    <div class="dropdown-content">
      <a href="#">Edit Profile</a>
      <a href="Change%20Password.html">Change Password</a>
      <a href="logout.php">Log Out</a>
    </div>
  </li></span>
</ul>
<br><br><br>
<center>

<div class="head">
<h1><font face="Cooper Black" color="#6C3483">YOUR ARE ENROLLED IN FOLLOWING SUBJECTS<br></h1>
</div>

<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'gettutor'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 
session_start();

	$a=$_SESSION['uname'];
	$query = "SELECT * FROM ENROLLMENT WHERE FACULTY LIKE '%$a%'"; 
	$data = mysql_query ($query)or die(mysql_error());
	
	if($data)
	{	$ck=1;
		?><h3><font face="Cooper Black" color="#6C3483">SCHOOL STUDENTS<br></h3><?php
		while ($row=mysql_fetch_array($data))
		{
			echo '<center><table border=1><tr><td>'.$row['studant'].'</td><td>'.$row['subject'].'</td><td>'.$row['time'].'</td></tr></table></center>'.'<br>';
			$ck++;
		}
	}
	
	$query = "SELECT * FROM ENROLLMENTCOL WHERE FACULTY LIKE '%$a%'"; 
	$data = mysql_query ($query)or die(mysql_error());
	
	if($data)
	{	$ck=1;
		?><h3><font face="Cooper Black" color="#6C3483">COLLEGE COLLEGE<br></h3><?php
		while ($row=mysql_fetch_array($data))
		{
			echo '<center><table border=1><tr><td>'.$row['student'].'</td><td>'.$row['subject'].'</td><td>'.$row['time'].'</td></tr></table></center>'.'<br>';
			$ck++;
		}
	}

?>

</body>
</html>