<?php
include_once 'function.php';
session_start();
if(!isset($_SESSION['company']))
  {   
	die("<a href='login.php'>Login as company</a>");
  } 
$user=$_SESSION['company'];
$query1= queryMysql("SELECT id FROM company WHERE name='$user'");
$row=mysql_fetch_row($query1);
$query= queryMysql("SELECT * FROM ask WHERE seller_id='$row[0]'");
$num=mysql_num_rows($query);
echo <<<_END
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sell</title>

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
<div class="db" style="margin:150px; margin-top:50px; text-align:center ; background-color:#CCC; padding:20px">
<h1 style="text-align:center">Sell</h1>
<body>
 <form action="../php/sell.php"  method="POST" >
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                             <div class="form-group">
                                <h5>Price</h5>
                                    <input type="number"  class="form-control"  placeholder="Price" name="price" required data-validation-required-message="">
                                </div>
                                <div class="form-group">
                                <h5>Quantity</h5>
                                    <input type="number"  class="form-control"  placeholder="Quantity" name="quantity" required data-validation-required-message="">
                                    
                                </div>
                                                         
                                <button type="submit" class="btn btn-xl" style="color:#fff">Sell</button>
                            </div>
                        </div>
                    </form>
                        
</body>
</html>

<body style="background:img/header-bg.png">
<br>
<br>
<div class="container" >
  <h2 >Shares on Sale</h2>
             
  <table class="table table-bordered table-striped" style="max-width:980px">
    <thead>
      <tr>
        <th>Id</th>
        
		<th>Size</th>
		<th>Price</th>
        <!--<th>Update</th>-->
		  
      </tr>
    </thead>
	
   <tbody>
   
_END;
     for($i=0;$i<$num;$i++)
	{
		$row1=mysql_fetch_row($query);
		for($j=0;$j<1;$j++)
		{
		
		echo<<<_END
		<tr>
		<td>$row1[0]</td>
        <td>$row1[3]</td>
        <td>$row1[4]</td>
        
		
      </tr>
_END;
						
                       
		}
	}

?>