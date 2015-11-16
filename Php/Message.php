<?php
include_once('function.php');
$name = sanitizeString($_POST['name']);
$email= sanitizeString($_POST['email']);
$message = sanitizeString($_POST['message']);
$phone= sanitizeString($_POST['phone']);
$query = "INSERT INTO message VALUES('$name','$email','$message','$phone')";
//$query = "INSERT INTO dealsVALUES('1','1','1','1','1','1','1','1')";
queryMysql($query);
header("Location:../sa/index.html");
$filename = "index.html";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
?>
