<?PHP
include_once 'function.php';
session_start();
if(!isset($_SESSION['user']))
  {   
	die("<a href='login.php'>Login as coach</a>");
  } 
$user=$_SESSION['user'];
$query= queryMysql("SELECT * FROM coach_login WHERE user='$user'");
$line = mysql_fetch_array($query,MYSQL_ASSOC);
$sports=sanitizeString("$line[sports]");
$num=mysql_num_rows($query);
if($num!=0)
{
$event=$_POST['event'];
$time=$_POST['time'];
$date=$_POST['date'];
$batch=$_POST['batch'];	
$query="SELECT * FROM sports WHERE event='$event' ";
$result=queryMysql("UPDATE sports SET time='$time'AND date='$date' AND batch='$batch' WHERE event='$event' AND coach='$user'");
$num=mysql_fetch_row(queryMysql($query));
if(!$num)
{
echo "Event does not exist";
echo "<a href='../sa/update_event.html'>Retry</a>";
//$query="INSERT INTO sports (sport,coach,event,timing)VALUES ('$sports','$user','$event','$timing' )";
//$result=queryMysql($query);
}
else
{
	echo"Update successful";
echo "<a href='../sa/coach_profile.php'>Back</a>";

}
}
else
{
	die("Login as coach");
}
?>