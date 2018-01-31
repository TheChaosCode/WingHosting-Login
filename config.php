<?php
	define('DBHOST', '*****');
	define('DBUSER', '*****');
	define('DBPASS', '*****');
	define('DBNAME', '*****');

 	$dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

 	if ($dbconnect->connect_error) {
 	 		die('Database Not Connect, Error : ' . $dbconnect->connect_error);
 	 	}

?>
