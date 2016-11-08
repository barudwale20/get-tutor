
<?php
 require('db.php');
 session_start();
 // If form submitted, insert values into the database.
 if (isset($_POST['submit']))
 {
 $email = $_POST['email'];
 $password = $_POST['password'];
 $email = stripslashes($email);
 $email = mysql_real_escape_string($email);
 $password = stripslashes($password);
 $password = mysql_real_escape_string($password);
 //Checking is user existing in the database or not
 $query = "SELECT * FROM `profdetails` WHERE email='$email' and password='".md5($password)."'";
 $result = mysql_query($query) or die(mysql_error());
 $rows = mysql_num_rows($result);
 if($rows==1){
 $_SESSION['email'] = $email;
 header("Location: Professor_Homepage.html"); // Redirect user to index.php
 }
 else
 {
?>
 
 <a href="Professor_Log_In.html">Login Again
 <?php } 
 
 ?>

