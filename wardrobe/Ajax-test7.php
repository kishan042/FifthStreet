<?php 
ini_set('display_errors', 1);
error_reporting(~0);


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

	 error_log(print_r($collect, true));
	 error_log(print_r($Count, true));
	 error_log(print_r($limit, true));
	 error_log(print_r($user_link, true));


// Get values from the form
$name = $_POST['name'];
$email = $_POST['email'];

$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">click on the link below</p>';
$message .= '<a href="http://localhost:8888/_Github/FifthStreet/test5.php' . $limit . $user_link .'">click me to claim</a>';
$message .= '</body></html>';

$to = "kishankoriya7@gmail.com";
$subject = "Contact Form - Fifth Street";
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message;


$from = "Contact Form";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

if (mail($to, $subject, $message, $headers)) {

		?> <h1>it works at 20:00</h1><?php 

}