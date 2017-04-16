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
$message = '
<html>
<body>
  <p>Hi ' . $first_name .',</p>
  <p>Thank you for shopping with us today. <br> Click on the link below to collect your E-receipt in the form of products. <br> Remember you can also return and exchange any of the products purchased from the link below as well, just click on the product item.
  </p>
  <br><br>
  <a style="color:#48d8d8;" href="http://thefifthstreet.com/wardrobe/receipt.php' . $limit . $user_link . '">Collect E-receipt</a>
  <br><br>
  <p>As a reward for being a great customer, click on the link below to claim your free souvenir.
  </p>
  <br><br>
  <a style="color:#48d8d8;" href="http://thefifthstreet.com/wardrobe/souvenirs.php?sou=1438">Claim Reward</a>
  <br><br>
  <p>Have a great day,<br>The Fifth Street Team.</p>

</body>
</html>
';

$from = "Contact Form";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "From:" . $from . "\r\n";

mail($to, $subject, $message, $headers);