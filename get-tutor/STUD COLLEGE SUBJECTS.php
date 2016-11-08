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

<style>	
	
	
	.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '>';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;


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

<h1><font face="Cooper Black" color="#6C3483">SELECT YOUR SUBJECT<br>(COLLEGE SECTION)</h1>
</div>

<form name="SubmitSubject" method="POST" action="Searchforcollege.php" >
<!--<table>
<tr>
	<td><input type="Checkbox" name="Physics" value="Physics" id="Physics"><img src="Images/College%20Subs/Logomakr_3WKK1f.png"></td>
	<td><input type="Checkbox" name="Maths" value="Maths" id="Maths"><img src="Images/School Subs/Logomakr_8BLcrM.png"></td>
	<td><input type="Checkbox" name="Chemistry" value="Chemistry" id="Chemistry"><img src="Images/College Subs/Logomakr_8oQxE7.png"></td>
</tr>
<tr>
	<td><input type="Checkbox" name="Biology" value="Biology" id="Biology"><img src="Images/College Subs/Logomakr_0cjLIh.png"></td>
	<td><input type="Checkbox" name="CS" value="CS" id="CS"><img src="Images/College Subs/Logomakr_7T07Vy.png"></td>
	<td><input type="Checkbox" name="Mechanics" value="Mechanics" id="Mechanics"><img src="Images/College Subs/Logomakr_0wZ9FE.png"></td>
</tr>

<tr>
	<td><input type="Checkbox" name="Networking" value="Networking" id="Networking"><img src="Images/College Subs/Logomakr_2S9Ejq.png"></td>
	<td><input type="Checkbox" name="EVS" value="EVS" id="EVS"><img src="Images/College Subs/Logomakr_3kgVRv.png"></td>
	<td><input type="Checkbox" name="Astrophysics" value="Astrophysics" id="Astrophysics"><img src="Images/College Subs/Logomakr_2YYnS9.png"></td>
</tr>
	
<tr>
	<td colspan="3"><input type="Checkbox" name="Language" value="Language" id="Language"><img src="Images/College Subs/Logomakr_8oZh1L.png"></td>
</tr>

</table>

<div class="head">
<img src="Images/Logomakr_3sRwlG.png">
<h1><font face="Cooper Black" color="#6C3483">SELECT YOUR TIME</h1>
</div>

<table>
	<tr>
		<td><input type="Checkbox" name="Morning" value="Morning" id="Morning"><img src="Images/School Subs/Logomakr_7rTLIO.png"><td>
		<td><input type="Checkbox" name="Afternoon" value="Afternoon" id="Afternoon"><img src="Images/School Subs/Logomakr_2QzFJB.png"><td>
		<td><input type="Checkbox" name="Evening" value="Evening" id="Evening"><img src="Images/School Subs/Logomakr_6rMuwk.png"><td>
	</tr>
-->

<table>
<ul>
<select name="subject">
  <li><option value="Physics">Physics</option></li>
  <option value="Maths">Maths</option>
  <option value="Chemistry">Chemistry</option>
  <option value="Biology">Biology</option>
  <option value="CS">CS</option>
  <option value="Mechanics">Mechanics</option>
  <option value="Networking">Networking</option>
  <option value="EVS">EVS</option>
  <option value="Astrophysics">Astrophysics</option>
  <option value="Language">Language</option>
</select>
</ul>
</table>

<div class="head">
<img src="Images/Logomakr_3sRwlG.png">
<h1><font face="Cooper Black" color="#6C3483">SELECT YOUR TIME</h1>
</div>

<table>
	<select name="time">
  <option value="Morning">Morning</option>
  <option value="Afternoon">Afternoon</option>
  <option value="Evening">Evening</option>
  </select>
</table>

	<button class="button" type="submit" name="Submit" value="Submit" id="Submit"><span>Submit</span></button>

</form>
</center>

</body>
</html>
