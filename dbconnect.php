<?php

	error_reporting( ~E_ALL & ~E_DEPRECATED &  ~E_NOTICE );
	
	define('DBHOST', 'iot.bounceme.net');
	define('DBUSER', 'root');
	define('DBPASS', 'deadfish22');
	define('DBNAME', 'iot');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}
