<?php

// Try catch block to connect to the database
try { 
	// Conection to the database - Host + database name + portnumber + username + password
	$db = new PDO("mysql:host=" . DB_HOST .
				  ";dbname=" . DB_NAME . 
				  ";port=" . DB_PORT, DB_USER, DB_PASS);
	// Compensate additional errors such as invaild query 
	// This method tells our PDO object to throw an exception whenever an error is encountered.
	$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Execute SQL command by defining the character set to be used for sending data to and from the database.
	$db -> exec("SET NAMES 'utf8' ");

} catch (Exception $e) { // catch exception if database connection fails and then exit
	echo "Could not connect to the database. Please try again later.";
	exit; 
}

// echo "it works";

// // Try catch block to create a qury to the products table
// try {
// 	$results = $db->query("SELECT name, price, img, sku, paypal From products ORDER BY sku ASC"); 

// } catch (Exception $e) { // catch exception if query fails and then exit
// 	echo "Data could not be retrived from database.";
// 	exit;
// }

// // Following code to view the query in an array format
// $products = $results->fetchAll(PDO::FETCH_ASSOC);

// Following code to view the query in an array format
// echo "<pre>";
// var_dump($results->fetchAll(PDO::FETCH_ASSOC));
// echo "</pre>";
?>