<?php
session_start();
include_once'function.php';
if(isset($_SESSION['investor']))
{
	$user=$_SESSION['investor'];
	//$company='2';
	//$user=$_SESSION['user'];
	$q2="SELECT user_id FROM user WHERE name='$user'";
	 $res=queryMysql($q2);
	 $row1=mysql_fetch_row($res);
	 $_SESSION['buyer']=$row1[0];
$com=$_POST['company'];
$q1="SELECT id from company where name='$com'"; 
	$cid=queryMysql($q1);
	$row=mysql_fetch_row($cid);
	$c_id=$row[0];
	$_SESSION['cid']=$c_id;
	
	$query="SELECT * FROM ask WHERE company_id='$c_id'"; 
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

    <title>View Ask</title>

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
  <h2 >	Buy </h2>
            
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Seller_id</th>
        <th>Company_id</th>
		<th>Company name</th>
		<th>Price</th>
		<th>Quantity</th>
		  
      </tr>
    </thead>
	
   <tbody>
   
_END;
	      
	
 for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_row($result);
		$q1=queryMysql("select name from company where id='$c_id'");
		$r2=mysql_fetch_row($q1);
		$name=$r2[0];
		for($j=0;$j<1;$j++)
		{
		
		echo<<<_END
		<tr>
        <td>$row[1]</td>
        <td>$row[2]</td>
		<td>$name</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        
		
      </tr>
_END;
						
                       
		}
	}

 echo '<form action="../sa/to_bid.php"  method="POST" >
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                             <div class="form-group">
                                <h5>Amount</h5>
                                    <input type="text"  class="form-control"  placeholder="Amount" name="amount" required data-validation-required-message="" >
                                </div>
								<div class="form-group">
                                <h5>Price</h5>
                                    <input type="text"  class="form-control"  placeholder="Price" name="price" required data-validation-required-message="" >
                                </div>
								</div>
							</div>
								 <button type="submit" class="btn btn-xl" style="color:#fff">Bid</button>
 
								</div>
								</form>
								<br>
								<br>';
}
else
{
	die("Please login .<a href='../sa/index.html'>Home</a>");
}
?>