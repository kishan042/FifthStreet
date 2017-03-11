<?php
// Config file
include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "My Profile ";
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";

		// CSS path
		$CSSPath = BASE_URL . "CSS/Styles.css";
		
		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');


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
		$profile = "#"; 
		$basket = BASKET; 

		include (ROOT_PATH . 'INC/Navbar.php'); 


// Hero-half-plain
		// copy for H1
		$h1 = "MY PROFILE";

		//Copy for description
		$description = "No need to sign-up for accessing our three ultimate experiences.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php'); 


// Blocks-three
		// Image URL
		$BlockIMG_3 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include (ROOT_PATH . 'INC/Blocks-three.php');

// Spacing	
		// Add a class to hide the seperation
		$hide = "";

		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Blocks-two-left-compact
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "COMING SOON";
		// Copy
		$BlockText = "Request early access to sync your different devices, so you never lose your wishlist & souvenirs, across mobile, tablet and desktop.";
		// type 'hide' to remove the button
		$hideCTA = " ";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "PRE-REGISTER";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1477346611705-65d1883cee1e?dpr=2&auto=format&fit=crop&w=1500&h=1001&q=80&cs=tinysrgb&crop=";

		include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = " ";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');



// Contact form
		include (ROOT_PATH . 'INC/Form-contact-compact.php'); 


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-xs-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer

		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = "";

		// Bread crumbs for the current page
		$CurrentPage = "My Profile";

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php'); 

?> 