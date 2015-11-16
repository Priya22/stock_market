<?PHP

include_once 'function.php';
session_start();
if(!isset($_SESSION['investor']))
  {   
	die("<a href='login.php'>Login as investor</a>");
  } 
$user=$_SESSION['investor'];
//$query= queryMysql("SELECT * FROM coach_login WHERE user='$user'");
//$line = mysql_fetch_array($query,MYSQL_ASSOC);
//$sports=sanitizeString("$line[sports]");
//$num=mysql_num_rows($query);
//if($num!=0)
{
$amount=$_POST['amount'];
$ba="SELECT balance FROM user WHERE name='$user'";
$r=queryMysql($ba);
$r1=mysql_fetch_row($r);
$bal=$r1[0];
$newb=$amount+$bal;
$query="update user set balance='$newb' where name='$user'";
$result=queryMysql($query);
echo "Event added";
echo "Current balance: '$newb'";
echo "<a href='../sa/investor_profile.php'>Back</a>";
}
//else
{
	//die("Login as coach");
}
?>