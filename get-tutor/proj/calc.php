<?php
ini_set('display_errors',0);
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
if($operator=="+")
{
$add1 = $_REQUEST['fnum'];
$add2 = $_REQUEST['lnum'];
$res= $add1+$add2;
}
if($operator=="-")
{
$add1 = $_REQUEST['fnum'];
$add2 = $_REQUEST['lnum'];
$res= $add1-$add2;
}
if($operator=="*")
{
$add1 = $_REQUEST['fnum'];
$add2 = $_REQUEST['lnum'];
$res =$add1*$add2;
}
if($operator=="/")
{
$add1 = $_REQUEST['fnum'];
$add2 = $_REQUEST['lnum'];
$res= $add1/$add2;
}
if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter values.\");</script>";
}
else if($_REQUEST['fvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";
}
else if($_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";
}
}
?>
<html>
<body>
<form>
What operation do you with to perform:<br>
<select name="operator">
<option>+</option>
<option>-</option>
<option>x</option>
<option>/</option>
</select>
Enter the first number: <input type="number" name="fnum"><br>
Enter the second number: <input type="number" name="snum"><br>
<input type="submit" name="calculate" value="calculate"><br>
Output=<?php echo $res ?>
</form>
</body>
</html>
