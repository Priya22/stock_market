
<?php
echo <<<_END
<!DOCTYPE html>
<html lang="en">

<head>
<!--Admin message to coach, Google Map Specifics Eevnts View Profile Manage and Update Profile Select Practice Session-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sports Academy </title>

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
<body >
<h1 style="text-align: center">
Cricket coaches</h1>
_END;
include_once('function.php');
$query="SELECT coach FROM homepage WHERE sport='Cricket' ";
	$result=queryMysql($query);
		$row=mysql_fetch_row($result);
echo "<table class='table table-bordered table-striped'>".$row[0];
?>