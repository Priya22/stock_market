<?php
include_once 'function.php';
if(isset($_SESSION['company']))
{
	session_destroy();
}
session_start();
$_SESSION['error']=" ";
if(isset($_POST['user']))
{ 
var_dump( $_POST);
$user=sanitizeString($_POST['user']);
$pass=sanitizeString($_POST['pass']);

echo $user.$pass;
	if($user==""||$pass=="")
	{
		echo"<p class='mess'>Enter all fields</p>";
	}
	else
	{
		 $query="SELECT name ,password  FROM company
WHERE name='$user' AND password='$pass' ";
//var_dump($query);
	 //$query="SELECT user ,pass ,rest FROM login
//WHERE user='$user' AND pass='$pass' AND rest='$rest'";
		if(mysql_num_rows(queryMysql($query))>0)
		{
		//var_dump($query);
		$_SESSION['company']=$user;
		$_SESSION['error']=" ";
			//echo("<p class='mess2'>Logged in.<br/>");
			header("Location:../sa/company_profile.php");
		}
else
		{
			$_SESSION['error']="Invalid";
		echo"<p class='mess1'></p>";
		header("Location:../php/loginhome_company.php");
		
			
		}
	}
}

?>
