<?php

// Config file
		include_once 'INC/DB/Config.php';	

// Header
		// Title tag
		$Title = "Thank you ";
		// Meta description
		$Description = "Thank you for purchasing";
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
 		$description = "Your payment has gone through, and your products will arrive the next day. Please find links below to view your e-receipt and free souvenirs to enjoy.";

		include 'INC/Hero-half-plain.php';  


// Blocks-two-left-compact
				// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "COLLECT SOUVENIR";
		// Copy
		$BlockText = "Congratulations! As a reward please claim a free souvenir by clicking on the claim button below";
		// type 'hide' to remove the button
		$hideCTA = " ";
		// Link for CTA
		$BlockLink = BASE_URL . "wardrobe/souvenirs.php?sou=1437";
		// CTA copy
		$BlockCTA = "View Souvenir";
		// Image URL
		$BlockIMG = $img ."souvenirs/collection/plaza-collection.jpg";

		include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');


// Blocks-two-right-compact
				// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "VIEW E-RECEIPT";
		// Copy
		$BlockText = "Returns are always free, so take full advantage of returning products through your e-receipts. ";
		// type 'hide' to remove the button
		$hideCTA = " ";
		// Link for CTA
		$BlockLink = BASE_URL . "wardrobe/receipts.php";
		// CTA copy
		$BlockCTA = "View E-Receipt";
		// Image URL
		$BlockIMG = $img ."home/returning-and-exchanging-products.jpg";

		include (ROOT_PATH . 'INC/Blocks-two-right-compact.php');


// Mobile Spacing	
		$hide = "hidden-md-up";
		include 'INC/Spacing-mt-50.php';


// Desktop Spacing	
		$hide = "hidden-sm-down";
		include 'INC/Spacing-mt-100.php';


// Footer
		// If current pages does not exist then add the 
        $hide = "hidden-xs-up";

        // Bread crunb for the previous page 
        $PreviousPage = "";

        // Bread crumbs for the current page
        $CurrentPage = "Thank You";

		include (ROOT_PATH . 'INC/Footer.php');