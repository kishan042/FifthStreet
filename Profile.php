<?php
// Config file
		include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "My Profile ";
		// Meta description
		$Description = "No need to sign-up for accessing our three ultimate experiences, add products to your wishlist, collect rewards and return and exchange products through your e-receipt";
		
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
		$description = "No need to sign-up for accessing our three ultimate experiences below.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php'); 


// Blocks-three-plain grid
		// Background colour class for block container
		$BlockBG = " ";

		// Image 1 URL 
		$Blocks_3_IMG_1 = $img . "lifestyle/wardrobe-wishlist-heart-with-hands.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_1 = "Add to your wishlist";
		// Image 1 product description
		$Blocks_3_Description_1 = "Add products to your wishlist in-store or online, while being inspired.";

		// Image 2 URL 
		$Blocks_3_IMG_2 = $img . "lifestyle/wardrobe-souvenirs-sun-flower-2.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_2 = "Collect souvenirs";
		// Image 1 product description
		$Blocks_3_Description_2 = "Gather souvenirs as you engage and experience different brands.";

		// Image 3 URL 
		$Blocks_3_IMG_3 = $img . "lifestyle/wardrobe-receipts-cloths-on-hanger.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_3 = "Return or exchange";
		// Image 1 product description
		$Blocks_3_Description_3 = "View products bought and exchange them at your will.";


		include (ROOT_PATH . 'INC/Blocks-three-plain.php');

// Spacing	
		// Add a class to hide the seperation
		$hide = "";

		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Blocks-two-left-compact
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "COMING SOON";
		// Copy
		$BlockText = "Get access to sync your different devices, so you never lose your wishlist & souvenirs, across mobile, tablet and desktop.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "PRE-REGISTER";
		// Image URL
		$BlockIMG = $img . "lifestyle/coming-soon.jpg";

		include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = " ";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


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

		include (ROOT_PATH . 'INC/Footer.php'); 