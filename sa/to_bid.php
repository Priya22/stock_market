<?PHP
include_once 'function.php';
session_start();
if(!isset($_SESSION['investor']))
  {   
	die("<a href='login.php'>Login as investor</a>");
  } 
$user=$_SESSION['investor'];
//$query= queryMysql("SELECT * FROM admin WHERE user='$user'");
//$line = mysql_fetch_array($query,MYSQL_ASSOC);
//$sports=sanitizeString("$line[sports]");
//echo $sports;
//$num=mysql_num_rows($query);
//if($num!=0)
{
$buyer=$_SESSION['buyer'];
$company_id=$_SESSION['cid'];
$amount=$_POST['amount'];
$price=$_POST['price'];

$query="INSERT INTO bid VALUES (0,'$buyer','$company_id','$amount','$price')";
$result=queryMysql($query);
echo "Coach Added<br>";
echo "<a href='../sa/investor_profile.php'>Back</a>";
}
//else
{
	//die("Login as admin");
}
?>