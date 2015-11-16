<?php
session_start();
include_once'function.php';
if(isset($_SESSION['investor']))
{
	$user=$_SESSION['investor'];
	
	//$user=$_SESSION['user'];
	$query="SELECT * FROM comp_share  ";
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
  <h2 >	View Market</h2>
             
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Symbol</th>
        <th>Exchange</th>
		<th>Ltp</th>
		<th>Open</th>
		<th>Low</th>
		<th>High</th>
		<th>Close</th>
		<th>Change</th>
		<th>Volume</th>
  	
		  
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
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
		<td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
		<td>$row[6]</td>
        <td>$row[7]</td>
        <td>$row[8]</td>
		<td>$row[9]</td>
        <td>$row[10]</td>
       
		
      </tr>
_END;
						
                       
		}
	}
 
 echo '<form action="../sa/investor_buy.php"  method="POST" >
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                             <div class="form-group">
                                <h5>Company Name</h5>
                                    <input type="text"  class="form-control"  placeholder="Company Name" name="company" required data-validation-required-message="" >
                                </div>
								</div>
								</div>
								 <button type="submit" class="btn btn-xl" style="color:#fff">Search</button>
 
								</div>
								</form>';
								
}
else
{
	die("Please login .<a href='../sa/index.php'>Home</a>");
}
?>