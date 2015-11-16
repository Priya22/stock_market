<?php 
$dbhost = 'localhost'; 
$dbname ='market'; 
$dbuser = 'username';
$dbpass = 'password'; 
$appname = "snapshare"; 
mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
function queryMysql($query)
{
$result = mysql_query($query) or die(mysql_error());
return $result;
}
function destroySession()
{
$_SESSION=array();
if (session_id() != "" || isset($_COOKIE[session_name()]))
setcookie(session_name(), '', time()-2592000, '/');
session_destroy();
}
function sanitizeString($var)
{
$var = strip_tags($var);
$var = htmlentities($var);
$var = stripslashes($var);
return mysql_real_escape_string($var);
}
function showProfile($user)
{
if (file_exists("$user.jpg"))
echo "<img src='$user.jpg' border='1' align='left' />";
$result = queryMysql("SELECT * FROM rnprofiles WHERE user='$user'");
if (mysql_num_rows($result))
{
$row = mysql_fetch_row($result);
echo stripslashes($row[1]) . "<br clear=left /><br />";
}

}
function toLinux($time){
             
		 {$mk= explode('-',$time);
		 	$year=$mk['0'];
	        $month=$mk['1'];
			$time2=explode(' ',$mk['2']);
			$day=$time2['0'];
			$time1=explode(':',$time2['1']);
			$hr=$time1['0'];
			$min=$time1['1'];
			$sec=$time1['2'];
			
				/*echo $year;
				echo $month;
				echo $day;
				echo $hr;
				echo $min;
				echo $sec;
			*/
			
			
		$linuxtime=mktime($hr,$min,$sec,$day,$month,$year);
		 return $linuxtime;
		 }}
?>