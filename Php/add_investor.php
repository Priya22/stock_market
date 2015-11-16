<?PHP
include_once 'function.php';
session_start();
if(!isset($_SESSION['user']))
  {   
	die("<a href='login.php'>Login as admin</a>");
  } 
$user=$_SESSION['user'];
//$query= queryMysql("SELECT * FROM admin WHERE user='$user'");
//$line = mysql_fetch_array($query,MYSQL_ASSOC);
//$sports=sanitizeString("$line[sports]");
//echo $sports;
//$num=mysql_num_rows($query);
//if($num!=0)

{
$user=$_POST['user'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];		
$query="INSERT INTO user VALUES (0,'$user','$address','$email','$password',0 )";
$result=queryMysql($query);
echo "User Added<br>";
echo "<a href='../sa/admin_profile.php'>Back</a>";
}
//else
{
	//die
}
?>