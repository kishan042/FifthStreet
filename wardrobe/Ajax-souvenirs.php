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
	 	$souvenirID = $_POST['key']; 
	 	// coverts JSON object from Ajax to php object
		$data = array('key' => $souvenirID );
		// itrates over layer 1 of object to get the index value
		foreach ($data as $value) {
			// iterates over layer 2 of object to get the actual product ids
			foreach ($value as $key) {
				$souvenir = $key['item'];
			
			
				    $results = $db->query("SELECT * FROM Souvenirs WHERE souvenir_id = '$souvenir';"); 
			    	$customer_row = mysqli_fetch_assoc($results);
			    	$id = $customer_row["souvenir_id"];
			    	$souvenir_name = $customer_row["souvenir_name"];
			    	$brand_name = $customer_row["brand_name"];
			    	$link = $customer_row["souvenir_link"];
			    	$image = $customer_row["image"];
			    	$alt = $customer_row["alt"];
			    	$souvenirData = array('id' => $id, 'souvenir_name' => $souvenir_name, 'brand_name' => $brand_name, 'link' => $link,   'image' => $image, 'alt' => $alt );
			    	array_push($object, $souvenirData);
			}
		}

	 } // End of the isset function 

	 // echo json_encode($souvenirData);
	 error_log(print_r($object, true));
	 echo json_encode($object);
}


?>