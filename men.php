<?php
// Config file
include_once 'INC/Config.php';

// Header
		// Title tag
		$Title = "Men ";
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";

		// CSS path
		$CSSPath = BASE_URL . "CSS/Styles.css";
		
		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');

// Navbar
		// Links to other pages	
		$men = "#"; 
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

// Hero-half
        //IMG URL
        $url = "https://images.unsplash.com/photo-1476147578954-fffd6bf00ab0?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop="; 
        // Amount of tint on image
        $tint = "tint-1";
        // copy for H1
        $h1 = " ";

        include (ROOT_PATH . 'INC/Hero-half.php');

// Spacing	
		// Add a class to hide the seperation
		//$hide = "hidden-xs-down";

		//include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Blocks-two-compact-extend

		// Background colour class for text
		$BlockBG = "bg-white";
		// Title
		$BlockTitle = "FOR MEN";
		// Copy
		$BlockText = "Wander across a range of brand collections and save any product which inspires you. Why stop there, you can even go to any physical store.";
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = "wardrobe.php";
		// CTA copy
		$BlockCTA = "View all items";
		// Image 1 URL 
		$BlockIMG_1 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";
		// Image 2 URL 
		$BlockIMG_2 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";
		// Image 3 URL 
		$BlockIMG_3 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include (ROOT_PATH . 'INC/Blocks-two-compact-extend.php');

$hide = "hidden-sm-down";

include (ROOT_PATH . 'INC/Spacing-mt-50.php');

include (ROOT_PATH . 'INC/Blocks-grid.php');

$hide = "hidden-sm-down";

include (ROOT_PATH . 'INC/Spacing-mt-100.php');

include (ROOT_PATH . 'INC/Blocks-three.php');

include (ROOT_PATH . 'INC/Blocks-four.php');
// Spacing	
		// Add a class to hide the seperation
		//$hide = "hidden-xs-down";

		//include (ROOT_PATH . 'INC/Spacing-mt-100.php');



// Footer

		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = "";

		// Bread crumbs for the current page
		$CurrentPage = "Men";

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php'); 

?> 