<?php 
ini_set('display_errors', 1);
error_reporting(~0);

// Config file
include_once '../INC/DB/Config.php';


// empty object
$object = [];
// connect to db
$db = mysqli_connect( DB_HOST,DB_USER,DB_PASS,DB_NAME, DB_PORT);

// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
else { // if connected
	// check if data key from ajax is set, 
	if(isset($_POST['key'])){ 
		//place it in a variable
	 	$productID = $_POST['key']; 
	 	// coverts JSON object from Ajax to php object
		$data = array('key' => $productID );
		// itrates over layer 1 of object to get the index value
		foreach ($data as $value) {
			// iterates over layer 2 of object to get the actual product ids
			foreach ($value as $key) {
				$product = $key['item'];
			
			
				    $results = $db->query("SELECT * FROM Products WHERE product_id = '$product';"); 
			    	$customer_row = mysqli_fetch_assoc($results);
			    	$id = $customer_row["product_id"];
			    	$name = $customer_row["product_name"];
			    	$image = $customer_row["image"];
			    	$price = $customer_row["price"];
			    	$productData = array('id' => $id, 'name' => $name, 'image' => $image, 'price' => $price );
			    	array_push($object, $productData);
			}
		}

	 } // End of the isset function 

	 // echo json_encode($productData);
	 error_log(print_r($object, true));
	 echo json_encode($object);
}


?>