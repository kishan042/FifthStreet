<?php
// Config file
include_once 'INC/Config.php';


// Header
		// Title tag
		$Title = "Home ";
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";

		// CSS path
		$CSSPath = BASE_URL . "CSS/Styles.css";
		
		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');


// Connect to the database
require (ROOT_PATH . 'INC/database/db-connection.php');


// Try catch block to create a qury to the products table
try {
	$results = $db->query("SELECT name, price, img, sku, paypal From products ORDER BY sku ASC"); 
} catch (Exception $e) { // catch exception if query fails and then exit
	echo "Data could not be retrived from database.";
	exit;
}
echo "<pre>";
var_dump($results->fetchALL(PDO::FETCH_ASSOC));
echo "</pre>";
?>
