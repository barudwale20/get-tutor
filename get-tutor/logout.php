<?php

	$_SESSION['uname'] = "";
	
	if ($_SESSION['uname']=="")
	{
		header("location:Homepage.html");
	}
?>