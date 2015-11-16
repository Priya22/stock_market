<?php 
session_start();
echo  "<!DOCTYPE html>";
$error=$_SESSION['error'];
echo <<<_END
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>     <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body bgcolor="#676865">
<div class="container">
	<section id="content" style="text-align:center">
		<form action="company_login.php" method="post">
              			<h1>Company Login</h1>
            			<div>
				<input type="text" placeholder="Username" required id="username" name="user" />
			</div>
			<div>
				<input type="password" placeholder="Password" required id="password" name="pass" />
			</div>
           <div>$error</div>
			<center>
			<input type="submit" value="Log in" />
			
			</center>
		</form><!-- form -->
		<!-- button -->
	</section><!-- content -->
</div><!-- container -->
 <center><p style="margin-top:10px;font-size:36px; color:white ">$error</p></center>
</body>
</html>
_END;

?>