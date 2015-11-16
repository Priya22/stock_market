<?php
session_start();
include_once'function.php';
if(isset($_SESSION['company']))
{
	$user=$_SESSION['company'];
	$q1="select id from company where name='$user'";
	$r1=queryMysql($q1);
	$r11=mysql_fetch_row($r1);
	$company=$r11[0];
	$query="SELECT buyer_id ,SUM(volume_),company_id FROM transaction GROUP BY buyer_id HAVING company_id='$company'";
	$result=queryMysql($query);
	$num=mysql_num_rows($result);
	echo <<<_END
	<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Student</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    
</head>


<body style="background:img/header-bg.png">
<br>
<br>
<div class="container" style="text-align:center">
  <h2 >	Shareholders</h2>
            
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>User name</th>
        <th>User ID</th>
		<th>Quantity</th>
		  
      </tr>
    </thead>
	
   <tbody>
   
_END;
	      
	
	 for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_row($result);
		$q2="select name from user where user_id='$row[0]'";
		$r2=queryMysql($q2);
		$r22=mysql_fetch_row($r2);
		$name=$r22[0];
		for($j=0;$j<1;$j++)
		{
		
		echo<<<_END
		<tr>
		<td>$name</td>
        <td>$row[0]</td>
        <td>$row[1]</td>
        
		
      </tr>
_END;
						
                       
		}
	}

}
else
{
	die("Please login .<a href='../sa/index.php'>Home</a>");
}
?>