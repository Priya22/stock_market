<?php
session_start();
if(isset($_SESSION['investor']))
{
include_once'function.php';
$user=$_SESSION['investor'];
$query= queryMysql("SELECT * FROM user WHERE name='$user'");
//if($line = mysql_fetch_array($query,MYSQL_ASSOC))
{ 
//echo "in if";
//$sports="$line[sports]";
//$_SESSION['sport']=$sports;
//$hobby="$line[hobby]";	 
}

echo <<<_END
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stock market | Investor</title>

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

<body id="page-top" class="index">
 <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container" style="text-align:center">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>$user</h2>
                                                       
							<ul type="none">
						<li>	<a href="../sa/buy_shares.php">Buy</a></li> 
					             <!--<li><a href="investor_tran.php">View transactions</a></li>-->
								  <!--<li><a href="investor_shares.php">Share summary</a></li>-->
								 <li><a href="investor_sell.php">Sell shares</a></li>
								 <li><a href="add_money.html">Add money</a></li>
								 <li><a href="view_market.php">View Market</a></li>
								 
					    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"><a href="../php/logout.php" style="color:white">Logout</i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </body>
            </html>
			
_END;
}
			else
{
	die("Please login .<a href='index.html'>Home</a>");
}

?>