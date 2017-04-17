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

		// Config file
				include_once 'INC/DB/Config.php';	
    
		
		// Header
				// Title tag
				$Title = "Contact form ";
				// Meta description
				$Description = "Fill text";
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
				$h1 = "THANK YOU!";

				//Copy for description
		 		$description = "Your message has been sent to us successfully, and we will be in touch as soon as possible.";

				include 'INC/Hero-half-plain.php';  


		// Blocks-two-left-compact
						// Background colour class for text
				$BlockBG = "bg-gray-lightest";
				// Title
				$BlockTitle = "COLLECT SOUVENIR";
				// Copy
				$BlockText = "Congratulations! As a reward please claim a free souvenir by clicking on the claim button below 
";
				// type 'hide' to remove the button
				$hideCTA = "";
				// Link for CTA
				$BlockLink = BASE_URL . "wardrobe/souvenirs.php?sou=1234";
				// CTA copy
				$BlockCTA = "View Souvenir";
				// Image URL
				$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

				include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');


		// Spacing	
				include 'INC/Spacing-mt-100.php';



		// Footer
				// If current pages does not exist then add the 
				$hide = " ";

				// Bread crunb for the previous page 
				$PreviousPage = "About us";

				// Bread crumbs for the current page
				$CurrentPage = " ";

				// JS path
				$JSPath = BASE_URL . "JS/jquery.js";

				include (ROOT_PATH . 'INC/Footer.php');

} else {

		// Config file
		include_once 'INC/DB/Config.php';	

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
				$h1 = "SORRY !";

				//Copy for description
		 		$description = "Unfortunately, an error occurred while sending your message. <br> We apologies for the inconvenience, and would like to offer a free souvenir for you to enjoy while we fix this issue.";

				include 'INC/Hero-half-plain.php'; 

		// Blocks-two-left-compact
				// Background colour class for text
				$BlockBG = "bg-gray-lightest";
				// Title
				$BlockTitle = "COLLECT SOUVENIR";
				// Copy
				$BlockText = "Please claim a free souvenir by clicking on the claim button below 
";
				// type 'hide' to remove the button
				$hideCTA = "";
				// Link for CTA
				$BlockLink = BASE_URL . "wardrobe/souvenirs.php?sou=101";
				// CTA copy
				$BlockCTA = "View Souvenir";
				// Image URL
				$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

				include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');  



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