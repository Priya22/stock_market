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
	
	
$query="INSERT INTO sports (sport,coach,event,date,time,batch)VALUES ('$sports','$user','$event','$date','$time','$batch' )";
$result=queryMysql($query);
echo "Event added";
echo "<a href='../sa/coach_profile.php'>Back</a>";
}
else
{
	die("Login as coach");
}
?>