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
    
// Header
		// Title tag
		$Title = "Contact form ";
		// Meta description
		$Description = "Fill text";
		// CSS path
		$CSSPath = "CSS/Styles.css";
		// Image source
		$img = "IMG/";

		include 'INC/Header.php';


// Navbar
		// Links to other pages		
		$men = MEN; 
		$women = WOMEN; 
		$brands = BRANDS; 
		$about = ABOUT; 
		$trending = TRENDING; 
		$offers = OFFERS; 
		$wardrobe = WARDROBE; 
		$search = SEARCH; 
		$profile = PROFILE; 
		$basket = BASKET; 
		include 'INC/Navbar.php'; 


// Hero-plain
		// copy for H1
		$h1 = "Thank you !";

		include 'INC/Hero-half-plain.php';  


// Article paragraph
		// 
		$copy = "Your message has been sent to us successfully, and we will be in touch as soon as possible.";

		include 'INC/Article-paragraph.php';


// Spacing	
		include 'INC/Spacing-hr-compact.php';



// Contact form
		include 'INC/Form-contact-compact.php'; 



// Spacing	
		include 'INC/Spacing-mt-100.php';



// Footer
		// page tag
		$page = "Contact form";

		include 'INC/Footer.php'; 
   


} else {
    
// Header
		// Title tag
		$Title = "Contact Form ";
		// Meta description
		$Description = "Fill text";
		// CSS path
		$CSSPath = "CSS/Styles.css";
		// Image source
		$img = "IMG/";

		include 'INC/Header.php';


// Navbar
		// Links to other pages
		$home = "index.php";		
		$men = "#";
		$women = "#";
		$brands = "#";
		$about = "about-us.php";
		$trending = "#";
		$offers = "#";
		$wardrobe = "wardrobe.php";
		$search = "#";
		$profile = "#";
		$basket = "#";
		include 'INC/Navbar.php'; 


// Hero-plain
		// copy for H1
		$h1 = "Sorry !";

		include 'INC/Hero-half-plain.php';  


// Article paragraph
		// 
		$copy = "Unfortunately, an error occurred while sending your message. Please try again through the contact form below or try again later on. We apologies for the inconvenience.";

		include 'INC/Article-paragraph.php';


// Spacing	
		include 'INC/Spacing-hr-compact.php';



// Contact form
		include 'INC/Form-contact-compact.php'; 



// Spacing	
		include 'INC/Spacing-mt-100.php';



// Footer
		// page tag
		$page = "Contact form";

		// JS path
		$JSPath = "JS/jquery.js";

		include 'INC/Footer.php'; 

    
}
?> 







