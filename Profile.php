<?php
// Config file
include_once 'INC/Config.php';

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
		$description = "No barriers between the physical and digital world anymore. For Android users, you can use your phone to tap on products to save them to your wardrobe or find out more information.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php'); 



// Blocks-two-left-compact
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "NFC compatibility";
		// Copy
		$BlockText = "No barriers between the physical and digital world anymore. For Android usevrs, you can use your phone to tap on products to save them to your wardrobe or find out more information.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1477346611705-65d1883cee1e?dpr=2&auto=format&fit=crop&w=1500&h=1001&q=80&cs=tinysrgb&crop=";

		include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');


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