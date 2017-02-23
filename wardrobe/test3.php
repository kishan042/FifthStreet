<?php 
ini_set('display_errors', 1);
error_reporting(~0);

	// Config file
	include_once '../INC/Config.php';

 //  //DB - Model
 //  include(ROOT_PATH . "INC/DB/db-connection.php");

// Try catch block to connect to the database
	// Conection to the database - Host + database name + portnumber + username + password
	$db = new PDO("mysql:host=localhost;port=8889;dbname=shirts4mike", 'root', "root");
	// Compensate additional errors such as invaild queryS 
	// This method tells our PDO object to throw an exception whenever an error is encountered.
	$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Execute SQL command by defining the character set to be used for sending data to and from the database.
	$db -> exec("SET NAMES 'utf8' ");


$productID = $_POST['key'];



$data = array('key' => $productID );



foreach ($data as $value) {

	foreach ($value as $key) {
		$product = $key['item'];
		error_log($product);



		// Try catch block to create a qury to the products table
		try {
		    $results = $db->query("SELECT * FROM products where sku = $product"); 
		    if ($results) {
		    	error_log('results = true');
		    	$test = mysqli_fetch_assoc($results);
		    	//$recent = $results->fetchAll(PDO::FETCH_ASSOC);
		    	error_log(print_r($test), TRUE);
		    } else {
		    	error_log('results = false');
		    }

		} catch (Exception $e) { // catch exception if query fails and then exit
		    echo "Data could not be retrived from database.";
		    exit;
		}

		// // Following code to view the query in an array format
		$recent = $results->fetchAll(PDO::FETCH_ASSOC);
		error_log(print_r($recent), TRUE);

		$recent = array_reverse($recent);

		// returns the items from the database
		//echo json_encode($key['item']);

		return $recent;

	}
}


// echo json_encode($data);

?>