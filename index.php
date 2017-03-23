<?php
// Config file
include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "Home ";
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
		$profile = PROFILE; 
		$basket = BASKET; 

		include (ROOT_PATH . 'INC/Navbar.php'); 

// Hero-full
		// IMG URL
		 $HeroUrl = "https://images.unsplash.com/photo-1475403614135-5f1aa0eb5015?dpr=2&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=";
		// Amount of tint on image
		$tint = "tint-0";
		// copy for H1
		$h1 = "FULL ACCESS";
		// copy for h2
		$description = "Fifth Street is all about bridging online and offline";
		//url for button (CTA)
		$ButtonUrl = "about-us.php";
		// copy for button (CTA)
		$ButtonCopy = "FIND OUT MORE";

		include (ROOT_PATH . 'INC/Hero-full-left.php');  


// Product-finder
		include (ROOT_PATH . 'INC/Product-finder.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = " ";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


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


// Blocks-two-right-compact
		// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "EXCLUSIVE CONTENT";
		// Copy
		$BlockText = "Collect souvenirs as you purchase products in-store or online. You could earn a prize, a unique fitness video or vouchers. Anything is possible.";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include (ROOT_PATH . 'INC/Blocks-two-right-compact.php');


// Feature-intro
		include (ROOT_PATH . 'INC/Feature-intro.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-md-up";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Blocks-two-left
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

		include (ROOT_PATH . 'INC/Blocks-two-left.php');


// Blocks-two-right
		// Background colour class for text
		$BlockBG = "";
		// Title
		$BlockTitle = "EXCLUSIVE CONTENT";
		// Copy
		$BlockText = "Collect souvenirs as you purchase products in-store or online. You could earn a prize, a unique fitness video or vouchers. Anything is possible.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include (ROOT_PATH . 'INC/Blocks-two-right.php');


// Footer

		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = "";

		// Bread crumbs for the current page
		$CurrentPage = "Home";

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php'); 

?> 