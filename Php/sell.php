<?PHP
include_once 'function.php';
session_start();
if(!isset($_SESSION['company']))
  {   
	die("<a href='login.php'>Login as company</a>");
  } 
$user=$_SESSION['company'];
$query1= queryMysql("SELECT id FROM company WHERE name='$user'");
//$line = mysql_fetch_array($query,MYSQL_ASSOC);
//$sports=sanitizeString("$line[sports]");
//$num=mysql_num_rows($query);
//if($num!=0)
$row=mysql_fetch_row($query1);
//print $row[0];
{
$price=$_POST['price'];
$quantity=$_POST['quantity'];	
//$query="SELECT * FROM student_login WHERE user='$event' ";
//$result=queryMysql("UPDATE student_login SET progress='$date' WHERE user='$event' AND user='$event'");
//$num=mysql_fetch_row(queryMysql($query));
//if(!$num)
//{
//echo "Student does not exist";
//echo "<a href='../sa/update_progress.html'>Retry</a>";
$query="INSERT INTO ask VALUES (0,$row[0],$row[0],'$quantity','$price')";
$result=queryMysql($query);
echo "<a href='../sa/company_profile.php'>Back</a>";
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