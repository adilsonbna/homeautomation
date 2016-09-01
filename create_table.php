<?php

	error_reporting( ~E_ALL & ~E_DEPRECATED &  ~E_NOTICE );
	
	define('DBHOST', 'iot');
	define('DBUSER', 'iot');
	define('DBPASS', 'deadfish2');
	define('DBNAME', 'iot');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);

	//mysql_query = (CREATE TABLE IF NOT EXISTS `users` (`userId` int(11) NOT NULL AUTO_INCREMENT, `userName` varchar(30) NOT NULL, `userEmail` varchar(60) NOT NULL,
  //`userPass` varchar(255) NOT NULL, PRIMARY KEY (`userId`), UNIQUE KEY `userEmail` (`userEmail`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}
	
	?>
