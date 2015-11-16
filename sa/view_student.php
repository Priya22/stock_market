<?php
session_start();
include_once'function.php';
if(isset($_SESSION['user']))
{
	$user=$_SESSION['user'];
	
	$user=$_SESSION['user'];
	$query="SELECT * FROM student_login WHERE 1 ";
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
  <h2 >	Student List</h2>
  <p>Details of all students</p>            
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Password</th>
		<th>Sport</th>
        <th>Age</th>
		<th>Batch</th>
         <th>Progress</th>  
      </tr>
    </thead>
	
   <tbody>
   
_END;
      
	
	 for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_row($result);
		for($j=0;$j<1;$j++)
		{
		
		echo<<<_END
		<tr>
        <td>$row[$j]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
		<td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
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