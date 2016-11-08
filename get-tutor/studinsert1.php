  <?php 

define('DB_HOST', 'localhost');
define('DB_NAME', 'gettutor'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


 
                       
if(isset($_POST['submit'])) 
{
echo "HI";
$pfname = $_POST['fname'];
$plname = $_POST['lname']; 
$pemail = $_POST['email']; 
$ppassword = $_POST['password']; 
$query = "INSERT INTO studdetails (FIRSTNAME,LASTNAME,EMAIL,PASSWORD) VALUES ('$pfname','$plname','$pemail','$ppassword')"; 
$data = mysql_query ($query)or die(mysql_error());

if($data) 
{
 echo "YOUR REGISTRATION IS COMPLETED...";
 header("location:Student_Homepage.html");
 } 
 } 
 
 ?>
