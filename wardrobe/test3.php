<?php 
ini_set('display_errors', 1);
error_reporting(~0);

	// Config file
	//include_once '../INC/Config.php';

// Try catch block to connect to the database
	// Conection to the database - Host + database name + portnumber + username + password
	//  try { 

	// $db = new PDO("mysql:host=localhost;dbname=shirts4mike;port=8889","root","root");
	// // Compensate additional errors such as invaild queryS 
	// // This method tells our PDO object to throw an exception whenever an error is encountered.
	// $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// // Execute SQL command by defining the character set to be used for sending data to and from the database.
	// $db -> exec("SET NAMES 'utf8' ");

 //   } catch (Exception $e) { // catch exception if database connection fails and then exit
	// echo "Could not connect to the database. Please try again later.";
	// exit; 
	// }

$object = [];

$db = mysqli_connect("localhost","root","root","shirts4mike", "8889");

// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
else {
	error_log('30: connected');
	if(isset($_POST['key'])){ 
	 	$productID = $_POST['key']; 
		$data = array('key' => $productID );
		foreach ($data as $value) {
			foreach ($value as $key) {
				$product = $key['item'];
				error_log('37'.$product);
				// Try catch block to create a qury to the products table
			
				    $results = $db->query("SELECT * FROM products WHERE sku = '$product';"); 
				    // $row = $results->fetch_assoc();
				    // error_log(print_r($row), TRUE);
			    	error_log('results = true');
			    	$customer_row = mysqli_fetch_assoc($results);
			    	$id = $customer_row["sku"];
			    	$name = $customer_row["name"];
			    	$image = $customer_row["img"];
			    	$price = $customer_row["price"];
			    	$productData = array('id' => $id, 'name' => $name, 'image' => $image, 'price' => $price );
			    	array_push($object, $productData);
			    	// error_log(print_r($productData));
				   

				// // Following code to view the query in an array format
				// $recent = $results->fetchAll(PDO::FETCH_ASSOC);
				// error_log(print_r($recent), TRUE);

				// $recent = array_reverse($recent);

				// // returns the items from the database
				// //echo json_encode($key['item']);

				// return $recent;
			}
		}

	 } // End of the isset function 

	 // echo json_encode($productData);
	 error_log(print_r($object, true));
	 echo json_encode($object);
}

//$productID = $_POST['key'];



// foreach ($data as $value) {

// 	foreach ($value as $key) {
// 		$product = $key['item'];
// 		error_log($product);



// 		// Try catch block to create a qury to the products table
// 		try {
// 		    $results = $db->query("SELECT * FROM products WHERE sku = '$product'"); 
// 		    error_log(print_r($results), TRUE);
// 		    // if ($results) {
// 		    // 	error_log('results = true');
// 		    // 	$test = mysqli_fetch_assoc($results);
// 		    // 	$recent = $results->fetchAll(PDO::FETCH_ASSOC);
// 		    // 	error_log(print_r($test), TRUE);

// 		    // } else {
// 		    // 	error_log('results = false');
// 		    // }

// 		} catch (Exception $e) { // catch exception if query fails and then exit
// 		    echo "Data could not be retrived from database.";
// 		    exit;
// 		}

// 		// // Following code to view the query in an array format
// 		$recent = $results->fetchAll(PDO::FETCH_ASSOC);
// 		error_log(print_r($recent), TRUE);

// 		$recent = array_reverse($recent);

// 		// returns the items from the database
// 		//echo json_encode($key['item']);

// 		return $recent;

// 	}
// }


// echo json_encode($data);

?>