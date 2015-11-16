<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>

<?php // Example 26-3: setup.php
  require_once 'functions.php';

  createTable('admin',
              'id INT(4),
              admin_name VARCHAR(50),
              password VARCHAR(50)');

  createTable('company', 
              'id INT(4) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
			  symbol VARCHAR(10),
              name VARCHAR(200),
			  password VARCHAR(200),
              year YEAR,
              ceo VARCHAR(100),
              face_value  FLOAT(50,2),
			  exchange VARCHAR(10),
			  email VARCHAR(50),
			  website VARCHAR(50),
			  no_shares INT(100)'
              );

  createTable('comp_share',
              'symbol VARCHAR(16) PRIMARY KEY,
			  exchange VARCHAR(16),
              ltp FLOAT(50,2),
			  open FLOAT(50,2),
			  low FLOAT(50,2),
			  high FLOAT(50,2),
			  close FLOAT(50,2),
			  change_per FLOAT(50,2),
			  total_vol FLOAT(50,2)
			  '
			  );
			  
  createTable('user',
              'user_id INT(4) PRIMARY KEY AUTO_INCREMENT,
              name VARCHAR(100),
			  address VARCHAR(1000),
			  email VARCHAR(50),
			  password VARCHAR(20),
			  balance INT(100)'
              );
			  
  createTable('transaction',
              'tran_id INT(10) PRIMARY KEY AUTO_INCREMENT,
			  buyer_id INT(4),
			  seller_id INT(4),
			  time_ TIMESTAMP,
			  company_id INT(4),
			  volume_ INT(100),
			  price FLOAT(50,2)'
			  );
			  
  createTable('bid',
              'bid_id INT(10) PRIMARY KEY AUTO_INCREMENT,
			   buyer_id INT(4),
			   company_id INT(4),
			   size INT(100),
			   price FLOAT(50,2)'
			  );
			  
createTable('ask',
              'ask_id INT(10) PRIMARY KEY AUTO_INCREMENT,
			  seller_id INT(4),
			  company_id INT(4),
			  size INT(100),
			  price FLOAT(50,2)'
			  );
  createTable('message',
              'name VARCHAR(50),
              email VARCHAR(50),
              message VARCHAR(50),
			  phone VARCHAR(50)
			  ');
			  
			  
	?>

    <br>...done.
  </body>
</html>
