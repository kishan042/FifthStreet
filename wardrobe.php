<?php
// Config file
include_once 'INC/Config.php';

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

		//Copy for description
		$description = "No barriers between the physical and digital world anymore. For Android users, you can use your phone to tap on products to save them.";

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
		$BlockText = "Wander across a range of brand collections and save any product which inspires you. Why stop there, you can even go to any physical store.";
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = "wardrobe/wishlist.php";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');



// Blocks-two-right-compact
		// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "MY SOUVENIRS";
		// Copy
		$BlockText = "Collect souvenirs as you purchase products in-store or online. You could earn a prize, a unique fitness video or vouchers. Anything is possible.";
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = "wardrobe/souvenirs.php";
		// CTA copy
		$BlockCTA = "See Souvenirs";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1477346611705-65d1883cee1e?dpr=2&auto=format&fit=crop&w=1500&h=1001&q=80&cs=tinysrgb&crop=";

		include (ROOT_PATH . 'INC/Blocks-two-right-compact.php');


// Blocks-two-left-compact
		// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "MY RECEIPTS";
		// Copy
		$BlockText = "View all of the products you have bought and save E-receipts for any purchase you make in-store or online. Return or exchange products at will.";
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = "wardrobe/receipts.php";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

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