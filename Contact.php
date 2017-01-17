<?php
// Get values from the form
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
    
    include("about-us.php");

   
} else {
    
    include("index.php");

    
}
?> 







