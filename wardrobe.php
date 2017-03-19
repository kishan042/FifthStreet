<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "My Wardrobe ";
		
		// Meta description
		$Description = "Fill Text";

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
		$wardrobe = "#"; 
		$search = SEARCH; 
		$profile = PROFILE; 
		$basket = BASKET; 

		// Type "option-active" inside, to make option active
		$ActiveTrending = "";
		$ActiveOffers = "";
		$ActiveWardrobe = "option-active";

		include (ROOT_PATH . 'INC/Navbar.php');


// Hero-half-plain
		// copy for H1
		$h1 = "MY WARDROBE";
		$br = "<br class='hidden-sm-down'>";


		//Copy for description
		$description = "Access your wardrobe below to see your wishlist,". $br ." utilise your souvenirs and exchange or return products,". $br ." without signing up.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php'); 


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-sm-up";

		include (ROOT_PATH . 'INC/Spacing-mt-50.php');



// Blocks-two-left-compact
				// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "MY WISHLIST";
		// Copy
		$BlockText = "Add products to your wishlist in-store or online, as you wander across a range of brand collections and products that inspires you.";
		// type 'hide' to remove the button
		$hideCTA = " ";
		// Link for CTA
		$BlockLink = BASE_URL . "wardrobe/wishlist.php";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = $img . "lifestyle/wardrobe-wishlist-heart-with-hands.jpg";


		include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');



// Blocks-two-right-compact
		// Background colour class for text
		$BlockBG = " ";
		// Title
		$BlockTitle = "MY SOUVENIRS";
		// Copy
		$BlockText = "Gather a collection of souvenirs, ranging from exclusive offers to unique prizes. Anything is possible.";
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = BASE_URL . "wardrobe/souvenirs.php";
		// CTA copy
		$BlockCTA = "See Souvenirs";
		// Image URL
		$BlockIMG = $img . "lifestyle/wardrobe-souvenirs-sun-flower.jpg";

		include (ROOT_PATH . 'INC/Blocks-two-right-compact.php');


// Blocks-two-left-compact
		// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "MY RECEIPTS";
		// Copy
		$BlockText = "View all of the products you have bought in-store or online, so you can return or exchange products at will.";
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = BASE_URL . "wardrobe/receipts.php";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = $img . "lifestyle/wardrobe-receipts-cloths-on-hanger.jpg";

		include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');


// Spacing - For mobile	
		// Add a class to hide the seperation
		$hide = "hidden-sm-up";

		include (ROOT_PATH . 'INC/Spacing-mt-50.php');

// Spacing	- For tablet and up
		// Add a class to hide the seperation
		$hide = "hidden-xs-down";

		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer
		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = "";

		// Bread crumbs for the current page
		$CurrentPage = "Wardrobe";

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php');

?> 