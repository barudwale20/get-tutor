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
<img src="Images/Logomakr_1eDfRp.png">
<h1><font face="Cooper Black" color="#6C3483">SELECT YOUR SUBJECT<br>(SCHOOL SECTION)</h1>
</div>

<form name="SubmitSubjectSch" method="POST" action="Searchforschool.php" >
<table>
<!--<tr>
	<td><input type="Checkbox" name="Science" value="Science" id="Science"><img src="Images/School%20Subs/Logomakr_6LU8Ry.png"><td>
	<td><input type="Checkbox" name="Maths" value="Maths" id="Maths"><img src="Images/School%20Subs/Logomakr_8BLcrM.png"><td>
	<td><input type="Checkbox" name="Computer" value="Computer" id="Computer"><img src="Images/School%20Subs/Logomakr_9s4ct0.png"><td>
</tr>
	<td><input type="Checkbox" name="History" value="History" id="History"><img src="Images/School%20Subs/Logomakr_1h5KQA.png"><td>
	<td><input type="Checkbox" name="Geography" value="Geography" id="Geography"><img src="Images/School%20Subs/Logomakr_4AX9pd.png"><td>
	<td><input type="Checkbox" name="SS" value="SS" id="SS"><img src="Images/School%20Subs/Logomakr_17Pnv1.png"><td>
</tr>

<tr>
	<td colspan="3"><input type="Checkbox" name="English" value="English" id="English"><img src="Images/School%20Subs/Logomakr_0IDorW.png"><td>
</tr>
</table>

<div class="head">
<img src="Images/Logomakr_3sRwlG.png">
<h1><font face="Cooper Black" color="#6C3483">SELECT YOUR TIME</h1>
</div>

<table>
	<tr>
		<td><input type="Checkbox" name="Morning" value="Morning" id="Morning"><img src="Images/School%20Subs/Logomakr_7rTLIO.png"><td>
		<td><input type="Checkbox" name="Afternoon" value="Afternoon" id="Afternoon"><img src="Images/School%20Subs/Logomakr_2QzFJB.png"><td>
		<td><input type="Checkbox" name="Evening" value="Evening" id="Evening"><img src="Images/School%20Subs/Logomakr_6rMuwk.png"><td>
	</tr>
-->
<ul>
<select name="subject">
  <li><option value="Science">Science</option></li>
  <option value="Maths">Maths</option>
  <option value="Computer">Computer</option>
  <option value="History">Hiatory</option>
  <option value="Geography">Geography</option>
  <option value="SS">Social Studies</option>
  <option value="English">English</option>
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
