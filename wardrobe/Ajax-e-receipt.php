<?php
// Get values from the form
$link = $_POST['link'];
$limit = $_POST['limit'];

$endLimit = "?limit=" . $limit . "&";
$update = array($link);
$endQuery = http_build_query($update, 'id');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "kishankoriya7@gmail.com";
$subject = "Contact Form - Fifth Street";
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message;


$from = "Contact Form";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";


if (mail($to, $subject, $message, $headers)) {

echo $endQuery;

?>


	<a href="test5.php?limit=<?php echo $limit . "&," . $link ?>">
		<p class="p-3"><?php echo $query ?></p>
		<p><?php echo parse_url($data); ?></p>
	</a> 

	<a href="test5.php<?php echo $endLimit . $endQuery ?>">
		<p class="p-3"><?php echo $query ?></p>
		<p><?php echo parse_url($data); ?></p>
	</a> 


<?php



}