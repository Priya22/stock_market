<!DOCTYPE html>
<html>
  <head>
    <title>Table entries</title>
  </head>
  <body>

    <h3>Setting up...</h3>

<?php // Example 26-3: setup.php
  require_once 'functions.php';
queryMysql("INSERT INTO admin VALUES(011, 'admin','pass')");
 createTable('admin',
            'id INT(4),
           admin VARCHAR(50),
              password VARCHAR(50)');
queryMysql("INSERT INTO company VALUES(1,'ABC',2015,'mark',1000,'brigade bangalore','mark@gmail.com','8723727212','www.abc.com')");
queryMysql("INSERT INTO company VALUES(2,'bata',2015,'tommy',1000,'jp nagar','mark@gmail.com','836276711','www.bata.com')");
queryMysql("INSERT INTO company VALUES(3,'casio',1992,'pirya',1000,'brigade bangalore','casio@gmail.com','9873662561','www.casio.com')");
queryMysql("INSERT INTO company VALUES(4,'dell',2000,'sundar',1000,'salt lake','dell@gmail.com','8378278728','www.dell.com')");
queryMysql("INSERT INTO company VALUES(5,'facebook',2008,'susan',1000,'silicon valley','facebook@gmail.com','8723727526','www.facebook.com')");

  createTable('company', 
              'id INT(4) UNSIGNED PRIMARY KEY,
              name VARCHAR(200),
              year_established YEAR,
              ceo VARCHAR(100),
              face_value  FLOAT(50,2),
              address VARCHAR(1000),
			  email VARCHAR(50),
			  telephone VARCHAR(10),
			  website VARCHAR(50)'
              );
queryMysql("INSERT INTO comp_share VALUES(1,100,23,32,23,45,51,98)");
queryMysql("INSERT INTO comp_share VALUES(1,100,23,32,23,45,51,98)");
queryMysql("INSERT INTO comp_share VALUES(1,100,23,32,23,45,51,98)");
queryMysql("INSERT INTO comp_share VALUES(1,100,23,32,23,45,51,98)");
queryMysql("INSERT INTO comp_share VALUES(1,100,23,32,23,45,51,98)");

  createTable('comp_share',
              'company_id  VARCHAR(16) PRIMARY KEY,
              price FLOAT(50,2),
			  prev_price FLOAT(50,2),
			  change_ FLOAT(50,2),
			  per_change FLOAT(50,2),
			  min FLOAT(50,2),
			  max FLOAT(50,2),
			  today_change FLOAT(50,2)'
			  );
queryMysql("INSERT INTO user VALUES(1,'smriti',29-06-95,'bangalore',8787645535,'smriti@gmail.com','pass',89829)");
queryMysql("INSERT INTO user VALUES(2,'krishna',22-10-95,'africa',872633526,'krishna@gmail.com','pass',7871)");
queryMysql("INSERT INTO user VALUES(3,'priya',23-12-96,'surathkal',8787645535,'smriti@gmail.com','pass',189898)");
queryMysql("INSERT INTO user VALUES(4,'nidhi',16-01-96,'kashmir',8787645535,'smriti@gmail.com','pass',1819)");
			  
  createTable('user',
              'user_id INT(4) PRIMARY KEY,
              name VARCHAR(100),
			  DOB VARCHAR(100),
			  address VARCHAR(1000),
			  phone VARCHAR(10),
			  email VARCHAR(50),
			  password VARCHAR(20),
			  balance INT(100)'
              );
			  
  createTable('transaction',
              'tran_id INT(10) PRIMARY KEY,
			  user_id INT(4),
			  company_id INT(4),
			  quantity INT(100),
			  price FLOAT(50,2),
			  total FLOAT(50,2),
              name VARCHAR(100)'
              );
?>

    <br>...done.
  </body>
</html>
