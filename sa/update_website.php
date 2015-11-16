<?php
include_once('function.php');
$query="SELECT * FROM homepage WHERE 1 ";
$result=queryMysql($query);
$num=mysql_num_rows($result);
$cri=$bas=$hockey=$tennis=$foot=$swim=$f1=$f2=$f3=" ";
if(isset($_POST['cri']))
{
	$cri=$_POST['cri'];
	$foot=$_POST['foot'];
	$tennis=$_POST['tennis'];
	$swim=$_POST['swim'];
	$bas=$_POST['bas'];
	$hockey=$_POST['hockey'];
	$f1=$_POST['f1'];
	$f2=$_POST['f2'];
	$f3=$_POST['f3'];
	
	$sports=array("Cricket"=>$cri,"Football"=>$foot,"Tennis"=>$tennis,"Swimming"=>$swim,"Basket"=>$bas,"Hockey"=>$hockey,"f1"=>$f1,"f2"=>$f2,"f3"=>$f3);
	foreach ($sports as $a=>$b)
	{
queryMysql("UPDATE homepage SET des='$b' WHERE sport='$a' AND sport='$a'");
	}
}
for($i=0;$i<$num;$i++)
	{
				$row=mysql_fetch_row($result);

		if($row[0]=="cricket")
			{
				$cri=$row[1];
				
			}
			if($row[0]=="basket")
			{
				$bas=$row[1];
			}
			
if($row[0]=="football")
			{
				$foot=$row[1];
			}
			
if($row[0]=="swimming")
			{
				$swim=$row[1];
			}
			
if($row[0]=="hockey")
			{
				$hockey=$row[1];
			}
			
if($row[0]=="tennis")
			{
				$tennis=$row[1];
				
			}
if($row[0]=="f1")
			{
				$f1=$row[1];
				
			}
if($row[0]=="f2")
			{
				$f2=$row[1];
				
			}
			
if($row[0]=="f3")
			{
				$f3=$row[1];
				
			}

			
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

    <title>Update Website</title>

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
<h1 style="text-align:center">Update Website</h1>
<body>

 <form action="update_website.php"  method="POST" novalidate >
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                             <div class="form-group">
                                <h5>Cricket</h5>
                                    <textarea class="form-control"  placeholder="Coach Name" name="cri" required data-validation-required-message="" >$cri</textarea>
                                </div>
                                <div class="form-group">
                                <h5>Football</h5>
                                    <textarea class="form-control"  placeholder="Coach Name" name="foot" required data-validation-required-message="" value="$cri">$foot</textarea>
                                </div>                             
                                     <div class="form-group">
                                <h5>Tennis</h5>
                                    <textarea class="form-control"  placeholder="Coach Name" name="tennis" required data-validation-required-message="" value="$cri">$tennis</textarea>
                                </div>
                                     <div class="form-group">
                                <h5>Hockey</h5>
                                    <textarea class="form-control"  placeholder="Coach Name" name="hockey" required data-validation-required-message="" value="$cri">$hockey</textarea>
                                </div>
								<div class="form-group">
                                <h5>Swimming</h5>
                                    <textarea class="form-control"   name="swim" required data-validation-required-message="" value="$cri">$swim</textarea>
                                </div>
                                 <div class="form-group">
                                <h5>Basketball</h5>
                                    <textarea class="form-control"  placeholder="Coach Name" name="bas" required data-validation-required-message="" value="$cri">$bas</textarea>
                                </div>
								<div class="form-group">
                                <h5>Feature 1</h5>
                                    <textarea class="form-control"  placeholder="Coach Name" name="f1" required data-validation-required-message="" value="$cri">$f1</textarea>
                                </div>  
								<div class="form-group">
                                <h5>Feature 2</h5>
                                    <textarea class="form-control"  placeholder="Coach Name" name="f2" required data-validation-required-message="" value="$cri">$f2</textarea>
                                </div>
								<div class="form-group">
                                <h5>Feature 3</h5>
                                    <textarea class="form-control"  placeholder="Coach Name" name="f3" required data-validation-required-message="" value="$cri">$f3</textarea>
                                </div>                     
                                <button type="submit" class="btn btn-xl" style="color:#fff">Update Website</button>
                            </div>
                        </div>
                    </form>
                            
                        
</body>
</html>
_END;

?>