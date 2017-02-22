<?php 
ini_set('display_errors', 1);
error_reporting(~0);



$productID = $_POST['key'];


  //DB - Model
 //  include(ROOT_PATH . "INC/DB/model.php");

 //  // for ($i=0; $i != productID.length; $i++) { 
  	
 //  // }

	//   // Try catch block to create a qury to the products table
	// try {
	//     $results = $db->query("
	//         SELECT name, price, img, sku, paypal 
	//         FROM products 
	//         ORDER BY sku DESC 
	//         LIMIT 4"); 

	// } catch (Exception $e) { // catch exception if query fails and then exit
	//     echo "Data could not be retrived from database.";
	//     exit;
	// }

	// // // Following code to view the query in an array format
	// $recent = $results->fetchAll(PDO::FETCH_ASSOC);

	// $recent = array_reverse($recent);

	// // returns the items from the database
	// return $recent;

// $data = array('key' => $productID );
	// for ($i=0; $i != count($productID); $i++) { 
	// 	echo json_encode($i);
	// }
// foreach($data as $key => $val){
//   $val2 = $key[$value];
//   echo json_encode($val2);

//   // echo $val."-".($key+1)."-".$val2;
// }


// foreach ($data as $value) {
// 	//echo json_encode($value[0]['item']);
// 	// echo json_encode($value[1]['item']);

// 	// foreach ($value as $key) {
// 	// 	echo json_encode($key);
// 	}
// }


// echo json_encode($data);

?>