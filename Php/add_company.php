<?PHP
include_once 'function.php';
session_start();
if(!isset($_SESSION['admin']))
  {   
	die("<a href='login.php'>Login as admin</a>");
  } 
$user=$_SESSION['admin'];
//$query= queryMysql("SELECT * FROM admin WHERE user='$user'");
//$line = mysql_fetch_array($query,MYSQL_ASSOC);
//$sports=sanitizeString("$line[sports]");
//echo $sports;
//$num=mysql_num_rows($query);
//if($num!=0)
{
$company=$_POST['company'];
$year=$_POST['year'];
$exchange=$_POST['exchange'];
$email=$_POST['email'];	
$password=$_POST['password'];
$website=$_POST['website'];
$ceo=$_POST['ceo'];
$symbol=$_POST['symbol'];	

$query="INSERT INTO company VALUES (0,'$symbol','$company','$password','$year','$ceo',0,'$exchange','$email','$website',0 )";
$result=queryMysql($query);
echo "Coach Added<br>";
echo "<a href='../sa/admin_profile.php'>Back</a>";
}
//else
{
	//die("Login as admin");
}
?>