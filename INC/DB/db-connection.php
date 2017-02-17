<?php

// Try catch block to connect to the database
try { 
	// Conection to the database - Host + database name + portnumber + username + password
	$db = new PDO("mysql:host=" . DB_HOST .
				  ";dbname=" . DB_NAME . 
				  ";port=" . DB_PORT, DB_USER, DB_PASS);
	// Compensate additional errors such as invaild queryS 
	// This method tells our PDO object to throw an exception whenever an error is encountered.
	$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Execute SQL command by defining the character set to be used for sending data to and from the database.
	$db -> exec("SET NAMES 'utf8' ");

	} catch (Exception $e) { // catch exception if database connection fails and then exit
		echo "Could not connect to the database. Please try again later.";
		exit; 
}
?>