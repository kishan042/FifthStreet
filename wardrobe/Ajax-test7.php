<?php
$first_name = ($_GET["first_name"]);
$surname = ($_GET["surname"]);
$email = ($_GET["email"]);

// empty object
$collect = [];

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
		
		    	array_push($collect, $product);
		}
	}

 } // End of the isset function 

$Count = count($collect);
$limit = "?limit=" . $Count . "&";
$user_link = http_build_query($collect, 'id');

$to = "thefifthstreet01@gmail.com";
$subject = "E-receipt - Fifth Street";
$message = " Name: " . $first_name . " " . $surname . 
		   "\r\n Email: " . $email . 
		   "\r\n" . 
		   "\r\n Hi " . $first_name . "," .
		   "\r\n Thank you for shopping with us today. Click on the link below to view your E-receipt." .
		   "\r\n Remember you can also return and exchange any of the products purchased from the link below as well !" .
		   "\r\n" .
		   "\r\n http://thefifthstreet.com/wardrobe/receipts.php" . $limit . $user_link .
		   "\r\n" .
		   "\r\n Have a great day," .
		   "\r\n The Fifth Street Team.";


$from = "Contact Form";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

mail($to, $subject, $message, $headers);