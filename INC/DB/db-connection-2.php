<?php


// Details to Connect to the database 
define("DB_HOST_2", "localhost");
define("DB_NAME_2", "Fifth_Street");
define("DB_PORT_2", "8889"); // default 3306
define("DB_USER_2", "root");
define("DB_PASS_2", "root");


// Try catch block to connect to the database
try { 
	// Conection to the database - Host + database name + portnumber + username + password
	$db = new PDO("mysql:host=" . DB_HOST_2 .
				  ";dbname=" . DB_NAME_2 . 
				  ";port=" . DB_PORT_2, DB_USER_2, DB_PASS_2);
	// Compensate additional errors such as invaild queryS 
	// This method tells our PDO object to throw an exception whenever an error is encountered.
	$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Execute SQL command by defining the character set to be used for sending data to and from the database.
	$db -> exec("SET NAMES 'utf8' ");

	} catch (Exception $e) { // catch exception if database connection fails and then exit
		echo "Could not connect to the new database. Please try again later.";
		exit; 
}
?>