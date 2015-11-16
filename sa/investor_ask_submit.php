<?PHP
include_once 'function.php';
session_start();
if(!isset($_SESSION['investor']))
  {   
	die("<a href='login.php'>Login as investor</a>");
  } 
$user=$_SESSION['investor'];
$query1= queryMysql("SELECT user_id FROM user WHERE name='$user'");
//$line = mysql_fetch_array($query,MYSQL_ASSOC);
//$sports=sanitizeString("$line[sports]");
//$num=mysql_num_rows($query);
//if($num!=0)
$row=mysql_fetch_row($query1);
$uid=$row[0];
{
$company=$_POST['company'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];	
$q1=queryMysql("select id from company where name='$company'");
$r1=mysql_fetch_row($q1);
$cid=$r1[0];
$validate1=mysql_fetch_row(queryMysql("select sum(volume_) from transaction where buyer_id='$uid' and company_id='$cid'"));
$total1=$validate1[0];
$validate2=mysql_fetch_row(queryMysql("select sum(volume_) from transaction where seller_id='$uid' and company_id='$cid'"));
$total2=$validate2[0];
$total=$total1-$total2;
if($quantity>$total)
{
	echo"You do not own enough shares of the company. Current ownership: '$total' shares.";
	echo"<br>";
	echo "<a href='../sa/investor_profile.php'>Back</a>";
}
	
//$query="SELECT * FROM student_login WHERE user='$event' ";
//$result=queryMysql("UPDATE student_login SET progress='$date' WHERE user='$event' AND user='$event'");
//$num=mysql_fetch_row(queryMysql($query));
//if(!$num)
//{
//echo "Student does not exist";
//echo "<a href='../sa/update_progress.html'>Retry</a>";
$query="INSERT INTO ask VALUES (0,$uid,$cid,'$quantity','$price')";
$result=queryMysql($query);
echo"done";
echo "<a href='../sa/investor_profile.php'>Back</a>";
}
//else
{
	//echo"Update successful";
}
//}
//else
{
	//die("Login as coach");
}
?>