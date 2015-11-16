<?php
include_once'function.php';
session_start();
if(isset($_SESSION['user']))
{
	
	destroySession();
	
}

			header("Location:../sa/index.html");
	
?>