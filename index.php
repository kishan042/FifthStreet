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
		$HeroUrl = $img . "home/fifth-street-male-portrait-black-and-white-hero.jpg";
		// Amount of tint on image
		$tint = "tint-0";
		// copy for H1
		$h1 = "MY WARDROBE";
		// copy for h2
		$description = "No sign-up required";
		//url for button (CTA)
		$ButtonUrl = BASE_URL . $wardrobe;
		// copy for button (CTA)
		$ButtonCopy = "FIND OUT MORE";

		include (ROOT_PATH . 'INC/Hero-full-left.php');  


// Product-finder
		include (ROOT_PATH . 'INC/Product-finder.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = " ";
		
		include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Blocks-two-left-compact
		$BlockBG = "bg-white";
		// Title
		$BlockTitle = "NEW BRANDS";
		// Copy
		$BlockText = "Discover new brands every day to find new styles and products that inspire you.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = $img ."home/product-shot2.jpg";

		include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');


// Blocks-two-right-compact
		// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "NFC";
		// Copy
		$BlockText = "No barriers between the physical and digital world anymore. Especially Android users, you can use your phone to tap on products to save them to your wardrobe or find out more information.";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = $img ."home/6.jpg";

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
		$BlockTitle = "FREE SOUVENIR";
		// Copy
		$BlockText = "Collect souvenirs as you interact with brands in-store or online. You could earn a prize, vouchers or exclusive fashion collection. Anything is possible.";
		// type 'hide' to remove the button
		$hideCTA = " ";
		// Link for CTA
		$BlockLink = BASE_URL . "wardrobe/souvenirs.php?sou=1236";
		// CTA copy
		$BlockCTA = "Collect Souvenir";
		// Image URL
		$BlockIMG = $img ."home/4.jpg";

		include (ROOT_PATH . 'INC/Blocks-two-left.php');


// Blocks-two-right
		// Background colour class for text
		$BlockBG = "";
		// Title
		$BlockTitle = "RETURN & EXCHANGE";
		// Copy
		$BlockText = "E-receipts will be saved here, for any purchase you make in-store or online, so you can return or exchange products at will.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = $img ."home/3.jpg";

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