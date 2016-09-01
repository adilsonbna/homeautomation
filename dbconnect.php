<?php

	error_reporting( ~E_ALL & ~E_DEPRECATED &  ~E_NOTICE );
	
	define('DBHOST', 'fdb15.mutanthost.com');
	define('DBUSER', '2186856_db');
	define('DBPASS', 'HM3NuCrSBx');
	define('DBNAME', '2186856_db');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}