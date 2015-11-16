<?php
include_once('function.php');
$query="SELECT coach FROM homepage WHERE sport='Cricket' ";
	$result=queryMysql($query);
		$row=mysql_fetch_row($result);
echo $row[0];
?>