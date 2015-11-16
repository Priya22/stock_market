<?php
    include_once 'function.php';
	
	session_start();
	$user=$_SESSION['user'];
	if(isset($_SESSION['user']))
	  {
	      if(isset($_POST['coach']))
	         {
		          $coach= $_POST['coach'];
	              $query= "SELECT * FROM student_login WHERE user='$coach'";
	              $result=queryMysql($query);
                  $num=mysql_num_rows($result);
				  	              if($num!=0)
	                   {
	                        $num=mysql_num_rows($result);
							$message=$_POST['message'];
							$query="INSERT INTO coach_student_message (auth,recip,time,message,new)VALUES ('$user','$coach','1','$message','1' )";
		                    $result=queryMysql($query);
			                $query="UPDATE coach_student_message SET time=now() WHERE recip='$coach' AND auth='$user' AND message='$message'";
			                queryMysql($query);
	                        die("Message sent.<a href='../sa/coach_profile.php'>Home</a>");
	                   }
			    else
	                   {
                         	die("Invalid student name");
	                   }
	        }
	      else
	      {
	           die("Invalid student name");
	      }
	  }
	else
		die("Please login.<a href='../sa/login.php'>Home</a>");
	?>